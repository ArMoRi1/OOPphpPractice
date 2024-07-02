<?php
require_once("../vendor/autoload.php");

$developer1 = new \App\Developer('Artem', 18, [10,4,10,6,2], 'PHP', 'Laravel');
$developer2 = new \App\Developer('Bohdan', 19, [6,10,7,5,12], 'JS', 'AngularJS');
$robot1 = new \App\Robot(1);
$designer1 = new \App\Designer('Ira', 16, [5,8,8,4,10], 'WebDesign', 'none');

$developer1->setPosition('phpDeveloper');
$developer2->setPosition('jsDeveloper');

//print_r($robot1->getNumber()."\n");
//$developer1->work();
//$developer2->rest()."\n";

$workers = [$developer1, $developer2, $robot1, $designer1];


//foreach ($workers as $worker){
//    $worker->work();
//}
//$salary = \App\Salary::count($developer1->getHours());
//print_r($developer1->getName()." got money. His salary for this week is ".\App\Salary::count($developer1->getHours()).".\n");
//print_r($developer2->getName()." got money. His salary for this week is ".\App\Salary::count($developer2->getHours()).".\n");


//var_dump((string) $developer1);
//
//$developer1->abc1 = '1234567890';
//$developer1->abc2 = '0987654321';
//
//var_dump($developer1->getAttribute());

var_dump(get_parent_class('App\Developer'));
