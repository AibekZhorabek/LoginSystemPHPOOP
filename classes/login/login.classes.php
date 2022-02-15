<?php

class Login extends DB {
    private $email;
    private $password;
    private $name;
    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getUser($name, $email, $password){
        //юзер пэйджде email мен паролді жазады, маған сол емэйл арқылы базадағы паролді алып
        //юзер жазған паролмен салыстыру керек, егер дұрыс болса сессияға сол юзерді жазамыз, қате болса ошибка лақтырамыз
        // енгізілген атрибуттардың паролін алу керек
        // сосын сол паролді  

        $sql = "SELECT * FROM users WHERE email='$email' OR name = '$name';";
        $stmt = $this->conn()->query($sql);
        if(!$stmt){
            $stmt = null;
            header("Location: ../../index.php");
            exit();
        }
        if($stmt->num_rows < 1){
            $stmt = null;
            header("Location: ../index.php");
        }
        if($stmt->num_rows > 0){
            while ($row = $stmt->fetch_assoc()) {
                $result = $row;
            }
        }
        if($password != $result['password']){
            header("Location: ../index.php?error=wrongpassword");
        }else {
            session_start();
            $_SESSION['user']['name'] = $result['name'];
            $_SESSION['user']['email'] = $result['email'];
            header("Location: ../main.php");
        }

    }





    // public function login(){
    //     $sql = "SELECT * FROM users WHERE email='$this->email' AND password='$this->password';";
    //     $result = $this->conn()->query($sql);
    //     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //     return $row;
    //     if ($row < 0) {
    //         return 'Wrong username or password';
    //     }else {
    //         $data = $row;
    //         return $data;
    //     }

    // }
}