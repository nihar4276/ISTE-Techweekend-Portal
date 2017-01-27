<?php
session_start();











?>

<html>

<head>
	<title> Event Registration</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	
<link rel="stylesheet" href="nih.css">

</head>

<body>
		
		<div class="header">

		<img src="logo.jpg" width="210" height="180">   <font size="25"><center>ISTE Techweekend</center> </font>

		<br><br>

		<center> 
			<nav>
							<font color="green" size="4"> Go To:</font>
							<select name="delegate" id="nih" onChange="window.location.href=this.value">
							<option>Select</option>
							
							<option value="index.php">Delegate Registration</option>
							

							</select>
						</nav>
			</center>
		</div>
		<center>
			<br><br><br>

			<font color="red" size="8">Event Registration</font>
			

 		</div>
 		<div id="main">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<form action="eventpost.php" method="POST">
											<br><br>
											<div class="12u$">
												<div class="select wrapper">
													<select name="event" >
														<option value="0">- Select Event -</option>
														<option value="Football">Football</option>
														<option value="Basketball">Basketball</option>
														
														
													</select>
												</div>
											</div>
											<br><br>
											<button type="submit" id="nihbutton">submit</button>
									</form>
							</section>

					</div>


			</div>

		<!-- Scripts -->
			<script src="jquery.min.js"></script>
			
	</body>
	</html>