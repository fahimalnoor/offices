<?php
session_start();
$_SESSION["valid"]="";
unset($_SESSION["valid"]);
unset($_SESSION["uname"]);
unset($_SESSION["userid"]);
header("Location:home.php");
?>