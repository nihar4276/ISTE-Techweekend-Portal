

<html>
<head>
<title>Delegate Card Registration</title>
<link rel="stylesheet" href="nih.css">


	</head>
	<body>
		<form action="delegatepost.php" method="POST">
		<div class="header">

		<img src="logo.jpg" width="210" height="180">   <font size="25"><center>ISTE Techweekend</center> </font>

		<br><br>

		<center> 
			<nav>
							<font color="green" size="4"> Go To:</font>
							<select name="delegate" id="nih" onChange="window.location.href=this.value">
							<option>Select</option>
							
							<option value="event.php">Event Registration</option>
							

							</select>
						</nav>
			</center>
		</div>
		<center>
			<br><br><br>

			<font color="red" size="8">Delegate Card Registration</font>
			<br><br><br>

			<center><font color="red" size="4"><?=  fgets(fopen("error_or_successlog.txt","a+")) ?> </font>  </center>

			<br><br><br>			

		<div class="form">

			

			<br><br>
			Name: &nbsp;&nbsp;  <input type="text" name="name" placeholder="enter name" required><br>	<br><br>
Registration Number: &nbsp;&nbsp; <input type="text" name="regno" placeholder="Enter Registration Number"required><br><br><br>

Email:&nbsp;&nbsp;  <input type="email" name="email" placeholder="enter Email" required><br><br><br>
Phone Number:&nbsp;&nbsp;  <input type="text" name="phone" placeholder="enter phone number" required><br><br><br>







	<button type="submit" id="nihbutton">submit</button>
</center>



</form>


</div>
</body>
</html>
