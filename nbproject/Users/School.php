<?php

namespace Users;

class School {
    private $name;
    private $students;
    
    public function __construct($name) {
        $this->name=$name;
    }
        
    function add(Student $stud){
        $this->addStudents($stud);
    }

    function addStudent(Student $stud){
        $this->students[]=$stud;
    }
    
    function getStudents(){
        return $this->students;
    }
    
    function setStudents($stud){
        $this->students=$stud;
    }
    
    public function key(){
        return $this->position;
    }
    
    public function current(){
        return $this->students[$this->position];
    }
    
    public function next(){
        $this->position += 1;
    }
    
    public function rewind(){
        $this->position = 0;
    }
    
    public function valid(){
        return isset($this->students[$this->position]) || array_key_exists($this->position, $this->students);
    }
    
    function resetCourses(){
        $this->students=[];
    }
    
    function __toString(){
        $output = "Name: ".$this->name."<br>";
        $output .= "Students: ".$this->students."<br>";
        
        $students = "";
        foreach($this->students as $stud){
            $students .= "($stud), ";
        }
        
        $output .= "Students: [".$students."]<br>";
        return $output;
    }
}
