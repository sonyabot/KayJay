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
		<!-- TODO: Dropdown people, place, thing menu to help with search -->
		<h2 style="font-size: 50px;">How can we help?</h2>	
		<form action="http://kayjay:8888/index/searcher.php" method="post">
		  <input type="text" name="subject" placeholder="subject" class="help-input"><br>
		  <input type="submit" value="Submit" class="submit-button">
		</form>
	</div>
	<div style="text-align: center;" class="here-to-help">
		<div style="display: inline-block;">
			<p>
				Kay Jay is here to help
				you with your school work.
				Just type the subject you 
				want to study, and we’ll
				redirect you to an app that
				can help!
			</p>
		</div>
	</div>
</body>
</html>
