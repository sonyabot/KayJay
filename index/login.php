<?php
?>
<!-- pad the top -->
<DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="kj_theme.css">
</head>
<body>
	<div style="text-align: center;">
		<!-- add href to welcome page here -->
		<h2>Login</h2>	
		<div style="display: inline-block;">
			<form action="http://kayjay:8888/index/verify_login.php" method="post">
			  <input type="text" name="email" class="start-input" placeholder="email">
			  <br>
			  <input type="password" name="password" class="start-input" placeholder="password">
			  <br>
			  <input type="submit" value="Submit" class="submit-button">
			</form>
		</div>
	</div>
</body>
</html>
