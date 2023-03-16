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
$theGoodOnes = new StudentGroup(
    array("Missandei", "Tormund Giantsbane", "Ser Jorah Mormont", "Davos Seaworth", "Jacqen", "Brienne of Tarth", "Arya Stark", "Tyrion Lannister", "Daenerys Targaryen", "Jon Snow"),
    array(1, 2, 3,4,5,6,7,8,9,10)
);
$theBadOnes = new StudentGroup(
    array("Petyr Baelish (Littlefinger)", "Melisandre", "Euron Greyjoy", "Walder Frey", "Viserys Targaryen", "Gregor Clegane (The Mountain)", "The Night King", "Ramsay Bolton", "Joffrey Baratheon", "Cersei Lannister"),
    array(1,2,3,4,5,6,7,8,9,10)
);
echo "<h1>display base groups</h1>";
echo"<pre>";
var_dump($theGoodOnes);
var_dump($theBadOnes);
echo "</pre>";

// Calculate and display the average grades of both groups
echo "MCU Average Grade: " . $theGoodOnes->calculateAverageGrade() . "<br>";
echo "DCU Average Grade: " . $theBadOnes->calculateAverageGrade() . "<br><br>";

// Move the top student from the MCU group to the DCU group, and the lowest scoring student from the DCU group to

// Find the top student in the MCU group
$topStudent = null;
foreach ($theGoodOnes->students as $student) {
    if ($topStudent == null || $student->grade > $topStudent->grade) {
        $topStudent = $student;
    }
}

// Find the lowest scoring student in the DCU group
$lowestScoringStudent = null;
foreach ($theBadOnes->students as $student) {
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
$theGoodOnes->moveStudentToGroup($topStudent->name, $theBadOnes);
$theBadOnes->moveStudentToGroup($lowestScoringStudent->name, $theGoodOnes);
echo "<h1>display the exchanged group</h1>";
echo "<pre>";
var_dump($theGoodOnes);
var_dump($theBadOnes);
echo "</pre>";

// Calculate and display the average grades of both groups again
echo "MCU Average Grade: " . $theGoodOnes->calculateAverageGrade() . "<br>";
echo "DCU Average Grade: " . $theBadOnes->calculateAverageGrade() . "<br>";