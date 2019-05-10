<?php

$tip_1 = '<h2>How do you undo an action?</h2><p>Press down the the "CTRL" or "command" key on your keyboard, and hit the "Z" key. This will undo the action you just did. </p><p>How do you redo something? </p><p> Hold down the "CTRL" or "command" key again, and hit the "Y" key!</p>';

$tip_2 = '<h2>How do you search for a key word on a page?</h2><p>Press down the the "CTRL" or "command" key on your keyboard, and hit the "F" key. This will cause a search bar to pop up. </p><p> Use the search bar to type in the word you are looking for and hit the magnifying glass on the right.</p>';

$tip_3 = '<h2>Katherine Johnson</h2><p>Katherine Johnson was a human computer!</p>
<img class="katherine_img" src="katherine.jpg"/>
<p>She perfomed calculations that sent some of the first American astronauts into space in the 1960s.</p>
<p>Katherine Johnson is also who this website is named for: K.J. aka KayJay!</p>
<p>Want to learn more? Check out this <a href="https://www.biography.com/scientist/katherine-g-johnson" target="_blank">article</a>!</p>';

$tip_4 = '<h2>Ada Lovelace</h2>
<img class="ada_img" src="ada.jpg" />
<p>Ada Lovelace was mathematician and writer born in 1815! She published the very first computer algorithm. </p>
<p>Algorithms are basically written steps on how to perform a function or solve a problem on a computer! This website is made of algorithms!</p>
<p>Want to learn more? Check out this <a href="https://www.biography.com/scholar/ada-lovelace" target="_blank">article</a>!</p>';

$tip_5 = '<h2>Did you accidentally close a tab?</h2><p>An easy way to get back a tab that you closed is to hold down the the "CTRL" or "command" key on your keyboard, then hold down the "shift key" and hit the "T" key. This will automatically bring back your closed tab. </p> <p>Tabs are separate open web pages that show up at the top of your screen when you are browsing the internet and open a new page within your browser window!</p>';

$tips = [$tip_1, $tip_2, $tip_3, $tip_4, $tip_5];

$tip = array_rand($tips, 1);

?>
<DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="kj_theme.css">
</head>
<body>
	<div style="text-align: center;">
		<!-- add href to welcome page here -->
		<!-- TODO: Dropdown people, place, thing menu to help with search -->
		<h2 style="font-size: 50px;">Did you know?</h2>	
		<div style="display: inline-block;">
			<?php echo $tips[$tip]?> 
		</div>
	</div>
	<div style="text-align: center;">
		<a href="http://kayjay:8888/index/help.php">Got it!</a>
	</div>
</body>
</html>
