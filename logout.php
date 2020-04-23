<?php
session_start();
$_SESSION["valid"]="";
unset($_SESSION["valid"]);
unset($_SESSION["uname"]);
header("Location:home.php");
?>