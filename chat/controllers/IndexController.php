<?php

namespace controllers;

use components\App;

class IndexController
{
     public function actionIndex(): string
     {
        return App::instance()
            ->getView()
            ->render('index/index', [
                'userName' => 'Lexo',
                'age' => 24]);

     }
}