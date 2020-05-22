<?php
class Course
{
    private $name;
    private $lessonsCount;

    public function __construct($name, $lessonsCount)
    {
        $this->name = $name;
        $this->lessonsCount = $lessonsCount;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLessonsCount()
    {
        return $this->lessonsCount;
    }

}