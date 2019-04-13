<?php

$query = urlencode($_POST["query"]);
$type = $_POST["type"];
// $type = urlencode($_POST["type"]);
$url = "http://collection.sciencemuseum.org.uk/search/" . $type . "?q=" . $query . "&page[size]=3";
?>
<html>
<body>
	<div id="demo">
		<iframe src=<?php echo $url; ?> width="100%" height="100%" frameBorder="0">
		</iframe>
	</div>
</body>
</html>