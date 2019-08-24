<?php
$con = mysqli_connect("localhost","root","","hotel");

if(isset($_POST['submit'])){
    $FName = $_REQUEST['fname'];
    $SName = $_REQUEST['sname'];
	$Email = $_REQUEST['email'];
	$room = $_REQUEST['room'];
	$b = implode(",",$room);
	// $Message = $_REQUEST['message'];
	
	$insert_details = "insert into booking values('".$FName."','".$SName."','".$Email."','".$b."')";
	mysqli_query($con,$insert_details);
	header("location:home.php");
}


?>