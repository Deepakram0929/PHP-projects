<?php
// get_messages.php

$messagesFile = 'messages.txt';

if (file_exists($messagesFile)) {
    $messages = file($messagesFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($messages as $message) {
        list($type, $text) = explode(':', $message, 2);

        if ($type === 'sender') {
            echo '<div class="message sender"><p>' . htmlspecialchars($text) . '</p></div>';
        } elseif ($type === 'receiver') {
            echo '<div class="message receiver"><p>' . htmlspecialchars($text) . '</p></div>';
        }
    }
}
?>
