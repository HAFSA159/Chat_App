<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $User = User::login($email, $password);
    $_SESSION['x'] = 'logout';
    header('location: index.php?page=rooms');
//    echo $User;
}
//        $Usere = new User('39');
//        $bachiri = $Usere->getUserById('39');
//        dd($bachiri);
//


if (isset($_POST['logout'])) {
    session_destroy();

} else {
    echo 'failed';
}


?>
