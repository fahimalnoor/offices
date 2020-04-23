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
if(isset($_COOKIE["admin"])){
?>
<center><h2>Welcome Dear Super Admin!</h2></center>
<hr></br>

<ul>
  <li><a class="active" href="adminhome.php">Home</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul></br>

<div id="flip">Click Here To Add New Offices!</div></br>
<div id="panel">

<form id="frm" action="regval.php" method="post" name="frm"><pre>
Office Name: 	

<input type="text" name="name" ></br>
Username:

<input type="text" name="uname" ></br>

Select Office/User Type:

<input type="radio" name="utype" value="branch" checked>Branch Office
<input type="radio" name="utype" value="dg">DG Office
<input type="radio" name="utype" value="dpmg">DPMG Office
<input type="radio" name="utype" value="circle">Circle Office
<input type="radio" name="utype" value="head">Head Office

Phone Number:

<input type="text" name="phone" ></br>

Address:

<input type="text" name="address" ></br>

Enter Password:

<input  type="password" name="pass" value=""><br/>
Confirm Password:

<input type="password" name="confirmpass" value=""><br/>

<input type="submit" name="sbt" value="Submit" />
</pre>
</form>
</br></br>
</div>

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