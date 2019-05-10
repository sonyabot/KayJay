<?php
$empty_error = $_GET["error"];
$pwd_error = $_GET["pwd_msg"];
$email_error = $_GET["e_msg"];
?>
<DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="kj_theme.css">
  <script>
  	/*CODE CITATION:
	  Title: Custom Checkboxes
	  Author: w3schools
	  Date: 2019
	  Availability: https://www.w3schools.com*/
 
	function showPassword() {
	  var inp = document.getElementById("password_input");
	  if (inp.type === "password") {
	    inp.type = "text";
	  } else {
	    inp.type = "password";
	  }
	}
	</script>
</head>
<body>
	<div style="text-align: center;">
		<!-- add href to welcome page here -->
		<h2>Start</h2>
		<?php if($empty_error) {
			echo '<h3>' . $empty_error . '</h3>';
		} ?>	
		<div style="display: inline-block;">
			<form action="http://kayjay:8888/index/create.php" method="post">
			  <!-- CODE CITATION:
			  Title: CSS Tooltip
			  Author: w3schools
			  Date: 2019
			  Availability: https://www.w3schools.com/css/css_tooltip.asp -->
			  <?php if($email_error) {
			  	echo '<div class="tooltip"><input style="border-color:red;" type="text" name="email" class="start-input" placeholder="email">
			  			<span class="error_text">' . $email_error . ' Click <a href="http://kayjay:8888/index/email.php">here</a> for help</span>
			  		  </div>';
			  } else {
			  	echo '<div class="tooltip"><input type="text" name="email" class="start-input" placeholder="email">
				  		<span class="tooltiptext">Just use your main email address or click <a href="http://kayjay:8888/index/email.php">here</a> for more info.</span>
			  		  </div>';
			  }
			  ?>
			  <br>
			 <?php if ($pwd_error) {
			 	echo '<div class="tooltip"><input style="border-color:red;" type="password" name="password" class="start-input" id="password_input"
			 			placeholder="password">
				  		<span class="error_text">' . $pwd_error . ' Click <a href="http://kayjay:8888/index/password.php">here</a> for help</span>
			  		  </div>';
			 } else {
			 	echo '<div class="tooltip"><input type="password" name="password" class="start-input" id="password_input" placeholder="password">
				  		<span class="tooltiptext">Create a secure password. Click <a href="http://kayjay:8888/index/password.php">here</a> for more info.</span>
			  		 </div>';
			 }
			 ?>
			  <br>
			   <div class="container">
			   	<label class="container" id="show_password">Show Password
				  <input type="checkbox" onclick="showPassword()">
				  <span class="checkmark"></span>
				</label>
			   </div>
			  <input type="submit" value="Submit" class="submit-button">
			</form>
		</div>
	</div>
</body>
</html>
