<?php

final class VipUser extends User
{

    public const TYPE = 'VIP_person';

    public function makeCoffee(): void
    {
        echo 'Gimme coffee <br>';
    }

    public function toArray() :array
    {
        $data = [];
        foreach($this as $name => $value) {
            $data[$name] = $value;
        }
        return $data;
    }

    public function getDiscount(): float
    {
        return parent::getDiscount() + 5;
    }

}
