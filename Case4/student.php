<?php
// Define a class to represent a student
class Student
{
    // Properties to store the student's name and grade
    public $name;
    public $grade;

    // Constructor to set the initial values of the properties
    function __construct($name, $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }
}