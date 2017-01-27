<?php




echo'<html>
<head>
<title>Delegate Card Registration</title>
<style>
body, html{

	background-color: black;
	color: #f1f1f1;
}



</style>

	</head>
	<body>
	<br><br>
';


?>
<center><font color="green" size="4"><?=  fgets(fopen("error_or_successlog.txt","a+")) ?> </font>  </center>
<?php

echo '<center><br><font color"green">Register a new team: <a href ="index.php">Click here</a> </font>';

file_put_contents('error_or_successlog.txt','');//empty the log  file




?>