<?php 

$uid = $_COOKIE["user_id"];

DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'kayjay1');

$mysqli = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

$sql = "SELECT * from survey ORDER BY answer_id;";

$rows = array();
$survey_question = mysqli_query($mysqli, $sql);
while($row = mysqli_fetch_array($survey_question, MYSQLI_NUM)) $rows[] = $row;
$array =[];
foreach ($rows as $val) {
	$array[$val[0]] = $val[1];
}
?>
<!-- pad the top -->
<DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="kj_theme.css">
</head>
<body>
	<div style="text-align: center;">
		<h2 style="font-size: 50px;">Please take our survey!</h2>
		<div style="display: inline-block; text-align: left;">	
		<form action="http://kayjay:8888/index/post_survey.php" method="post">
			<?php
				foreach ($array as $key => $value) {
					echo "<label class='container'>";
					echo "<input class='survey-vals' type='checkbox' name='$key' value='$key'>$value<br>";
					echo "<span class='checkmark'></span>";
					echo "</label>";
				} 
			?>
		  	<input class="submit-button" type="submit" value="Submit">
		</form>
	</div>
	</div>
</body>
</html>
