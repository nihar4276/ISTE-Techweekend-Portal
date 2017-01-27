 <?php

session_start();


$choice=$_POST['event'];


if(!$choice)
header('Location: event.php');
else if($choice=='0')
header('Location: event.php');
else
{
	$_SESSION['choice']=$choice;
	
	header('Location: event_main.php');

}



?>