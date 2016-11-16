<?php
require_once 'Student.php';
require_once 'Teacher.php';
$stud = new Student("Mario", 20, "mario@vil.org");
$teach = new Teacher("Fabio", 32, "fazio@vil.org");
echo $stud;
echo $teach;