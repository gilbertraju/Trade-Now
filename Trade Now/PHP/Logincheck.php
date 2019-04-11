<?php

include 'db.php';

if(isset($_POST['logindt']))
{
	$user = $_POST['user'];
	$pwd =md5($_POST['pwd']);
	$sql="Select * from userdata where Username='$user';";
	$stmt = mysqli_query($con,$sql);
	$count=mysqli_num_rows($stmt);

if($count!=0)
{
	$rs = mysqli_fetch_array($stmt);
	if($rs['Password']==$pwd)
	{
		echo "Login Successful";
	}
	else
		echo "Invalid Password";

}  

else 
	 echo "Invalid Username"; 



exit();

}




?>