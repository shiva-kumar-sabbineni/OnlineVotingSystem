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
		$user = $_SESSION['username'];
		echo "<h1 id='mydiv'><b><h4>Hello   ".$user."</h4></b>";
	$vote = $_REQUEST['vote'];
	$conn = mysqli_connect("localhost", "root", "", "mytest") or die("Localhost not Connected");
	$checkFlag = "select `flag` from register where email = '".$user."'";
	$result = mysqli_query($conn, $checkFlag);
	$value = mysqli_fetch_assoc($result);
	echo $value['flag'];
	if($vote == ''){
		header("refresh:0;url=pleasevote.php");

	}
	else if($value['flag'] == "ok"){
		echo "<h1 id='mydiv'><h1 id='mydiv'>Sorry! You have already Voted.<br />"."Page is redirecting...</div>";
		header("refresh:3;url=index.html");
	}
	else{
		$sql = "insert into players values ('".$vote."')";
		if(mysqli_query($conn, $sql)){
			$setFlag = "update register set flag = 'ok' where email = '".$user."'";
			if(mysqli_query($conn, $setFlag)){
				echo "<h1 id='mydiv'>Thankyou for Voting<br />"."Page is redirecting...</div>";
				header("refresh:3;url=index.html");
			}
			else{
				echo "<h1 id='mydiv'>Try Again<br />"."Page is redirecting...</div>";
				header("refresh:3;url=index.html");
			}
		}
		else{
			echo "<h1 id='mydiv'>not voted";
		}
	}
?>
<br /><br /><br /><br />
</body>
</html>