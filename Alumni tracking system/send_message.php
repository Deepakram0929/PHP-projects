<?php
// send_message.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];

    if (!empty($message)) {
        $messagesFile = 'messages.txt';

        // Append the new message to the file
        file_put_contents($messagesFile, "sender:$message\n", FILE_APPEND | LOCK_EX);
    }
}

// Redirect back to the chat box
header('Location: index.php');
exit();
?>
