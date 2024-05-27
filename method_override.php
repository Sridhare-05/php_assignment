<?php

class Human {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function displayDetails() {
        return "Details not Shown.";
    }
}

class Student extends Human {
    private $studentId;

    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    public function displayDetails() {
        return "Student Name: " . $this->name . ",   Age: " . $this->age . ",   Student ID: " . $this->studentId;
    }
}

class Professor extends Human {
    private $employeeId;

    public function __construct($name, $age, $employeeId) {
        parent::__construct($name, $age);
        $this->employeeId = $employeeId;
    }

    
    public function displayDetails() {
        return "Professor Name: " . $this->name . ", Age: " . $this->age . ", Employee ID: " . $this->employeeId;
    }
}


$student = new Student("John Cena", 20, "STU12345");
echo $student->displayDetails() . "<br>";

$professor = new Professor("Dr. Strange", 45, "PRO9876");
echo $professor->displayDetails(); 
?>
