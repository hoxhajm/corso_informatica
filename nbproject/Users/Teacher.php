<?php
namespace Users;


class Teacher extends Worker{
    use DigitalUser;
    private $name;
    private $age;
    private $course;

    function __construct($name,$age,$email,$course=null){
        $this->name=$name;
        $this->age=$age;
        $this->email=$email;
        $this->course=$course;
    }

    function getCourse(){
        return $this->Course;   
    }

    function setCourse(Course $course){
        $this->Course=$course;
    }
    
        function getName(){
        return $this->name;
    }

    function setName($name){
        $this->name=$name;
    }

    function getAge(){
        return $this->age;
    }

    function setAge($age){
        $this->age=$age;
    }

    function __toString(){
        $output = "Name: ".$this->name."<br>";
        $output .= "Age: ".$this->age."<br>";
        $output .= "Course: ".$this->course."<br>";
        return $output;
    }
}