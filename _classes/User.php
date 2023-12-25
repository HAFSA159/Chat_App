<?php

class User
{
    public $id;
    public $username;
    public $email;
    private $password;

    public function __construct($id){
        global $db;

        $result = $db->query("SELECT * FROM users WHERE users_id = '$id'");
        $user = $result->fetch_assoc();

        $this->id = $user['users_id'];
       
        $this->username = $user['username']; 
        $this->email = $user['email'];
        $this->password = $user['password'];
    }

    static function getAll()
    {
        global $db;
        $result = $db->query("SELECT * FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function edit()
    {
        global $db;
        return $db->query("UPDATE users SET email = '$this->email', username = '$this->username' WHERE users_id = '$this->id'");
    }

    public function setPassword($pwd)
    {
        $this->password = password_hash($pwd, PASSWORD_DEFAULT);
    }

    static function NewUser($username, $email, $password){

        global  $db;

        if ($password === null) {
            return false;
        }
        
        $hashedpassword= password_hash($password, PASSWORD_DEFAULT);       
        $query = ("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedpassword')");

        if($db->query($query)){
            return true;
        }else{
            return false; 
        }
    }
}