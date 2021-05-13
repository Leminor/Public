<?php

use components\View;

/**
 * @var View $this
 */

?>

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

<p class="text-center mt-2">
<a href="/guest/register"  class="h3 mb-3 mt-4 fw-normal">Or register</a>
</p>