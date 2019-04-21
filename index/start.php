<?php
?>
<DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="kj_theme.css">
  <script>
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
		<div style="display: inline-block;">
			<form action="http://kayjay:8888/index/create.php" method="post">
			  
			  <div class="tooltip"><input type="text" name="email" class="start-input" placeholder="email">
				  <span class="tooltiptext">Just use your main email address or click <a href="http://kayjay:8888/index/email.php">here</a> for more info.</span>
			  </div>
			  <br>
			  <div class="tooltip"><input type="password" name="password" class="start-input" id="password_input" placeholder="password">
				  <span class="tooltiptext">Create a secure password. Click <a href="http://kayjay:8888/index/password.php">here</a> for more info.</span>
			  </div>
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
