
<html>
<head>
<title>RESULTS</title>
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
    background-color: #f3f4f3;
}
h2 {
    position:absolute;
    top: 50%;
    left: 50%;
    width:30em;
    height:18em;
	padding-top:1%;
	padding-left:1%;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em; /*set to a negative number 1/2 of your width*/
    border: 1px solid #ccc;
    background-color: #f3f3f3;
}
</style>
</head>
<body>

<h2>The RESULTS are...</h2>
<div id="mydiv">
<table width="100%" height="20%" border="1" cellpadding="1" cellspacing="1">
<tr>
<th bgcolor=red>TRS</th>
<th bgcolor=red>BJP</th>
<th bgcolor=red>CONG</th>

</tr>
<?php
$con=mysqli_connect("localhost","root","","mytest") or die("error connection");
$queryTrs="select * from players where `voted` = 'trs'";
$queryBjp="select * from players where `voted` = 'bjp'";
$queryCon="select * from players where `voted` = 'con'";
$resultTrs=mysqli_query($con,$queryTrs);
$resultBjp=mysqli_query($con,$queryBjp);
$resultCon=mysqli_query($con,$queryCon);

$gotResTrs = mysqli_num_rows($resultTrs);
$gotResBjp = mysqli_num_rows($resultBjp);
$gotResCon = mysqli_num_rows($resultCon);


echo"<tr><td align=center bgcolor=grey>".$gotResTrs."</td><td align=center bgcolor=grey>".$gotResBjp."</td><td align=center bgcolor=grey>".$gotResCon."</td></tr>";
?>
</table><br>

Go back to Homepage	<a href="logout.php"><big>CLICK HERE</big></a>

</div>
</body>

</html>