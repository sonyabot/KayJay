<?php

$query = urlencode($_POST["query"]);
$type = $_POST["type"];
// $type = urlencode($_POST["type"]);
$url = "http://collection.sciencemuseum.org.uk/search/" . $type . "?q=" . $query . "&page[size]=3";
file_put_contents("sonya.log", print_r($_POST, true), FILE_APPEND);
?>
<html>
<body>
	<a style="text-decoration:none; font-family: Arial Rounded MT Bold , Helvetica Rounded, Arial, sans-serif;" href="http://kayjay:8888/index/help.php"> << back to KayJay</a>
	<div id="demo">
		<iframe src=<?php echo $url; ?> width="100%" height="100%" frameBorder="0">
		</iframe>
	</div>
</body>
</html>