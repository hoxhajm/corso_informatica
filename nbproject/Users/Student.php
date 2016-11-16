<?php
namespace Users;


class Student implements Person {
    use DigitalUser;
    private $name;
    private $age;
    private $courses=[];


    function __construct($name,$age,$email,$courses=[]){
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

    function addCourse(Course $s){
        $this->courses[]=$s;
    }

    function resetCourses(){
        $this->courses=[];
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
        $output .= "Email: ".$this->email."<br>";
        
        $courses = "";
        foreach($this->courses as $course){
            $courses .= "($course), ";
        }
        
        $output .= "Courses: [".$courses."]<br>";
        return $output;
    }
}
