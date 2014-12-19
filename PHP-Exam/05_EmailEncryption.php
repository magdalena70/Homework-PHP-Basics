<?php
$recipient = htmlspecialchars($_GET['recipient']);
$subject = htmlspecialchars($_GET['subject']);
$body = htmlspecialchars($_GET['body']);
$key = $_GET['key'];
$emailMessage = "<p class='recipient'>$recipient</p><p class='subject'>$subject</p><p class='message'>$body</p>";
//echo $emailMessage;//formatted message
//multiply the ASCII code of the first letter of the message with the ASCII code of the first letter of the key,
//then the second letter of the message, with the second letter of the key, etc.
$messageLength = strlen($emailMessage);
$keyLength = strlen($key);
$encryptedEmail = '|';
for($i = 0;$i < $messageLength;$i++){
    $encrypt = ord($emailMessage[$i])* ord($key[$i % $keyLength]);
    //var_dump($key[$i % $keyLength]);
    $encryptedEmail .= dechex($encrypt) . '|';
}
echo($encryptedEmail);
