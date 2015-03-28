<?php
include("AES/AES.class.php");
$z = $_GET['key'];
$txt = $_GET['text'];

//$z = "abcdefgh01234567"; // 128-bit key
//$z = "abcdefghijkl012345678901"; // 192-bit key
//$z = "abcdefghijuklmno0123456789012345"; // 256-bit key

$aes = new AES($z);

$data = base64_decode($txt);

$start = microtime(true);
//echo "\n\nCipher-Text:\n" . $aes->encrypt($data) . "\n";
echo  $aes->decrypt($data) ;
$end = microtime(true);


?>