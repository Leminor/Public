<?php


$registerData = sessionGet('register-form', []);

?>

<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Files</title>
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
    <div class="container">
        <?php foreach (getFlash('errors', []) as $error) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
        <?php endforeach; ?>
        <form method="post">
            <h1 class="h3 mb-3 mt-4 fw-normal">Please sign in</h1>
            <div class="input-group mb-3">
                <input type="email" name="login" class="form-control" id="InputEmail" placeholder="Email address" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password" required>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
        </form>



        <form method="post" action="register.php">
            <h1 class="h3 mb-3 mt-4 fw-normal">Or register</h1>
            <div class="mb-3">
                <label for="InputName" class="visually-hidden">Name</label>
                <input type="text"
                       name="name"
                       value="<?php $registerData['name'] ?? ''?>"
                       class="form-control"
                       id="InputName"
                       placeholder="Name"
                       required>
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="visually-hidden">Email address</label>
                <input type="email"
                       name="login"
                       value="<?php $registerData['login'] ?? ''?>"
                       class="form-control"
                       id="InputEmail"
                       placeholder="Email address"
                       required>
            </div>
            <div class=" mb-3">
                <label for="InputPassword" class="visually-hidden">Password</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       id="InputPassword"
                       placeholder="Password"
                       required>
            </div>
            <div class="mb-3">
                <label for="InputRepeatPassword" class="visually-hidden">Repeat password</label>
                <input type="password"
                       name="repeat_password"
                       class="form-control"
                       id="InputRepeatPassword"
                       placeholder="Repeat password"
                       required>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
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
