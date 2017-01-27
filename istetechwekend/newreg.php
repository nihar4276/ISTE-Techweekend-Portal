<?php
session_start();



$val=$_POST['teamnum'];

$gender='';


if(!$val)
{
	header('Location: event_main.php');


}
$vals=(int)$val;
$_SESSION['inputnum']=$vals;

$log='';

$Basketball=array('sizeM' => 5,'sizeF' => 6,'priceM' => 500,'priceF' => 200);
$Football=array('sizeM' => 11,'sizeF' => 15,'priceM' => 700,'priceF' => 900);

//start of else if ladder to get the max team size allowed check

$flag=0;

if($vals>$Football['sizeM'] && $gender=='M' && $_SESSION['choice']=='Football')
{
	$flag=0;
	$log='Sorry team size Limit exceeded ,max allowed team  size for '.$_SESSION['choice'].'(Male) is  '.$Football['sizeM'].'';
	header('refresh=3;url=event_main.php');


}

else if($vals>$Football['sizeF'] && $gender=='F' && $_SESSION['choice']=='Football')
{
	$flag=0;
	$log='Sorry team size Limit exceeded ,max allowed team  size for '.$_SESSION['choice'].'(Female) is  '.$Football['sizeF'].'';
	header('refresh=3;url=event_main.php');

}
else if($vals>$Basketball['sizeF'] && $gender=='F' && $_SESSION['choice']=='Basketball')
{
	$flag=0;
	$log='Sorry team size Limit exceeded ,max allowed team  size for '.$_SESSION['choice'].'(Female) is  '.$Basketball['sizeF'].'';
	header('refresh=3;url=event_main.php');

}
else if($vals>$Basketball['sizeM'] && $gender=='M' && $_SESSION['choice']=='Basketball')
{
	$flag=0;
	$log='Sorry team size Limit exceeded ,max allowed team  size for '.$_SESSION['choice'].'(male) is  '.$Basketball['sizeM'].'';
	header('refresh=3;url=event_main.php');

}
else{

	$flag=1;
}




?>

<html>
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
		<!-- Wrapper -->
			

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					



					

 		<div id="main">

 			<?php
 				if($flag==0)
 				{
 					echo '

 					<center><font color="red" size="4">'.$log.'</font>  </center>
										<br>
										<br>

 					';
 				header( "refresh:4;url=event_main.php" );

 				}
 				else{

 					echo'<br><center>';

 					for($i=1;$i<=$vals;$i++)
 					{
 						echo'<form action="newreg_confirm.php" method="POST">';
 						echo 'Delegate Number '.$i.'<br><br>';
 						echo '<input type="text" id="niharkainput" name="del'.$i.'" required><br><br>';





 					}




 					echo '</center>';

 					echo '

 					
				<center>
					<br><br>
						<button type="submit" id="nihbutton">submit</button>


 					';
 					echo '</form>';
 					}





 			?>

 		</div>	

 		</body>
 		</html>
