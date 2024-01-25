<?php
class Employee {
    private $name;
    
    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

$arr = ['a', 'c', 'z'];