<?php

declare(strict_types=1); //shows that u cant put string in inr even if its changable;

/**
 * Class User
 *
 * @property int $level
 * @property int $grade
 * @property int $size
 */

class User
{
    private static $count = 0;

    public const TYPE = 'person';

    protected string $name;
    protected ?int $age = null;
    protected string $gender;
    protected string $country;
    private array $properties = [];

    public static float $discount = 0;

    public function __construct(string $name, string $gender, ?int $age = null) //works when we just set user with this class
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        var_dump(__CLASS__);

        self::$count++;
    }

    public function __clone(): void
    {
        self::$count++;
    }

    public function __set(string $name, $value): void
    {
        $properties = ['level', 'grade', 'size'];
        if (in_array($name, $properties)) {
            $this->properties[$name] = $value;
        } else {
            throw new MyException('Property is not allowed');
        }
    }

    public function __get(string $name)
    {
     return $this->properties[$name] ?? null;
    }

    public function printInfo () : void
    {
        //var_dump(User::TYPE);
        var_dump(self::TYPE);
        $this->test();
        echo "INFO: {$this->name}, {$this->age} years old";
    }

    public function getCount(): int
    {
        return self::$count;
    }

    public function getDiscount(): float
    {
    self::$discount;
    }

    //

    public function getName () : string
    {
        return $this->name;
    }

    public function makeCoffee():void
    {
        echo 'Here is your coffee<br>';
    }

    public function gerDiscount() : float
    {
        return self::$discount;
    }

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

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    //

    public function toArray() :array
    {
        $data = [];
            foreach($this as $name => $value) {
                $data[$name] = $value;
            }
            return $data;
    }

    public function getType(): string
    {
        return static::TYPE; //we use static to start logic chain from heirs so we see they have their own vip type
    }

    public function __destruct() //cleans everything when object closes
    {
        var_dump('Object is over');
    }



    private function test ()
    {
        var_dump($this->name);
    }

}