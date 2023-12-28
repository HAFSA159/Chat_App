<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // echo "2";
    extract($_POST);

    $Message = Message::NewMessage();

}