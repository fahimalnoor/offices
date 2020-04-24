<style>
ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
li{
  float: left;
}
li a{
  display: block;
  color: white;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #ddd;
}
li a:hover:not(.active) {
  background-color: #ddd;
}
.active {
  background-color: #CD5C5C;
}

.container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
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
</style>

<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){

if(strlen($_REQUEST["dpofficename"])==0 || strlen($_REQUEST["totaltransactions"])==0 || strlen($_REQUEST["totalamount"])==0){
	echo "All fields are mandatory to submit!";
}

else{
	//echo "Transaction Data Sending Successful!";
  $conn = mysqli_connect("localhost", "root", "","offices");
    $sql1="select * from dpmgs where userid='".$_SESSION["userid"]."'";
    $result1 = mysqli_query($conn, $sql1)or die(mysqli_error($conn));

    while($row = mysqli_fetch_assoc($result1)) {
      $_SESSION["dpid"] = $row["dpid"];

		$sql="insert into dptransactions (dpid, dpofficename,totaltransactions,totalamount) values ('".$_SESSION["dpid"]."','".$_REQUEST["dpofficename"]."','".$_REQUEST["totaltransactions"]."','".$_REQUEST["totalamount"]."')";
	
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

			if (isset($result) && isset($result1)) {
			echo "Data Sent successfully";
			} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
			
}
}
echo "<br/>";
?>

<br/><button class="button"><a href="dpmg.php">Go Back</a></button><br/>
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