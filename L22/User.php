<?php

declare(strict_types=1); //shows that u cant put string in inr even if its changable;

class User
{
    public const TYPE = 'person';

    protected string $name;
    protected ?int $age = null;
    protected string $gender;
    protected string $country;

    public function printInfo () : void
    {
        //var_dump(User::TYPE);
        var_dump(self::TYPE);
        $this->test();
        echo "INFO: {$this->name}, {$this->age} years old";
    }


    //

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;
        return $this;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    //

    private function test ()
    {
        var_dump($this->name);
    }

}