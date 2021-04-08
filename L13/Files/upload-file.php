<?php

require_once __DIR__ . '/lib/security.php';

$rout = __DIR__ . '/storage/';

$userDir = $_POST['dir'] ?? '';
if ($userDir) {
    $rout .= "{$userDir}/";
}

$fileData = reArrayFiles($_FILES['file']);
if (empty ($fileData[0]['tmp_name'])) {
    exit('File is required');
}

function reArrayFiles($files)
{
    $filesArray =[];
    $filesCount = count($files["name"]);
    $fileKeys =array_keys($files);

    for ($i = 0; $i < $filesCount; $i++) {
        foreach ($fileKeys as $key) {
            $filesArray[$i][$key] = $files[$key][$i];
        }
    }
    return $filesArray;
}


$allowedTypes = [
    'image/jpeg',
    'image/png',
    'image/gif',
    'application/zip',
    'application/x-zip-compressed',
];

$errors = [];
foreach ($fileData as $file) {
    if (!in_array($file['type'], $allowedTypes)) {
        $errors[] = sprintf(
          'File "%s" should be one of [%s]',
          $file['name'],
          implode(', ', $allowedTypes)
        );
        continue;
    }

    $fileRout = "{$rout}{$file['name']}";
    move_uploaded_file($file['tmp_name'], $fileRout);
}

if ($errors) {
    exit (implode('<br>', $errors));
}


header("Location: index.php?rout={$userDir}");