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

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = ("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')");

        return $db->query($query);
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
//            echo "User not found";
        }
    }

    static public function login($email, $password){
        global $db;

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $db->prepare($sql);

        if (!$stmt) {
            return "Error preparing statement: " . $db->error;
        }

        $stmt->bind_param('s', $email);
        $stmt->execute();

        $result = $stmt->get_result();

        if (!$result) {
            return "Error getting result set: " . $stmt->error;
        }

        $user = $result->fetch_assoc();

        if ($user) {
            if (password_verify($password, $user['password'])) {
//                return "ma3likch";
            } else {
                return "Password doesn't match";
            }
        } else {
            return "No rows found";
        }
    }

    public function getUserById($UserId)
    {
        global $db;
        $sql = "SELECT * FROM users WHERE users_id = ?";
        $stmt = $db->prepare($sql);

        $stmt->bind_param('i', $UserId);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        $stmt->close();
        return $user;
    }
}

     class Room{

         public $id;
         public $name;
         public $creat_id;

         static public function NewRoom($id,$roomName,$creat_id){
             global $db;
             $query = ("INSERT INTO rooms (id, roomName, create_id) VALUES ('$id','$roomName','$creat_id')";
             return $db->query($query);
         }
     }
