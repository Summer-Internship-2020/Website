<html>
<head>
<?php
	$hostname= "localhost";
	$username= "Rishabh";
	$password= "whiteshadow";
	$database= "Server";
		
	$conn=mysqli_connect($hostname,$username,$password,$database);
		
	if(!$conn) die(mysqli_connect_error());
	
	$ue   =$_POST['uemail'];
	$upass=$_POST['upass'];
	
	$query="SELECT pass from RegUsers where email='$ue' ";
	$rec=mysqli_query($conn,$query);
	$row = mysqli_fetch_array($rec);
	if($row['pass']==$upass)
	{
		//header("Location: redirect.php");
		echo '<script>
		document.redirect_form.submit();
		</script>';
	}
	else echo "Email and password didn't match";
?>

</head>
<body>
	<form action="redirect.php" method="post" name="redirect_form">
		<input type="hidden" value="<?php $row['name'] ?>" name="username">
	</form>
</body>
</html>