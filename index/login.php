f<?php
?>
<!-- pad the top -->
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
	  var inp = document.getElementById("login_input");
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
		<h2>Login</h2>	
		<div style="display: inline-block;">
			<form action="http://kayjay:8888/index/verify_login.php" method="post">
			  <input type="text" name="email" class="start-input" placeholder="email">
			  <br>
			  <!-- CODE CITATION:
			  Title: CSS Tooltip
			  Author: w3schools
			  Date: 2019
			  Availability: https://www.w3schools.com/css/css_tooltip.asp -->
			  <input type="password" name="password" class="start-input" id="login_input" placeholder="password">
			  <br>
			  <div class="container">
			   	<label class="container" id="login_password">Show Password
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
