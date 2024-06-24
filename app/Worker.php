<?php

namespace App;
abstract class Worker implements WorkerInterface
{
    public string $name;
    public int $age;
    public array $hours;

    //public $age = 19;
    public function __construct($name, $age, $hours)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }

    abstract function work();
    public function rest(){
        print_r("i am resting\n");
    }


}