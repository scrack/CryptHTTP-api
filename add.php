<?php
include("/include/connection.php");
include("AES/AES.class.php");
$id = $_POST['id'];
$text = $_POST['text'];
$key = $_POST['key'];
$date = date('Y-m-d H:i:s');
//$z = "abcdefghijuklmno0123456789012345";
if (is_null($id))
{
	echo "Error - no id";
     die();
	}
if (is_null($text))
	{
	echo "Error - no text";
     die();
	}
$aes = new AES($key);
$data =  $text;
$start = microtime(true);
$CryptedText = $aes->encrypt($data);
$end = microtime(true);
$CryptedText = base64_encode($CryptedText);


$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
$sql = "SELECT `bumps`.`idBumps` FROM `boardz`.`bumps` WHERE ID='$id'";
$result = mysql_query($sql);
if(mysql_num_rows($result) >0){
$sql = "DELETE FROM `boardz`.`bumps` WHERE
ID='$id'";
mysql_query($sql);

}
   
      $sql = sprintf( "INSERT INTO `boardz`.`bumps` (`ID`, `Text`, `dateadded`)  VALUES ('%s', '%s', '%s');", mysql_real_escape_string($id),mysql_real_escape_string($CryptedText),$date);
	if (mysql_query($sql))
		{echo "added";echo "</br></br>";}
	

	


	
mysql_close($dbhandle);
header("Location: ../get.php?id=$id");
die();
	
?>