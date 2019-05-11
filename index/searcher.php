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