<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
</head>
<body>
    <!-- кнопка болу керек шығу деген, сол кнопканы басқанда, 
    session_destroy болып index.php ге лақтыру керек -->

    <form action="main.php" method="post">
        <button type="submit" name="submit">Шығу</button>
    </form>

    <?php
        if (isset($_POST['submit'])) {
            session_destroy();
            header("Location: index.php");
        }
    ?>
</body>
</html>