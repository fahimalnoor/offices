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
<b>Your Inbox</b>


<?php

	//echo "Transaction Data Sending Successful!";
  $conn = mysqli_connect("localhost", "root", "","offices");

  $sql="select * from messages where receiver='".$_SESSION["uname"]."'";

  $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

    while($row = mysqli_fetch_assoc($result)) {

			if (isset($result)){
                $temp["sender"] = $row["sender"];
                $temp["sender_utype"] = $row["sender_utype"];
                $temp["msgbody"] = $row["msgbody"];
                $temp["date"] = $row["date"];
            ?>
            <pre>

            Sender: <?php echo $temp["sender"]; ?>

            Office: <?php echo $temp["sender_utype"]; ?> Office
            Date: <?php echo $temp["date"]; ?>

            Message Body:
            <textarea name="msgbody" rows="5" cols="50" >
            <?php echo $temp["msgbody"]; ?>
            </textarea>
            </pre>
<?php
            }
            else {
            echo "Data Not Found!";
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
			
			
}
mysqli_close($conn);
echo "<br/>";
?>
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