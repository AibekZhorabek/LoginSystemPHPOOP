<?php
class SignUp extends DB{
    public function getUsers(){
        $sql = 'SELECT * FROM users';
        $stmt = $this->conn()->query($sql);
        $rows = $stmt->num_rows;
        if($rows > 0){
            while ($row = $stmt->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
        $stmt = null;
    }

    public function setUser($name, $email, $password){
        $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";
        $stmt = $this->conn()->query($sql);
        if (!$stmt) {
            echo 'error inside setUser function';
        }
        $stmt = null;
    }

}