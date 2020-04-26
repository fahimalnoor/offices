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
li a:hover,.dropdown:hover .dropbtn {
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
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}



</style>
<script src="slidedownjq.js"></script>
<script> 

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>

<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
?>
<center><h2>Welcome Dear <?php echo $_SESSION["utype"]; ?> Office Admin!</h2></center>

<hr></br>

<ul>
  <li><a class="active" href="dpmg.php">Home</a></li>
  <div class="dropdown">
    <button class="dropbtn">Messages 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="inbox.php">Inbox</a>
      <a href="newmsg.php">New Message</a>
    </div>
  </div> 
  <li><a href="logout.php">Logout</a></li>
</ul></br>

<div id="flip">Click Here To Show Your Available Features!</div></br>
<div id="panel">

<form action="dptransup.php" method="post"><pre>
<h3>Please enter your transaction data for today!</h3>
<input placeholder="DPMG Office Name" type="text" name="dpofficename" value="">

<input placeholder="Total Transactions" type="text" name="totaltransactions" value="">

<input placeholder="Total Transactions Amount" type="text" name="totalamount" value="">

<input type="submit" name="transub" value="Submit"/>
</pre></form>

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