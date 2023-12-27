<?php
if(isset($_POST['submit'])){
    $roomName = $_POST['roomName'];
    $v = $_SESSION['c'];
    $Room = Room::NewRoom($roomName, $v);
    header('location: index.php?page=rooms');

}