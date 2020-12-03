<?php

namespace Model;

class Employee
{
    protected $name;
    protected $dayofbirth;
    protected $adress;
    protected $job_position;
    function __construct($name, $dayofbirth, $adress, $job_position)
    {
        $this->name = $name;
        $this->dayofbirth = $dayofbirth;
        $this->adress = $adress;
        $this->job_position = $job_position;
    }


    public function getInfo()
    {
        return $this->name;
        return $this->dayofbirth;
        return $this->adress;
        return $this->job_position;
    }
    public function setInfo($name, $dayofbirth, $adress, $job_position)
    {
        $this->name = $name;
        $this->dayofbirth = $dayofbirth;
        $this->adress = $adress;
        $this->job_position = $job_position;
    }
}
