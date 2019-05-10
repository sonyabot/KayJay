<?php

	$email = $_POST['email'];
	$password = $_POST['password'];

	// Verify email is an email and password is 8+ characters with letters, numbers and symbols.
	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    	// return a highlight of the email box and the following message:
    	$msg = "Please use a valid email address";
		header("Location: http://kayjay:8888/index/start.php?e_msg=" . $msg);
		exit;
	}

	if (strlen($password) < 8 || !preg_match("/[0-9]+/", $password) || !preg_match("/[a-zA-Z]+/", $password) || !preg_match("/(\W)+/", $password)) {
		// return a highlight of password box with the below text:
		$msg = "Passwords should use 8 characters, with one letter, one number and one alpha numeric character.";
		header("Location: http://kayjay:8888/index/start.php?pwd_msg=" . $msg);
		exit;
	}

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
	/*CODE CITATION:
	  Title: Two Mysqli queries
	  Author: stack overflow user drew010
	  Date: June 7, 2012
	  Availability: https://stackoverflow.com/questions/10924127/two-mysqli-queries */

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
	setcookie("user_id", $uid[0], time()+3600);
	mysqli_close($con);
	header("Location: http://kayjay:8888/index/survey.php");
	exit;
	
?>