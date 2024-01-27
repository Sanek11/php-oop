<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'Student.php';
require_once 'Array.php';

$jey = new Student('Jey');
echo $jey->getName() . ' ';
echo $jey->transferToNextCourse();
echo $jey-> getCourse();

//work with Array class
$arr = new Arr;
$arr->add([1, 2, 3]);
echo $arr->getAvg();


//обращение к методам через имена в ассоциативном массиве
// $methods = ['method1' => 'getProps'];
// echo $city->{$methods['method1']}();
?>