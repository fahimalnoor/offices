<center><b><h2>Welcome To Online Office!</br></h2></b></center>
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
</style>
<hr>

<body style="background-color:gray;">
<center><form action="server.php" method="post" ><pre>
<h2>Login here!</h2>
<input placeholder="Username" value="" type="text" name="uname" /></br>
<input placeholder="Password" type="password" name="pass" /></br>
<input type="submit" name="sub" value="Login" /></br>
</pre>
</form>
</center>
</br></br></br>
<div class="footer">
  Website originally developed!
</div>