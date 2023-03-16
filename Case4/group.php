<?php
class Group{
    private string $studentName;
    private string $group;
    private float $grade;
    

    public function __construct (string $studentName, float $grade, string $group){
        $this->studentName=$studentName;
        $this->grade=$grade;
        $this->group=$group;
    }
    public function getStudentName():string{
        return $this->studentName;
    }
    public function getGrade(): float
    {
        return $this->grade;
    }
    public function getGroup(): string
    {
        return $this->group;
    }
}