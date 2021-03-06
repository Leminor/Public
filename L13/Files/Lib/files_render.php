<?php

function drawFile (string $directory, string $file) : string
{
    $rout = "{$directory}/{$file}";
    if (!is_file($rout)) {
        return '';
    }

    $filetype = mime_content_type($rout);
    $html = '';

    switch ($filetype) {
        case 'image/jpeg':
        case 'image/jpg':
        case 'image/png':
            $content = getFileContent($rout);
            $base64 = base64_encode($content);
            $html = "<img src='data:{$filetype};base64, {$base64}' alt='' width='100%'/>";
            break;
        default:
            downloadFile($rout, $filetype);
    }
    return $html;
}

      function getFileContent(string $rout): string
{
    $content = '';
    $stream = fopen($rout, 'rb');
    while ($data = fread($stream, 1024)) {
        $content .= $data;
    }
    fclose($stream);

    return $content;
}

function downloadFile (string $rout, string $mimeType) : void
{
    header('Content-Description: File Transfer');
    header("Content-Type: {$mimeType}");
    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: 0');
    header('Content-Disposition: attachment; filename="'. basename($rout) .'"');
    header('Content-Length: ' . filesize($rout));
    header('Pragma: public');

    $stream = fopen($rout, 'rb');
    while ($data = fread($stream, 1024)) {
        echo $data;
    }
    fclose($stream);

    exit;
}