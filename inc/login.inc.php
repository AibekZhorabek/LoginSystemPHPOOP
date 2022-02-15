<?php
$email = $_POST['email'];
$password = $_POST['password'];

include '../classes/db.classes.php';
include '../classes/login/login.classes.php';
include '../classes/login/login-contr.classes.php';

$login = new Login($name, $email, $password);

$user = $login->getUser($name, $email, $password);



