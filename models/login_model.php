<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $User = User::login($email, $password);
    echo $User;
}
