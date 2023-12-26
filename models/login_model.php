<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $User = User::login($email, $password);
//    echo $User;
}
        $Usere = new User('39');
        $bachiri = $Usere->getUserById('39');
        dd($bachiri);
?>
