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
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){

if(strlen($_REQUEST["name"])==0 || strlen($_REQUEST["uname"])==0 || strlen($_REQUEST["pass"])==0){
	echo "All fields are mandatory!";
}
else if($_REQUEST["pass"]!=$_REQUEST["confirmpass"]){
	echo "Passwords must match!";
}

else{
  echo "Office registration successful!";
  $_REQUEST["userid"] = mt_rand(1000,1000000);


  //function to enter values into logs table  
  function entry(){
    $conn = mysqli_connect("localhost", "root", "","offices");
		$sql="insert into logs (userid, name, uname, utype,pass) values ('".$_REQUEST["userid"]."','".$_REQUEST["name"]."','".$_REQUEST["uname"]."','".$_REQUEST["utype"]."','".sha1($_REQUEST["pass"])."');";
    
    if ($_REQUEST["utype"]=='branch'){
      $sql1="insert into branches (userid, phone, address) values ('".$_REQUEST["userid"]."','".$_REQUEST["phone"]."','".$_REQUEST["address"]."')";
    }
    else if($_REQUEST["utype"]=="dg"){
      $sql1="insert into dgs (userid, phone, address) values ('".$_REQUEST["userid"]."','".$_REQUEST["phone"]."','".$_REQUEST["address"]."')";
    }
    else if($_REQUEST["utype"]=="dpmg"){
      $sql1="insert into dpmgs (userid, phone, address) values ('".$_REQUEST["userid"]."','".$_REQUEST["phone"]."','".$_REQUEST["address"]."')";
    }
    else if($_REQUEST["utype"]=="circle"){
      $sql1="insert into circles (userid, phone, address) values ('".$_REQUEST["userid"]."','".$_REQUEST["phone"]."','".$_REQUEST["address"]."')";
    }
    else if($_REQUEST["utype"]=="head"){
      $sql1="insert into heads (userid, phone, address) values ('".$_REQUEST["userid"]."','".$_REQUEST["phone"]."','".$_REQUEST["address"]."')";
    }

    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    $result1 = mysqli_query($conn, $sql1)or die(mysqli_error($conn));

			if (isset($result) && isset($result1)) {
			echo "New record created successfully";
			} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
      mysqli_close($conn);
    }



  $conn2 = mysqli_connect("localhost", "root", "","offices");
    $sql2="select * from logs where userid='".$_REQUEST["userid"]."'";
    $result2 = mysqli_query($conn2, $sql2)or die(mysqli_error($conn2));

    if (isset($result2)) {
      $_REQUEST["userid"] = mt_rand(1000,1000000);
      entry();
      }
      else{
      entry();
      }
      mysqli_close($conn2);
    
			
}
echo "<br/>";
?>

<br/><button class="button"><a href="adminhome.php">Go Back</a></button><br/>
<br/><button class="button"><a href="logout.php">Logout</a></button><br/>

<div class="footer">
  Website originally developed!
</div>

<?php
}
else{
	header("Location:logout.php");
	//echo "<script>alert('Suspicious Login Attempt!');</script>";
}
?>