<?php
include_once "User.php";

$user = new User("My","mytran@gmail.com");
$user->setName("Na");
$user->setEmail("Na@gmail.com");
$user->setRole(2);
echo $user->getInfo();