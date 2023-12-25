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
    static function displayUser($id){
        global $db;
        $sql = "SELECT * FROM users WHERE users_id = ?";
        $stmt = $db->prepare($sql);

        $stmt->bind_param('i', $id);
        $stmt->execute();
    
        $result = $stmt->get_result();
    
        $userData = $result->fetch_assoc();
    
        $stmt->close();

        if ($userData) {
            echo "User ID: " . $userData['users_id'] . "<br>";
            echo "Username: " . $userData['username'] . "<br>";
            echo "Email: " . $userData['email'] . "<br>";

        } else {
            echo "User not found";
        }
    }

    public function login($email, $password){
        global $db;

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $db->prepare($sql);

       $stmt->bind_param('s', $email);
       $stmt->execute();
       $result = $stmt->get_result();

       if($result){
           $num_rows = $result->num_rows;

       if($num_rows>0){

       }else{
           echo "no rows found";
       }
       }

       $user = $result->fetch_assoc();
       if (password_verify($password, $user['password'])) {
           $_SESSION["id"] = $user['id_user'];
           $_SESSION["email"] = $user['email'];
           header('#');
           exit();
       } else {
           echo "Password doesn't match" ;
       }
       return $user;
   }

    }
