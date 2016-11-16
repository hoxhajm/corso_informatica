<?php
namespace Users;

class Course {
    private $name;
    private $hours;
    
    public function __construct($name,$hours) {
        $this->name=$name;
        $this->hours=$hours;
        }
    
    function __toString(){
        $output = "Name: ".$this->name."<br>";
        $output .= "Hours: ".$this->hours."<br>";
        return $output;
    }
}
