<?php

/*CODE CITATION:
  Title: How to close Browser Tab After Submitting a Form?
  Author: Shaktit Singh StackOverflow
  Date: 2011
  Availability: https://stackoverflow.com/questions/8355316/how-to-close-browser-tab-after-submitting-a-form */

$query = urlencode($_POST["query"]);
$type = $_POST["type"];
$url = "http://collection.sciencemuseum.org.uk/search/" . $type . "?q=" . $query . "&page[size]=3";

header("Location: " . $url);
echo "<script>window.close();</script>";
exit;
?>