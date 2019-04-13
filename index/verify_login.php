<?php 
	$email = $_POST['email'];
	$password = $_POST['password'];

	$db = new mysqli('localhost','root','root','kayjay1');
	$result = $db->query("SELECT password, user_id from users where email = '$email'");
	$user_arr = [];
	if($result){
    while ($row = $result->fetch_object()){
        $user_arr[] = $row;
    }
    	$result->close();
    	$db->next_result();
	}
	mysqli_close($con);

	if (password_verify($password, $user_arr[0]->password)) {
	    header("Location: http://kayjay:8888/index/help.php");
	    exit;
	} else {
	    echo 'Invalid password.';
	}

?>