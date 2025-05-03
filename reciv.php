<?php
if (file_exists("chat.txt")) {
    $messages = file_get_contents("chat.txt");
    echo nl2br(htmlspecialchars($messages));
} else {
    echo "No messages yet.";
}
?>
