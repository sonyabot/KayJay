<?php
?>
<DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="kj_theme.css">
</head>
<body>
	<div style="text-align: center;">
		<!-- add href to welcome page here -->
		<h2>Start</h2>	
		<div style="display: inline-block;">
			<form action="http://kayjay:8888/index/create.php" method="post">
			  
			  <div class="tooltip"><input type="text" name="email" class="start-input" placeholder="email">
				  <span class="tooltiptext">Click <a href="http://kayjay:8888/index/email.php">here</a> for more info on email.</span>
			  </div>
			  <br>
			  <div class="tooltip"><input type="password" name="password" class="start-input" placeholder="password">
				  <span class="tooltiptext">Click <a href="">here</a> for more info on passwords.</span>
			  </div>
			  <br>
			  <input type="submit" value="Submit" class="submit-button">
			</form>
		</div>
	</div>
</body>
</html>
