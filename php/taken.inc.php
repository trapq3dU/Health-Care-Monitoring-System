</<?php
	$dbhandle=mysql_connect($hostname, $username, $password)
	or
	die("could not connect to database")

	selected=mysqli_select_db("login", $dbhandle);
	if (isset($_POST['unn']) && isset($_POST['pss']))
	{
		$user=$_POST['unn'];
		$pss=$_POST['pss'];

		$query=mysqli_query("SELECT * FROM users WHERE Username='$user';");
		if(mysqli_num_rows())
	}
	mysql_close();

 	?>
