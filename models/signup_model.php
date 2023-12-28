<?php 

if(isset($_POST['submit']) && isset($_FILES['pp']['name'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $file = $_FILES['pp']['name'];

    $uploadDir = 'assets/image/';
    $originalFileName = $_FILES['pp']['name'];
    $uploadFile = $uploadDir . basename($originalFileName);

    move_uploaded_file($_FILES['pp']['tmp_name'], $uploadFile);
        $User = User::NewUser($username, $email, $password, $file); //to get a static method inside a class
        header("location:index.php?page=login");

    }





?>