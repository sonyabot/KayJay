<?php

$handle = curl_init();
 
$url = "http://collection.sciencemuseum.org.uk/search/objects?q=battery";
// $query_string = "battery"

// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
 
$output = curl_exec($handle);
 
curl_close($handle);
echo $output;
?>
<!-- <DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="kj_theme.css">
</head>
<body>
	<div class="loading"> -->
		<!-- add href to welcome page here -->
		<!-- <h2>Test</h2>
		<h4>this is a test</h4>

	</div>
</body>
</html> -->