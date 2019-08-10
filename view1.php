
<html>
<head>
<title>VOTERS DATA</title>
</head>
<body background="images/all.jpg">
<center>

<table width="650" border="1" cellpadding="1" cellspacing="1">
<tr>
<th bgcolor=red>VOTERID</th>
<th bgcolor=red>EMAIL</th>
<th bgcolor=red>NAME</th>



</tr>
<?php
$con=mysqli_connect("localhost","root","","mytest") or die("error connection");
$query="select * from register";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)){
echo"<tr><th bgcolor=lightgreen>".$row["voterid"]."</th><th bgcolor=lightgreen>".$row["email"]."</th><th bgcolor=lightgreen>".$row["username"]."</th></tr>";
}
?>
</table><BR>

<!--<a href="edit.php"><big><mark style=color:maroon>EDIT YOUR RECORDS</mark></big></a>	<br></br>-->
<!--<a href="delete.php"><big><mark style=color:maroon>DELETE YOUR RECORDS</mark></big></a>-->
</center>

</body>
</html>