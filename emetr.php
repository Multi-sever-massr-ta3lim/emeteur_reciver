<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $msg = $_POST["msg"] ?? '';
    file_put_contents("chat.txt", $msg . PHP_EOL, FILE_APPEND);
    echo "Message sent.";
}
?>
<form method="post">
    <input name="msg">
    <button type="submit">Send</button>
</form>
