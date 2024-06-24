<?php


namespace App;


class Robot implements WorkerInterface
{
    protected int $number;

    public function __construct($number){
        $this->number = $number;
    }

    public function work(){
        print_r("robot always works, it doesn't need rest\n");
    }
    public function rest(){
        print_r("robot always works, it doesn't need rest\n");
    }


    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

}