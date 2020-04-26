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

<script>
function goBack() {
  window.history.back();
}
</script>

<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){

    ?>

    <center><h2>Welcome Dear <?php echo $_SESSION["utype"]; ?> Office Admin!</h2></center>
    <hr></br>
    
    <ul>
      <li><a href="logout.php">Logout</a></li>
    </ul></br>
    
    
    <?php



if(strlen($_REQUEST["receiver"])==0 || strlen($_REQUEST["msgbody"])==0){
	echo "All fields are mandatory!";
}

else{
  //echo "Message Sent Successfully!";
  $_REQUEST["msgid"] = mt_rand(1000,1000000000);
  
  //function to enter values into logs table  
    $conn = mysqli_connect("localhost", "root", "","offices");
    $sql="select * from logs where uname='".$_REQUEST["receiver"]."'";
    $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

    while($row = mysqli_fetch_assoc($result)) {
        $temp["receiver"] = $row["uname"];
        $temp["receiver_utype"] = $row["utype"];
    
    $sql1="insert into messages (msgid, sender, sender_utype, receiver, receiver_utype, msgbody) values ('".$_REQUEST["msgid"]."','".$_SESSION["uname"]."','".$_SESSION["utype"]."','".$_REQUEST["receiver"]."','".$temp["receiver_utype"]."','".$_REQUEST["msgbody"]."')";
    
        

    $result1 = mysqli_query($conn, $sql1)or die(mysqli_error($conn));

			if (isset($result1)) {
			echo "Message Sent successfully!";
			} else {
            echo "Failed!";
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        break;
      mysqli_close($conn);
      
    }
    
  	
}
echo "<br/>";
?>

</br>
<button class="button" onclick="goBack()">Go Back</button></br>


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