<?php

class User
{
    protected $name;
    protected $email;
    public $role;

    public function __construct($name, $email, $role = 2)
    {
        $this->name =$name;
        $this->email = $email;
        $this->role = $role;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setRole($role): void
    {
        $this->role = $role;
    }

    public function getInfo()
    {
        return "Name is: " . $this->name . "<br/>" . "Email: " . $this->email . "<br/>" . $this->isAdmin();
    }

    public function isAdmin()
    {
        if ($this->role == 1) {
            return " is admin";
        } else if ($this->role == 2) {
            return " is user";
        }
    }
}