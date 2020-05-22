<?php
class Student
{
    private $firstName;
    private $lastName;
    private $age;
    private $birthDate;
    private $course;
    private $pets;

    public function __construct($firstName, $lastName, $age, $birthDate, $course, $pets)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->birthDate = $birthDate;
        $this->course = $course;
        $this->pets = $pets;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getFullName()
    {
        return  $this->firstName.' '. $this->lastName;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function getPets()
    {
        return $this->pets;
    }
}



