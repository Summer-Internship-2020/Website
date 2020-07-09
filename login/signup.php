<?php
	$hostname= "localhost";
	$username= "Rishabh";
	$password= "whiteshadow";
	$database= "Server";
	
	$conn=mysqli_connect($hostname,$username,$password,$database);
	
	if(!$conn) die(mysqli_connect_error());
	
	$n   =$_POST['name'];
	$e   =$_POST['email'];
	$ph  =$_POST['phno'];
	$pass=$_POST['pass'];

	$query="INSERT INTO RegUsers VALUES('$n','$e','$ph','$pass')";
	$rec=mysqli_query($conn,$query);
	if($rec) header("Location: redirect.php");
	else echo "Registration Failed";
?>