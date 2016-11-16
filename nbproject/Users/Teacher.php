<?php
namespace Users;


class Teacher extends Worker{
    use DigitalUser;
    private $name;
    private $age;
    private $courses=[];

    function __construct($name,$age,$email,$courses=null){
        $this->name=$name;
        $this->age=$age;
        $this->email=$email;
        $this->courses=$courses;
    }

    function getCourses(){
        return $this->courses;   
    }

    function setCourse($s){
        $this->courses=$s;
    }
    
    function addCourse(course $s){
        $this->courses[]=$s;
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
        
        $courses = "";
        foreach($this->courses as $course){
            $courses .= "($course), ";
        }
        $output .= "Courses: [".$courses."]<br>";
        return $output;
    }
    
    function getSchool(){
        
    }
    
    function setSchool(School $school){
    
    }
}