<?php

const RECORDS_ON_PAGE = 5;

require_once __DIR__ . '/Lib/security.php';
$comments = require __DIR__ . '/get-comment.php';

$pagination =  require_once __DIR__ . '/pagination.php';

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
        <form action="add-comment.php" method="post">
<!--            <div class="input-group mb-3 mt-3">-->
<!--                <span class="input-group-text" id="addon-wrapping">Author name:</span>-->
<!--                <input name="author" type="text" class="form-control" placeholder="Enter your name" aria-label="Author name" aria-describedby="addon-wrapping" required>-->
<!--            </div>-->
<!--            <div class="input-group mb-3">-->
<!--                <label class="input-group-text" for="inputGroupSelect01">Gender:</label>-->
<!--                <select name="gender" class="form-select" id="inputGroupSelect01">-->
<!--                    <option selected>Select gender</option>-->
<!--                    <option value="male">Male</option>-->
<!--                    <option value="female">Female</option>-->
<!--                    <option value="other">Other</option>-->
<!--                </select>-->
<!--            </div>-->
            <div class="mt-3">
            <b> Add your comment:</b>
            </div>
            <div class="form-floating mt-3">
                <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                <label for="floatingTextarea2">Comment</label>
            </div>
            <div class="input-group mb-3">
                <label for="floatingTextarea2"></label>
            </div>
            <button type="submit" class="btn btn-success input-group mb-3">Send comment</button>
        </form>
        <div>
        <?php foreach ($comments as $comment) :?>
        <figure class="form-control">
            <blockquote class="blockquote">
                <p><?= nl2br ($comment['comment']) ?></p>
            </blockquote>
            <figure class="text-end ">
                <figcaption class="blockquote-footer">
                    <?= $comment['name'], "<br>" ?>
                    <?= $comment['age'], ' years old', "<br>" ?>
                    <?= $comment['created_at'] ?>
                </figcaption>
                <a href="editPage.php?id=<?= $comment['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                <a href="delete.php?id=<?= $comment['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
            </figure>
        </figure>

            <?php endforeach; ?>

        </div>


<?= $pagination; ?>


    </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Project 2021</span>
    </div>
</footer>


</body>

</html>
