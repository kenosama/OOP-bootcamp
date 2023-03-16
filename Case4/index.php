<?php
declare(strict_types=1);
function displayErrors()
{
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
}
displayErrors();

require('student.php');
require('group.php');


// Create two groups of students
$mcuStudents = new StudentGroup(
    array("Iron Man", "Captain America", "Thor", "Hulk", "Black Widow", "Hawkeye", "Spider-Man", "Black Panther", "Doctor Strange", "Ant-Man"),
    array(1, 2, 3,4,5,6,7,8,9,10)
);
$dcuStudents = new StudentGroup(
    array("Batman", "Superman", "Wonder Woman", "Flash", "Aquaman", "Green Lantern", "Cyborg", "Shazam", "Martian Manhunter", "Black Canary"),
    array(1,2,3,4,5,6,7,8,9,10)
);
echo "<h1>display base groups</h1>";
echo"<pre>";
var_dump($mcuStudents);
var_dump($dcuStudents);
echo "</pre>";

// Calculate and display the average grades of both groups
echo "MCU Average Grade: " . $mcuStudents->calculateAverageGrade() . "<br>";
echo "DCU Average Grade: " . $dcuStudents->calculateAverageGrade() . "<br><br>";

// Move the top student from the MCU group to the DCU group, and the lowest scoring student from the DCU group to

// Find the top student in the MCU group
$topStudent = null;
foreach ($mcuStudents->students as $student) {
    if ($topStudent == null || $student->grade > $topStudent->grade) {
        $topStudent = $student;
    }
}

// Find the lowest scoring student in the DCU group
$lowestScoringStudent = null;
foreach ($dcuStudents->students as $student) {
    if ($lowestScoringStudent == null || $student->grade < $lowestScoringStudent->grade) {
        $lowestScoringStudent = $student;
    }
}
echo"<h1>display the students with higher & lower points</h1>";
echo "<pre>";
var_dump($topStudent);
var_dump($lowestScoringStudent);
echo "</pre>";

// Move the top student from the MCU group to the DCU group, and the lowest scoring student from the DCU group to the MCU group
$mcuStudents->moveStudentToGroup($topStudent->name, $dcuStudents);
$dcuStudents->moveStudentToGroup($lowestScoringStudent->name, $mcuStudents);
echo "<h1>display the exchanged group</h1>";
echo "<pre>";
var_dump($mcuStudents);
var_dump($dcuStudents);
echo "</pre>";

// Calculate and display the average grades of both groups again
echo "MCU Average Grade: " . $mcuStudents->calculateAverageGrade() . "<br>";
echo "DCU Average Grade: " . $dcuStudents->calculateAverageGrade() . "<br>";