<?php
include 'dbconnect.php';
include 'Delegate/delegate_functions.php';
session_start();
$log='';
if($connection)
{


	$name=$_POST['name'];
	$regno=$_POST['regno'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	


	$clgflag=0;
	$emailflag=0;
	$phoneflag=0;
	file_put_contents('error_or_successlog.txt','');//empty the log  file
	if(check_nameandcollege($name))
	{


		$clgflag=1;
		


	}
	else
	{
		$log .='Name or College should not contain digits or special characters!';

	}
	if(check_email($email))
	{


		$emailflag=1;
		

	}else
	$log .='Email Not Valid!';

	if(check_phoneno($phone))
	{

		$phoneflag=1;
		
	}
	else
		$log .='phone length must be [10,15] and must not contain special characters!';


	$file=fopen('error_or_successlog.txt',"w+");
   	$write=fwrite($file,$log);

	if($clgflag && $emailflag && $phoneflag)
	{

		
		$cnt= insert_data($name,$regno,$email,$phone);

	$file=fopen('error_or_successlog.txt',"w+");
   	$write=fwrite($file,$cnt);
   	redirect('delegatesuccess.php');
	}
	else
		redirect('index.php');


}
else{


	echo '<center> can\'t connect to Database,Try again later! </center>';
}

?>