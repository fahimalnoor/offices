<?php
session_start();
foreach($_COOKIE as $k=>$v){
	setcookie($k,"",time()-1800);
}
header("Location:home.php");
?>