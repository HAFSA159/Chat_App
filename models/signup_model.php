<?php 

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$User = User::NewUser($username, $email, $password); //to get a static method inside a class
    header("location:index.php?page=login");

}



?>