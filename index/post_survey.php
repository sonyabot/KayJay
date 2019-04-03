<?php
	DEFINE('DB_USERNAME', 'root');
	DEFINE('DB_PASSWORD', 'root');
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_DATABASE', 'kayjay1');

	$file = "sonya.log";

	$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	if (mysqli_connect_error()) {
		die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
	}
	$values = $_POST;
	$string = implode(", ", $values);

	$sql = "INSERT INTO users_survey(answer_id) values('$string');";

	mysqli_query($mysqli, $sql);
	
	file_put_contents($file, $string, FILE_APPEND);
    
	$mysqli->close();
	
	header("Location: http://kayjay:8888/index/help.php");
	exit;
?>