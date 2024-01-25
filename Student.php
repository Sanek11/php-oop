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
        $checkingCourse = $this->course + 1;
        if($this->courseCheck($checkingCourse)){
            $this->course = $checkingCourse;
        }
    }

    private function courseCheck($course){
        if($course < 6){
            return true;
        } else {
            return false;
        }
    }
}