<?php
$data=array();
include("unamelib.php");
if(isset($_REQUEST["uname"])){
	$sql="select * from logs where uname='".$_REQUEST["uname"]."'";
	loadFromMySQL($sql);
	if(sizeof($data)==0)
		echo "Username Available!";
	else
		echo "Username Taken!";
}
?>