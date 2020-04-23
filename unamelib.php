<?php
$dataSource="mysql";
function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","softfirm");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	while($row = mysqli_fetch_assoc($result)) {
		$ar=array();
		$ar["uname"]=$row["uname"];
		$data[]=$ar;
	}
}
?>