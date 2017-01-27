<?php
session_start();

if(!isset($_SESSION['choice']))
	header('Location: event.php');








?>
<head>
	<title> <?=$_SESSION['choice']?> Registration</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="nih.css">
			

</head>
	
<body>
		
		<div class="header">

		<img src="logo.jpg" width="210" height="180">   <font size="25"><center>ISTE Techweekend</center> </font>

		<br><br>

		<center> 
			
			</center>
		</div>
		<center>
			<br><br><br>

			<font color="red" size="8"><?=$_SESSION['choice']?> Registration</font>
			

 		</div>


 		<div>

						<!-- One -->		
													
													<br><br>
												
													<form action="newreg.php" method="POST">
													<div id="niharkadiv2" class="colors niharkadiv2">
													<font color="white" size="4">Enter Number of team Members</font><br>

													<input type="text" name="teamnum" required>
													<br>
													
													<br><br>
													<button type="submit" id="nihbutton">submit</button>


													</div>
													</form>
													
													<font color="red" size="2 ">NOTE:-</font>

													<p>
													1.)Enter 1 for single Member Registration!


													</p>

												</div>
											</div>
											
										
									
							

					</div>


			</div>

			
			

	</body>
	</html>

