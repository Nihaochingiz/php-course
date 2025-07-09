<?php

class Employee
{
    public $name;
    public $age;
    public $position;

    public function __construct($name, $age, $position) {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
    }

    public function __toString() {
        return "
                Employee: {$this->name}, 
                Age: {$this->age}, 
                Position {$this->position}";
    }
}


$john = new Employee('John',22,'junior-backend programmer');

echo($john);