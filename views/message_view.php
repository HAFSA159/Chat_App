<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    // This is an AJAX request
    header('Content-Type: application/javascript');
    echo 'console.log("This is JavaScript content");';
    
    $message = Message::NewMessage();
    exit();
}

?>