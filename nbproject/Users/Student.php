<?php
namespace Users;

use \Iterator;

class Student implements Person, Iterator {
    use DigitalUser;
    private $name;
    private $age;
    private $courses=[];
    private $position = 0;

    function __construct($name,$age,$email,$courses=[]){
        $this->name=$name;
        $this->age=$age;
        $this->email=$email;
        $this->courses=$courses;
        $this->courses = array();
    }

    function getCourses(){
        return $this->courses;   
    }

    function setCourse($s){
        $this->courses=$s;
    }

    function add(Course $s){
        $this->addCourse($s);
    }
    
    function addCourse(Course $s){
        $this->courses[]=$s;
    }

    public function key(){
        return $this->position;
    }
    
    public function current(){
        return $this->courses[$this->position];
    }
    
    public function next(){
        $this->position += 1;
    }
    
    public function rewind(){
        $this->position = 0;
    }
    
    public function valid(){
        return isset($this->courses[$this->position]) || array_key_exists($this->position, $this->courses);
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
