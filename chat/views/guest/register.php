<?php

use components\View;

/**
 * @var View $this
 */

?>

<form method="post">
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

<p class="text-center mt-2">
<a href="/guest/login"  class="h3 mb-3 mt-4 fw-normal">Or login</a>
</p>