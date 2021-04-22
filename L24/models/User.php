<?php

namespace models;

use components\TestableInterface;
use traits\GoogleTrait;
use traits\YandexTrait;

class User implements TestableInterface
{

    use GoogleTrait, YandexTrait {
        GoogleTrait::makeTransaction insteadof YandexTrait;
        YandexTrait::makeTransaction as makeYandexTransaction;
        GoogleTrait::makeTransaction as makeGoogleTransaction;
    }

    public function varDump(): void
    {
        var_dump(123);
    }

    public function sale()
    {
        $this->makeGoogleTransaction();
        $this->makeYandexTransaction();
    }
}