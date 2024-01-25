<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'Student.php';

$jey = new Student('Jey');
echo $jey->getName();
echo $jey->transferToNextCourse();
echo $jey-> getCourse();
?>