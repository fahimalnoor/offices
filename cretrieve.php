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

if(strlen($_REQUEST["transsearch"])==0){
	echo "Please enter a date to retrieve data!";
}

else{
	//echo "Transaction Data Sending Successful!";
  $conn = mysqli_connect("localhost", "root", "","offices");

  $sql="select * from dptransactions where date(date)='".$_REQUEST["transsearch"]."'";

  $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));

    while($row = mysqli_fetch_assoc($result)) {

			if (isset($result)){
                $temp["dpofficename"] = $row["dpofficename"];
                $temp["dptotaltransactions"] = $row["totaltransactions"];
                $temp["dptotalamount"] = $row["totalamount"];
            ?>
            Transactions for Your Selected Date:- <br><br>
            <table border="1px">
            <tr><th>DP Office Name</th><th>Total Transactions</th><th>Total Amount</th></tr>
            <tr><td><?php echo $temp["dpofficename"]; ?></td>
            <td><?php echo $temp["dptotaltransactions"]; ?></td>
            <td><?php echo $temp["dptotalamount"]; ?></td>
            </tr>
            </table>
            <br><br>
<?php
            }
            else {
            echo "Data Not Found!";
			//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);
			
}
}
echo "<br/>";
?>

<br/><button class="button"><a href="circle.php">Go Back</a></button><br/>
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