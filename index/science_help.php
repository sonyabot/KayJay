<?php 
?>
<html>
	<body>
		<a style="text-decoration:none; font-family: Arial Rounded MT Bold , Helvetica Rounded, Arial, sans-serif;" href="http://kayjay:8888/index/help.php"> << back to help</a>
		<head>
		  <link rel="stylesheet" type="text/css" href="kj_theme.css">
		</head>
		<div style="text-align: center;">
			<h2> It looks like you need help with Science!</h2>
			<div style="display: inline-block;">
				<p class="here-to-help">The <b>Science Museum</b> has all kinds of information on science. <br> Just type in your query below, and we'll redirect you to their app!</p>
				<form id="help_form" action="http://kayjay:8888/index/science_museum.php" method="post">
					<select class="dropdown-input" name="type">
						<option value="people">People</option>
						<option value="objects">Objects</option>
					</select>
			  	<input type="text" name="query" class="help-input" placeholder="search"><br>
			  	<input id="myBtn" type="button" value="Submit" class="submit-button">
				</form>
					<p class="here-to-help">Once you're there, feel free to use the search bar (like the one above) <br> to make another request for information, or click on the images provided  <br> to read about the objects, people or places you have searched for.</p>
			</div>
			  <!-- CODE CITATION:
	   		  Title: How to create a modal box
		      Author: w3schools
		      Date: 2019
		      Availability: https://www.w3schools.com -->
			<!-- The Modal -->
			<div id="myModal" class="modal">
			  <!-- Modal content -->
			  <div class="modal-content">
			    <span class="close">&times;</span>
			    <span class="skip">skip</span>
			    <div id="tip_1">
			    	<img class="help_tip" src="help_tip_1.jpg">
			    	<span id="next_1">Next</span>
			    </div>
			    <div id="tip_2">
			    	<img class="help_tip" src="help_tip_2.jpg">
			    	<span id="next_2">Next</span>
			    </div>
			    <div id="tip_3">
			    	<img class="help_tip" src="help_tip_3.jpg">
			    	<div id="got_it">Got it!</div>
			    </div>
			    
			  </div>

			</div>
		</div>
		<script>
			// 		CODE CITATION:
			// 		Title: How to create a modal box
			//      Author: w3schools
			//      Date: 2019
			//      Availability: https://www.w3schools.com

			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the button that opens the modal
			var btn = document.getElementById("myBtn");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// Skip the modal
			var skip = document.getElementsByClassName("skip")[0];

			var tip_1 = document.getElementById("tip_1");
			var tip_2 = document.getElementById("tip_2");
			var tip_3 = document.getElementById("tip_3");

			var next_1 = document.getElementById("next_1");
			var next_2 = document.getElementById("next_2");

			var got_it = document.getElementById("got_it");

			var form = document.getElementById("help_form");

			var skip_modal = document.getElementById("skip");

			// When the user clicks the button, open the modal 
			btn.onclick = function() {
			  modal.style.display = "block";
			  tip_1.style.display = "block";
			  tip_2.style.display = "none";
			  tip_3.style.display = "none";
			}

			next_1.onclick = function () {
			    tip_1.style.display = "none";
			    tip_2.style.display = "block";
			    tip_3.style.display = "none";
			}

			next_2.onclick = function () {
				tip_1.style.display = "none";
			    tip_2.style.display = "none";
			    tip_3.style.display = "block";
			}

			// close modal
			span.onclick = function() {
			  modal.style.display = "none";
			}

			skip.onclick = function() {
				modal.style.display = "none";
				form.submit();
			}

			got_it.onclick = function() {
				modal.style.display = "none";
				form.submit();
			}
			
			var goToForm = 

			// close modal
			window.onclick = function(event) {
			  if (event.target == modal) {
			    modal.style.display = "none";
			  }
			}
		</script>
	</body>
</html>