<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['content'])) {
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    extract($_POST);
    Room::writeMessage($content, $_SESSION["c"], $receiver);
    echo 'message sent';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['displayMessage'])) {
    $messages = Room::displayMessage();
    echo json_encode($messages);
    exit;
}
