<?php
$storage = __DIR__ . '/storage';

$userDir = $_GET['rout'] ?? '';
$dir = realpath("{$storage}/{$userDir}");

var_dump($storage, $dir);

if (stripos($dir, $storage) !== 0) {
    $dir = $storage;
}

$userDir = str_replace($storage, '', $dir);

$files = scandir($storage);

$routs = scandir($storage);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="d-flex flex-column h-100">

<main class="flex-shrink-0">
    <div class="container">
        <?php var_dump($dir) ?>
        <form action="create-dir.php" method="post">
            <input type="hidden" name="dir" value="<?= $userDir ?>">
            <div class="row">
                <div class="col-8">
                    <input type="text" name="directoryName" class="form-control" placeholder="Directory Name">
                </div>
                <button type="submit" class="btn btn-info">Create Directory</button>
            </div>
        </form>
        <form>
            <input type="hidden" name="dir" value="<?= $userDir ?>">
            <input
        </form>
        <ul>
            <?php foreach ($routs as $rout) : ?>
            <li>
                <a href="index.php?rout=<?= $userDir ? "{$userDir}/" : '' ?>/<?= $rout ?>">
                    <?= $rout ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>

</body>
</html>