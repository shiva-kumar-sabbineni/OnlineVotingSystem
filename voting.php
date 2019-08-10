<html>
	<head>
		<title>Vote Here</title>
	</head>
	<style type="text/css"> 
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
label{
	font-weight: bolder;
	font-size: 20pt;
}

input{
	padding: 2%;
	margin:2% 5%;
	font-weight: bolder;
	font-size: 20pt;
}
</style>
	<body>
	<div>
	<table width="100%">
	<tr>
		<th><img width="40%" height="40%" src="images/kavitha.png" /></th>
		<th><img width="40%" height="40%" src="images/sridhar.jpg" /></th>
		<th><img width="40%" height="40%" src="images/revanth.jpg" /></th>
	</tr>
	<tr>
		<th>TRS</th>
		<th>BJP</th>
		<th>CONGRESS</th>
	</tr>
	</table>
	</div>
	<div id="mydiv">
	<?php
		session_start();
		echo "<b><h4>Hello   ".$_SESSION['username']."</h4></b>";
	?>
		<form action="voted.php" method="post">
			<label><input type="radio" value="trs" name="vote"/> TRS</label><br />
			<label><input type="radio" value="bjp" name="vote"/> BJP</label><br />
			<label><input type="radio" value="con" name="vote"/> CONGRESS</label><br />
			<input type="submit" name="cast" value="CAST MY VOTE"  onclick={}/>
		</form><br />

	</div>

	</body>
	
	
</html>