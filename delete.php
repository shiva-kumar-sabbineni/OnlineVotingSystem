<html>
	
	</h2>
	<center>
	<h1>Enter voterid to delete the account</h1>
	<form action="delete.php" method="post">
	Password<input type="password" name="password"><br>
	<input type="submit" value="delete" name="submit"><br>
	</center>
	</html>
	
<?php
	$db=mysqli_connect("localhost","root","","mytest") or die("error connection");
	if(isset($_POST['submit']))
	{
	$password=$_REQUEST['password'];
	
	$q="delete from register where password='$password'";
	$result=mysqli_query($db,$q) or die("failed to open");
	header("location:view1.php");
	}
?>

	





