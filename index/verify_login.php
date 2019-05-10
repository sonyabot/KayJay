<?php 
	$email = $_POST['email'];
	$password = $_POST['password'];

	DEFINE('DB_USERNAME', 'root');
	DEFINE('DB_PASSWORD', 'root');
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_DATABASE', 'kayjay1');
	$con=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	if (mysqli_connect_errno()){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} 
	$sql = "SELECT password, user_id from users where email = '$email'";
	if (mysqli_multi_query($con,$sql)) {
	  do {
	    if ($result = mysqli_store_result($con)) {
	      while ($row = mysqli_fetch_row($result)){
	      		$data = $row;
	      		if ($data[1]) {
	      			$user_id = $data[1];
	      		}
	        }
	      	mysqli_free_result($result);
	      }
	    }
	  while (mysqli_next_result($con));
	}
	// Get most recent survey date
    $sql = "SELECT date_submitted from users_survey where user_id = '$user_id' ORDER BY date_submitted DESC limit 1";
	$info = mysqli_query($con, $sql);
	$date = mysqli_fetch_row($info);
	$three_months_ago = date("Y-m-d H:i:s", strtotime("-3 Months"));
	setcookie("user_id", $user_id, time()+3600);
	// If it's been three months since the last time they took the survey, send them there again.
	if ($date <= $three_months_ago) {
		header("Location: http://kayjay:8888/index/survey.php");
		exit;
	} else {
		if (password_verify($password, $data[0])) {
			header("Location: http://kayjay:8888/index/tips.php");
	    exit;
		} else {
			echo 'Invalid password.';
		}
	}
?>