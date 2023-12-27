<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $User = User::login($email, $password);
    $_SESSION['x'] = 'logout';
    header('location: index.php?page=rooms');

//    dd($User);
    $_SESSION['c'] = $User;
}



if (isset($_POST['logout'])) {
    session_destroy();

} else {
//    echo 'failed';
}


?>
