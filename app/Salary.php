<?php


namespace App;


class Salary
{
    static public int $totalHours;

    static public function count($hours):int{
        self::$totalHours =array_sum($hours);
        return  self::$totalHours * 45;
    }
}