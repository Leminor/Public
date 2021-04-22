<?php

$commentID = $_GET['id'];
$comment = $_POST['comment'] ?? '';

require_once __DIR__ . '/Lib/db.php';
$db = getDBConnection();

$sql = <<<SQL
    SELECT 
        comments.id,
        comments.comment,
        comments.created_at,
        comments.updated_at,
        users.name,
        users.age,
        users.id
FROM comments
INNER JOIN users ON comments.user_id = users.id
WHERE comments.id = ?
SQL;

$stmt = mysqli_prepare($db, $sql);
mysqli_stmt_bind_param($stmt, 'i', $commentID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$comments = mysqli_fetch_assoc($result);

?>


<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
          crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .container {
            width: auto;
            max-width: 680px;
            padding: 0 15px;
        }
        .brd {
            border: 4px double black; /* Параметры границы */
            background: #E0FFFF; /* Цвет фона */
            padding: 10px; /* Поля вокруг текста */
        }
    </style>

</head>
<body class="d-flex flex-column h-100">
<main class="flex-shrink-0">
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="logout.php" class="btn btn-danger">
                    Log Out
                </a>
            </div>
        </div>
    </header>
    <div class="container">
        <form action="edit.php?id=<?= $commentID ?>" method="post">
            <div class="mt-3">
                <b> Edit your comment:</b>
            </div>
            <div class="form-floating mt-3">
                <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required><?=$comments['comment']?></textarea>
                <label for="floatingTextarea2">Comment</label>
            </div>
            <div class="input-group mb-3">
                <label for="floatingTextarea2"></label>
            </div>
            <button type="submit" class="btn btn-success input-group mb-3">Edit comment</button>
        </form>
    </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Project 2021</span>
    </div>
</footer>


</body>

</html>



