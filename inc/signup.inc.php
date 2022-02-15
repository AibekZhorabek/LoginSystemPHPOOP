<?php


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

include '../classes/db.classes.php';
include '../classes/signup/signup.classes.php';
include '../classes/signup/signup-contr.classes.php';

$signup = new SignupContr($name, $email, $password);
//set users from FORM to database

//get users from database
// $array = $signup->getUsers();

if($signup->isUserDoesntExists($email)){
    $signup->setUser($name, $email, $password);
    echo 'User is registered';
}else {
    echo 'This user is already exists';
}



?>