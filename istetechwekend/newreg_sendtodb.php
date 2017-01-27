<?php


session_start();
include 'dbconnect.php';
include 'Event/event_functions.php';




if($connection)
{
	$fininfo=json_decode($_SESSION['delinfo'],true);
	//insertion
	
	$sports=$_SESSION['choice'];
	$tid=get_teamid();//get the teamid to insert
	if($tid==0)
		exit();

	$flag=0;
	$log='';

	foreach ($fininfo as $i => $row)
			{
				$name=$row['name'];
				$regno=$row['regno'];
				
				$id=$row['id'];

				


   	 			$flag=1;
    			$query="INSERT INTO teams VALUES('$name','$regno','$id','$sports','$tid')";
    			$result=mysqli_query($connection,$query);
    			if(!$result)
    			{

    				$flag=0;
    				$log=mysqli_error($connection);
    				break;

    			}
				
				
   		 		
			}

			if($flag==1)
				$log='Your Team Id is '.$tid.' and your team has successfully registered for '.$sports.'!!';

		echo '
		<html>
<head>
	<title> '.$_SESSION['choice'].' Registration</title>
	

<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	
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
							<option value="delegate.php">Event Registration</option>
							

							</select>
						</nav>
			</center>
		</div>
		<center>
			<br><br><br>

			<font color="red" size="8">'.$_SESSION['choice'].' Registration</font>
			

			<br><br><br>			

				<font color="red" size="4">'.$log.'</font></center>';
				if($flag==1)
				{

					echo '<br><font color"green">Register a new team: <a href ="event.php">Click here</a> </font>';
				}



					
echo '</body></html>';










}
else{
	echo 'unable to connect to database!,please try Again';
	header('refresh=4;url=newreg.php');


}



?>
