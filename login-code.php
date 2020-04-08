<?php
require_once('connection.php');

$nm1=$_POST['name1'];
$co1=$_POST['country1'];
$sql="INSERT INTO details(Name,Country) VALUES('$nm1','$co1')";
$res=mysqli_query($conn,$sql);
if ($res) {
session_start();
$_SESSION['nm2']=$nm1;
header("Location:display.php");
}
else{
	echo "error";
}
?>