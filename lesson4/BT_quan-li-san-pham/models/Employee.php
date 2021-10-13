<?php

class Employee
{
    private $firstName;
    private $lastName;
    private $birthDate;
    private $address;
    private $jobTitle;

    public function __construct($firstName, $lastName, $birthDate, $address, $jobTitle)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->address = $address;
        $this->jobTitle = $jobTitle;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }

    public function getFullName()
    {
        return $this->getFirstName() . " " . $this->getLastName();
    }
}