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
form {
  text-align: center;
  margin:auto;
  width:40%;
  background-color:gray;
}
</style>

<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){

    ?>

    <center><h2>Welcome Dear <?php echo $_SESSION["utype"]; ?> Office Admin!</h2></center>
    <hr></br>
    
    <ul>
      <li><a href="logout.php">Logout</a></li>
    </ul></br>
    
    <form class="fsize" action="msgsend.php" method="post"><pre>
    <h2>&nbsp;&nbsp;&nbsp;Write A New Message!</h2>
    <input type="hidden" name="msgid" value="" />
    <b>Enter The Recipient Username:</b>

    <input type="text" name="receiver" value="" />

    <b>Your Message:</b>

    <textarea name="msgbody" rows="4" cols="50" value="">
    </textarea>

    <input type="submit" name="msgsub" value="Send" />
    </pre>
    </form></centered>

<script>
function goBack() {
  window.history.back();
}
</script>

</br>
<button class="button" style="position:centered" onclick="goBack()">Go Back</button></br>

<div class="footer">
  Website originally developed!
</div>
<br><br>

<?php

}
else{
	header("Location:logout.php");
	//echo "<script>alert('Suspicious Login Attempt!');</script>";
}
?>