<?php


namespace controllers;


use components\App;
use components\web\AbstractSecuredWebController;
use helpers\RequestsHelper;

class UserController extends AbstractSecuredWebController
{
    public function actionLogout()
    {
        App::instance()->getSession()->destroy();

        $this->redirect('/guest/login');
    }
}