<html>
	<head>
	<title>Edit Voter Data</title>
	</head>
	<body background="images/color1.jpg">
	<h2 align="center" style="background-color:orange">
	</h2></br></br>
	<h1 align="center">Edit via password<h1>
	<center>
		<form action="edit.php" method="POST" align="center">
			<table  height="30%" bgcolor="grey" align="center">

		<tr><th>Username: </th><td> <input type="text" name="username"></td></tr>
		<tr><th>Age: </th><td>   <input type="text" name="age" required></td></tr>
		<!--<tr><th>voterid: </th><td>  <input type="text" name="voterid" maxlength="10" ></td></tr>-->
		<tr><th>State: </th><td>  <input type="text" name="state" ></td></tr>
		<tr><th>Occupation: </th><td> <input type="text" name="occupation"></td></tr>
		<!--<tr><th>Email: </th><td>  <input type="text" name="email" ></td></tr>-->
		<tr><th>Current password: </th><td>  <input type="password" name="password"  ></td></tr>
		
		</table><br/>
				<input type="submit" value="Submit"  name="submit">
				&nbsp;&nbsp;&nbsp;<a href="logout.php" style=color:white><input type="button" value="Go Back"/></a>

		</form>

	<center>
	</body>
	</html>
	
<?php
	session_start();
	$email = $_SESSION['username'];
	$db=mysqli_connect("localhost","root","","mytest") or die("error connection");
	if(isset($_POST['submit']))
	{
	
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$age=$_REQUEST['age'];
	#$voterid=$_REQUEST['voterid'];
	$state=$_REQUEST['state'];
	$occupation=$_REQUEST['occupation'];
	#$email=$_REQUEST['email'];
	$q="update register set username='$username',age='$age',state='$state',occupation='$occupation' where email = '$email' and password='$password'";
	$result=mysqli_query($db,$q) or die("failed to open");
	

	header("location:view1.php");
	
		
	}
	
?>
