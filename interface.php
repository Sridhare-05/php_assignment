<?php

interface Employee {
    public function calculateSalary();
    public function employeeInfo();
}

class Manager implements Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function calculateSalary() {
        return $this->salary;
    }

    public function employeeInfo() {
        echo "Manager: {$this->name}\n"."<br>";
    }
}

class Developer implements Employee {
    private $name;
    private $hourlyRate;
    private $hoursWorked;

    public function __construct($name, $hourlyRate, $hoursWorked) {
        $this->name = $name;
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

    public function calculateSalary() {
        return $this->hourlyRate * $this->hoursWorked;
    }

    public function employeeInfo() {
        echo "Developer: {$this->name}\n"."<br>";
    }
}

class Salesperson implements Employee {
    private $name;
    private $baseSalary;
    private $commission;

    public function __construct($name, $baseSalary, $commission) {
        $this->name = $name;
        $this->baseSalary = $baseSalary;
        $this->commission = $commission;
    }

    public function calculateSalary() {
        return $this->baseSalary + ($this->commission * 0.1); 
    }

    public function employeeInfo() {
        echo "Salesperson: {$this->name}\n"."<br>";
    }
}


$manager = new Manager("Muthu Kumar", 5000);
$developer = new Developer("Sridhar", 30, 120);
$salesperson = new Salesperson("Yuvaraj", 3000, 1000);


$manager->employeeInfo();
echo "Salary: $" . $manager->calculateSalary() . "\n";
echo "<br><br>";

$developer->employeeInfo();
echo "Salary: $" . $developer->calculateSalary() . "\n";
echo "<br><br>";

$salesperson->employeeInfo();
echo "Salary: $" . $salesperson->calculateSalary() . "\n";

?>
