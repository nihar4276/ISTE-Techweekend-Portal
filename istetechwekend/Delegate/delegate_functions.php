
<?php

include 'dbconnect.php';

function redirect($location)
{
	header("Location: " . $location);
	exit;	


}

function check_nameandcollege($name)//credentials checks
{
	$flag1=0;
	
	//$file=fopen('functions.txt',"w+");

if (preg_match('/^[a-zA-Z.\' ]+$/', $name))//regex
{
    $flag1=1;
   

}

	
   	

	if($flag1)
	return 1;
	else
	return 0;



}


function check_email($email)
{
	$flag3=0;

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  // The email address is valid
	$flag3=1;


}
if($flag3)
return 1;
else
{


return 0;
}


}
function check_phoneno($phone)
{
	
	$flag2=0;
	
	$flag1=0;
	//maxinternational code length is 5
	//japanese regional number contain letters so no letter check needed but can't contain special characters
	if(!preg_match('/[£$%&*()}{@#~?><>,|=_¬-]/', $phone))
	{

		$flag2=1;

	}

	if(strlen($phone)>=10 && strlen(phone)<=15)
		$flag1=1;

	//atleast10 digits check

	


		
	if($flag2 && $flag1)
	{

		return 1;

	}
	else 
		return 0;


}

function insert_data($name,$regno,$email,$phone){

	$site='localhost';
	$username='root';
	$pw='';	
	$database="iste";

	$connection=mysqli_connect($site,$username,$pw,$database);

	if($connection)
	{


		$query= "INSERT INTO delegate(name,regno,phone,email) VALUES('$name','$regno','$phone','$email')";
		$result=mysqli_query($connection,$query);
		if($result)
		{
			$query1="SELECT id from delegate WHERE name='$name' AND regno='$regno'";
			$result1=mysqli_query($connection,$query1);

			
	if($result1)
	{			
		
		$row = mysqli_fetch_assoc($result1); 

        return ' Congrats! You have successfully Registered! your Delegate Id  is '.$row['id'].'';
	





		

	}else
	return mysqli_error($connection);







	}
	else{
		return mysqli_error($connection);

		


	}






}
else
{

	return 'cant connect to database';
}


}

?>


