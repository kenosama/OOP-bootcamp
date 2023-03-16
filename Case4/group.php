<?php
// Define a class to represent a group of students
class StudentGroup
{
    // Property to store an array of students in the group
    public $students;

    // Constructor to initialize the array of students
    function __construct($studentNames, $studentGrades)
    {
        $this->students = array();

        // Create a new Student object for each name and grade, and add it to the array
        for ($i = 0; $i < count($studentNames); $i++) {
            $student = new Student($studentNames[$i], $studentGrades[$i]);
            array_push($this->students, $student);
        }
    }

    // Function to calculate the average grade of the group
    function calculateAverageGrade()
    {
        $total = 0;

        // Add up the grades of all the students in the group
        foreach ($this->students as $student) {
            $total += $student->grade;
        }

        // Divide the total by the number of students to get the average grade
        return $total / count($this->students);
    }

    // Function to move a student from this group to another group
    function moveStudentToGroup($studentName, $newGroup)
    {
        // Find the student in this group
        $index = -1;
        for ($i = 0; $i < count($this->students); $i++) {
            if ($this->students[$i]->name == $studentName) {
                $index = $i;
                break;
            }
        }

        // If the student was found, remove it from this group and add it to the new group
        if ($index >= 0) {
            $student = $this->students[$index];
            array_splice($this->students, $index, 1);
            array_push($newGroup->students, $student);
        }
    }

}