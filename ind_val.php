<?php 
include("connection.php");

if(isset($_POST['button']))
	{
    session_start();  
    $username=$_POST["username"];
	$password=$_POST["password"];
	$select="SELECT * FROM tb1 where username='$username' and password='$password'";
	$result=($conn->query($select));
	$row=mysqli_num_rows($result);

		if($row==1)
			{

   				 $_SESSION['username']=$username; 
   				 header('location:profile.php'); 
   			}

     elseif($row!=1){
	 header('location:sign.php');
	}
}

?>