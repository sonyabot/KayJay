<?php 
$subject = $_POST['subject'];
$url = "http://kayjay:8888/index";
if ($subject === "science") {
	$url .= "/science_help.php";
}
if ($subject === "math") {
	$url .= "/math_help.php";
}
header("Location: " . $url);
exit;
?>
<html>
	<body>
		<head>
		  <link rel="stylesheet" type="text/css" href="kj_theme.css">
		</head>
		<div style="text-align: center;">
			<!-- add href to welcome page here -->
			<h2> It looks like you need help with <?php echo $subject; ?>!</h2>
			<div style="display: inline-block;">
				<?php if ($subject === "science"): ?>
				<p class="here-to-help">The <b>Science Museum</b> has all kinds of information on science. <br> Just type in your query below, and we'll redirect you to their app!</p>
				<?php endif; ?>
				<form action=<?php echo $url?> method="post">
					<select class="dropdown-input" name="type">
						<option value="people">People</option>
						<option value="objects">Objects</option>
					</select>
			  	<input type="text" name="query" class="help-input" placeholder="search"><br>
			  	<input type="submit" value="Submit" class="submit-button">
				</form>
				<?php if ($subject === "science"): ?>
					<p class="here-to-help">Once you're there, feel free to use the search bar (like the one above) <br> to make another request for information, or click on the images provided  <br> to read about the objects, people or places you have searched for.</p>
				<?php endif; ?>
			</div>
		</div>
	</body>
</html>