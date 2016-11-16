<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

spl_autoload_register(function($class_name) {
    require_once($class_name.'.php');
});

use Users\Student as Stud;
use Users\Teacher;
use Users\Course;

$stud1 = new Stud("Mario", 20, "mario.hoxhaj@villaggio.org");
$stud2 = new Stud("Alessio", 22, "alessio.adamini@villaggio.org");
$stud3 = new Stud("Rachele", 20, "rachele.montepagano@villaggio.org");

$teach1 = new Teacher("Fabio", 32, "front-end");
$teach2 = new Teacher("Valerio", "??", "back-end");
$teach3 = new Teacher("Igor", "??", "databases");

$corso1= new Course("Front-End", "200 hours");
$corso2= new Course("Back-End", "100 hours");

$stud1->addCourse($corso1);
$stud1->addCourse($corso2);

echo $stud1;
/*
echo $stud1;
echo "<br>";
echo $stud2;
echo "<br>";
echo $stud3;
echo "<br>";
echo "--------------------------------------------------------------------";
echo "<br>";
echo "<br>";

echo $teach1;
echo "<br>";
echo $teach2;
echo "<br>";
echo $teach3;
echo "<br>";

echo "<br>";
echo "--------------------------------------------------------------------";
echo "<br>";
echo "<br>";

echo $corso1;
echo "<br>";
echo $corso2;
echo "<br>";
*/
//array_push($stack, "apple", "raspberry");
//print_r($stack);