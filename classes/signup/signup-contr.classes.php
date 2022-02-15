<?php

class SignupContr extends SignUp{
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function emptyInput(){
        $result;
        if(empty($this->name) || empty($this->email) || empty($this->password)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    public function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else {
            $result =true;
        }
        return $result;
    }

    // создать функцию, он проверяет есть есть ли такой юзер в базе 
    // если есть, возвращает фалс, если нет то тру. 
    public function isUserDoesntExists($email){
        $sql = "SELECT email FROM users WHERE email = '$email'";
        $result = $this->conn()->query($sql);
        $row = $result->num_rows;
        if($row > 0){
            return false;
        }else {
            return true;
        }
    }
}