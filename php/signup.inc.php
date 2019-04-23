<?php
//its working fine don't edit anything
//this code only for putting data in database got from signup form

include("dbh.inc.php");


	$fn = $_POST['first_name'];
	$ln = $_POST['last_name'];
	$adds = $_POST['address'];
	$phn = $_POST['phonenumber'];
	$unn = $_POST['username'];
	$pss = $_POST['password'];

	$sql = "INSERT INTO users (FirstName,LastName,Address,PhoneNumber,Username,Password) VALUES ('$fn', '$ln', '$adds', '$phn', '$unn', '$pss');";
	mysqli_query($conn,$sql);

	header("location: ../home.php?submit=success");

?>