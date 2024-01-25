<?php
class Student{
    private $name;
    private $course;

    public function __construct($name){
        $this->name = $name;
        $this->course = 1;
    }

    public function getName(){
        return $this->name;
    } 

    public function getCourse(){
        return $this->course;
    } 

    public function transferToNextCourse(){
        $this->course++;
    }
}