<style>
button a{
  display: block;
  color: white;
  padding: 7px 7px;
  text-decoration: none;
}
.button {
  background-color: #333;
  color: white;
  border: 2px solid #555555;
}
.button:hover {
  background-color: #ddd;
  color: white;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #333;
   color: white;
   text-align: center;
}
</style>

<?php
$flag=0;

$conn = mysqli_connect("localhost", "root", "","offices");
		$sql="select * from logs where uname='".$_REQUEST["uname"]."'";
		$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	//session_start();
	while($row = mysqli_fetch_assoc($result)) {
			$temp["uname"]=$row["uname"];
			$temp["pass"]=$row["pass"];
			$temp["utype"]=$row["utype"];
		if($_REQUEST["uname"]==$temp["uname"] && sha1($_REQUEST["pass"])==$temp["pass"]){
			session_start();
			$_SESSION["valid"]="yes";
			$_SESSION["uname"]=$temp["uname"];
			$_SESSION["utype"]=$temp["utype"];
		$flag=1;
		break;
	}
	else{
		$flag=0;
	}
}
if($flag==0){
	echo "<p style='color:red'>Invalid Username Or Password!</p>";
	?>
	<button class="button"><a href="home.php">Go To Home</a></button><br/>
	<div class="footer">
	Website originally developed!
	</div>
	<?php
}
else if($flag==1){
	
	if($_SESSION["utype"]=="admin"){
	header("Location:adminhome.php");
	}
	else if($temp["utype"]=="branch"){
	session_start();
	setcookie("branch",$_REQUEST["uname"], time() + 1800);
	header("Location:branch.php");
	}
	else if($temp["utype"]=="dg"){
	session_start();
	setcookie("dg",$_REQUEST["uname"], time() + 1800);
	header("Location:dg.php");
	}
	else if($temp["utype"]=="dpgm"){
	session_start();
	setcookie("dpmg",$_REQUEST["uname"], time() + 1800);
	header("Location:dpmg.php");
	}
	else if($temp["utype"]=="circle"){
		session_start();
		setcookie("circle",$_REQUEST["uname"], time() + 1800);
		header("Location:circle.php");
	}
	else if($temp["utype"]=="head"){
			session_start();
			setcookie("head",$_REQUEST["uname"], time() + 1800);
			header("Location:head.php");
	}
	}
	//mysql_close($conn);

?>