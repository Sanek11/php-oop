<?php
require_once 'User.php';
require_once 'Employee.php';

$usersArr = [
    new User('Bob', 23),
    new User('John', 25),
    new User('Josh', 33)
];


// $worker = new Employee('Rich');
// print_r($worker->getName());

foreach($usersArr as $el){
    echo $el->name . ' ' . $el->age . ' <br>';
}

?>