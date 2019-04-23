<?php
//its working fine don't edit anything
//this code only for putting data in database got from signup form

include("dbh.inc.php");

	$fnn = $_POST['first_name'];
	$lnn = $_POST['last_name'];
	$emln = $_POST['email'];
	$phnn = $_POST['phone'];

	$sql = "INSERT INTO appoinments (aid,FirstName,LastName,Email,PhoneNumber) VALUES (NULL,'$fnn', '$lnn', '$emln', '$phnn');";
	mysqli_query($conn,$sql);

	header("location: ../home.php?submit=success");

?>