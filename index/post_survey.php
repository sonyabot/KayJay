<?php
	DEFINE('DB_USERNAME', 'root');
	DEFINE('DB_PASSWORD', 'root');
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_DATABASE', 'kayjay1');

	$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	if (mysqli_connect_error()) {
		die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
	}
	$user_id = $_POST["uid"];
	unset($_POST["uid"]);
	$values = $_POST;

	$string = implode(", ", $values);
	$date = date("Y-m-d H:i:s");

	$sql = "INSERT INTO users_survey(user_id, answer_id, date_submitted) values('$user_id', '$string', '$date');";

	mysqli_query($mysqli, $sql);
	    
	$mysqli->close();
	
	header("Location: http://kayjay:8888/index/help.php");
	exit;
?>