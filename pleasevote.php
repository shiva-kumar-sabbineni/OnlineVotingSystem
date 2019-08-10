<html>
	<head>
		<title>Cast Yuor Vote Here</title>
	</head>
	<body><?php
	session_start();
		echo "<b><h4>Hello   ".$_SESSION['username']."</h4></b>";
		?>
		<h4>Please Cast Your Vote Here</h4>
		<form action="voted.php" method="post">
			<label><input type="radio" value="trs" name="vote"/> TRS</label><br />
			<label><input type="radio" value="bjp" name="vote"/> BJP</label><br />
			<label><input type="radio" value="con" name="vote"/> CONGRESS</label><br />
			<input type="submit" name="cast" value="vote"  onclick={}/>
		</form>
	</body>

	
</html>