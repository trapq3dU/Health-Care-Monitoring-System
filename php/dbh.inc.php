

<?php 

//this code is only for database connection

	$dbServername="localhost";
	$dbUsername="root";
	$dbPassword="1234";
	$dbName="db_hc";

	$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	if($conn)
	{
		echo "";
	}
	else
	{
		die("Server is down!!".mysqli_connect_error());
	}

 ?>