<html>
	<head>
	<title>Redirection...</title>
	<style>
	#mydiv {
    position:absolute;
    top: 50%;
    left: 50%;
    width:30em;
    height:18em;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em; /*set to a negative number 1/2 of your width*/
    border: 1px solid #ccc;
    background-color: #f3f3f3;
}
</style>
	</head>
	<body>


<?php
session_start();
$username  = $_REQUEST['username'];
$age  = $_REQUEST['age'];
$sex  = $_REQUEST['sex'];
$email = $_REQUEST['email'];
$state  = $_REQUEST['state'];
$occupation  = $_REQUEST['occupation'];
$voterid  = $_REQUEST['voterid'];
$password  = $_REQUEST['password'];
$password2  = $_REQUEST['password2'];

	$conn = mysqli_connect("localhost", "root", "", "mytest") or die("unable to connect to localhost");
	if($username != '' || $age != '' || $sex != '' || $email != '' || $state != '' || $occupation != '' || $voterid != '' || $password != '' || $password2 != ''){
		if($age >= '18'){
			$checkExistence1 = "select `voterid` from register where `voterid` = '".$voterid."'";
			$checkExistence2 = "select `email` from register where `email` = '".$email."'";
			$result1 = mysqli_query($conn, $checkExistence1);
			$result2 = mysqli_query($conn, $checkExistence2);
			if((mysqli_num_rows($result1) == 0) && (mysqli_num_rows($result2) == 0 )){
				if($password == $password2){
					$insertQuery = "insert into register (username, age, sex, state, occupation, voterid, email, password ) values ('".$username."','".$age."','".$sex. "','".$state."', '".$occupation."', '".$voterid."', '".$email."', '".$password."')" ;
					$result = mysqli_query($conn, $insertQuery) or die("Insertion Issue");
					header("location:login.php");
				}
				else{
					echo "<h1 id='mydiv'>passwords are not matching<br />Page is redirecting...</h1>";
					header("refresh:3;url=register.php");
				}
			}
			else{
				echo "<h1 id='mydiv'>Voter ID  or Email already Exists<br />Page is redirecting...</h1>";
				header("refresh:3;url=register.php");
			}
		}
		else{
			echo "<h1 id='mydiv'>Your age is below 18<br />Page is redirecting...</h1>";
			header("refresh:3;url=register.php");
		}
	}
	else{
		echo "<h1 id='mydiv'>Fill all the fields<br />Page is redirecting...</h1>";
		header("refresh:3;url=register.php");
	}
		
		
		
		
	
?>

</body>
</html>