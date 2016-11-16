<?php

require_once "DigitalUser.php";

class Teacher {
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

    function toString(){
        $output = "Name: ".$this->name."<br>";
        $output .= "Age: ".$this->age."<br>";
        $output .= "Emails: ".$this->email."<br>";
        $output .= "Course: ".$this->course."<br>";
        return $output;
    }
}