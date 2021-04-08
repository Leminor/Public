<?php

require_once __DIR__ . '/lib/security.php';

$storage = __DIR__ . '/storage/';
$userRout = $_GET['rout'];
$rout = "{$storage}{$userRout}";


delete ($rout);
// unlink - file, unset - dir  or use   rmdir

function delete ($rout) {
    if (is_file($rout)) {
        return unlink($rout);
    } else {
        $inDir = opendir($rout);
        if (!$inDir) {
            return false;
        } else {
            while($file = readdir($inDir)) {
                if ($file != "." && $file != "..") {
                    if (!is_dir($rout."/".$file)) {
                        unlink($rout."/".$file);
                    } else {
                        delete($rout . '/' . $file);
                    }
                }
            }
        }
        return rmdir($rout);
    }
}

$userDir = $_GET['rout'] ?? '';
$dirBefore = dirname($userDir);

header("Location:index.php?rout={$dirBefore}");
