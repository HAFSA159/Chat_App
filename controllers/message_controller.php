<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = isset($_POST['content']) ? $_POST['content'] : '';

    echo 'Received content: ' . $content;
    print_r($_POST['zkiko']); 
} 

?>