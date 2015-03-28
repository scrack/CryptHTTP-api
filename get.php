<?php
include("/include/connection.php");
$id = $_GET["id"];

$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
$sql = sprintf("SELECT `Text` FROM `boardz`.`bumps` WHERE ID='%s' limit 1", mysql_real_escape_string($id));
$result = mysql_query($sql);
$value = mysql_fetch_object($result);
$end = $value->Text;
if(is_null($end))
{
	echo "Error - Not found";
	
}
else
{
echo $end;
}
mysql_close($dbhandle);
die();

?>