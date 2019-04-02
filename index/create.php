<?php

	$email = $_POST['email'];
	$password = $_POST['password'];

	$file = "sonya.log";

	$pass = password_hash($password, PASSWORD_DEFAULT);

	DEFINE('DB_USERNAME', 'root');
	DEFINE('DB_PASSWORD', 'root');
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_DATABASE', 'kayjay1');

	$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	if (mysqli_connect_error()) {
			file_put_contents($file, "error", FILE_APPEND);

	die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
	}

	$sql = "INSERT INTO users(email, password) values('$email', '$pass');";

	mysqli_query($mysqli, $sql);
    
	$mysqli->close();

	header("Location: http://kayjay:8888/index/survey.php");
	exit;
?>