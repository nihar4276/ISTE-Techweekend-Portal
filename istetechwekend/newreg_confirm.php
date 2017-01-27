<?php
session_start();
include 'Event/event_functions.php';


if(!isset($_SESSION['inputnum']))
	header('Location: event_main.php');

$Basketball=array('sizeM' => 5,'sizeF' => 6,'priceM' => 500,'priceF' => 200);
$Football=array('sizeM' => 11,'sizeF' => 15,'priceM' => 700,'priceF' => 900);

$n=(int)$_SESSION['inputnum'];
$info=array();
$log='';


$errorflag2=0;
$j=0;

for($i=1;$i<=$n;$i++)
{
	$c=(int)$_POST['del'.$i.''];
	$e=delegate_check($c);
	if($e==1)
	{

		$info[]=$c;
		$j++;
		




	}else{
		
		if($e==3)
		{
			$errorflag2=1;
			$log='the delegate number '.$_SESSION['delegate_with_error'].' is invalid or not Registered!';
			break;

		}
		if($e==0)
		{
			$errorflag2=1;
			$log='Unable to connect to database,please Try again later';
			break;

		}




	}





}//end of for loop
if($j==$_SESSION['inputnum'])
$a=get_delegatedata($info);

if(!$errorflag2 && isset($_SESSION['delinfo']))
{

	$fininfo=json_decode($_SESSION['delinfo'],true);
	


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


 		<div>


				<!-- Header -->
				



					
 		

<?php	
	if($errorflag2)
	{

	echo '

			<center><font color="red" size="4">'.$log.' </font>  </center>
			<br>
			<br>




	';
	header( "refresh:4;url=event_main.php" );//user sees the error message and is directed to the  main page  after 3 secs to correct his error 
	


	}else if(!$errorflag2 && isset($_SESSION['delinfo']))
	{

		echo'<center>';
			echo'<font color="green" size="10">Team  Information </font><br>';

			echo '<table id="nihartable" border="2" size="5">

			<tr>
			<th>Name</th><th>Registration Number</th><th>Delegate Id</th></tr>';



								
			
			
			$j=1;
			foreach ($fininfo as $i => $row)
			{
   	 			
    			
				echo '<tr><td>'.$row['name'].'</td><td> '. $row['regno'].'</td><td>'.$row['id'].' </td></tr>';
				
   		 		
			}
			echo'</table>';
			echo'</center>';
			$payamount=0;
			$cnt=$_SESSION['inputnum'];
			echo'
			<form action="newreg_sendtodb.php" method="POST">
				
				<center>

					<button type="submit" id="nihbutton">submit</button>
					</center>

				</form>




			';




	}	











?>


 		</div>

 		</body>
 		</html>