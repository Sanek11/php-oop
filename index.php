<?php
require_once 'User.php';
require_once 'Employee.php';

//Класс как набор методов
$user = new Employee('Joe', 25);
$user->setSalary(3200);
echo $user->getAge();
echo $user->getName();
echo $user->getSalary();