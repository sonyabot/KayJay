<?php

	$email = $_POST['email'];
	$password = $_POST['password'];
	$pass = password_hash($password, PASSWORD_DEFAULT);

	DEFINE('DB_USERNAME', 'root');
	DEFINE('DB_PASSWORD', 'root');
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_DATABASE', 'kayjay1');


	$con=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	$sql = "INSERT INTO users(email, password) values('$email', '$pass');";
	$sql .= "SELECT LAST_INSERT_ID();";

	// Execute multi query
	if (mysqli_multi_query($con,$sql))
	{
	  do
	    {
	    // Store first result set
	    if ($result=mysqli_store_result($con)) {
	      // Fetch one and one row
	      while ($row=mysqli_fetch_row($result)){
	      		$uid = $row;
	        }
	      // Free result set
	      mysqli_free_result($result);
	      }
	    }
	  while (mysqli_next_result($con));
	}
	mysqli_close($con);
	header("Location: http://kayjay:8888/index/survey.php?uid=" . $uid[0]);
	exit;
	
?>