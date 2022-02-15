<?php
session_start();
if(isset($_SESSION['user'])){
    header("Location: main.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test db</title>
</head>
<body>
    <H2>SIGN UP</H2>
    <form action="inc/signup.inc.php" method="post">
        <label>Name: </label>
        <input type="text" name="name">
        <br>
        <label>Email: </label>
        <input type="email" name="email">
        <br>
        <label>Password: </label>
        <input type="password" name="password">
        <br>
        <button type="submit">Register</button>
    </form>

    <H2>LOG IN</H2>
    <form action="inc/login.inc.php" method="POST">
        <label>Name: </label>
        <input type="text" name="name">
        <br>
        <label>Email: </label>
        <input type="email" name="email">
        <br>
        <label>Password: </label>
        <input type="password" name="password">
        <br>
        <button type="submit" name="submit">Log in</button>
    </form>
</body>
</html>