<?php
if(isset($_POST['submit']) && isset($_FILES['roomPic']['name'])){
    $roomName = $_POST['roomName'];
    $file = $_FILES['roomPic']['name'];

    $uploadDir = 'assets/image/';
    $originalFileName = $_FILES['roomPic']['name'];
    $uploadFile = $uploadDir . basename($originalFileName);

    move_uploaded_file($_FILES['roomPic']['tmp_name'], $uploadFile);


    $v = $_SESSION['c'];
    $Room = Room::NewRoom($roomName,$file, $v);
    header('location: index.php?page=rooms');

}