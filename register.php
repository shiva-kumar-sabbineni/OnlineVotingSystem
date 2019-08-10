<html>
<head>
  <title>Voter Register</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body background="images/06.jpg">
<div class="header"></br></br></br></br>
    <h2 align="center" style="color:red">Voter Registration Form</h2>
</div>
<div  align="center">
	<form method="post" action="registered.php" style="color:gold">
		<table>
     <tr>
           <td style="color:black;font-weight:bolder;"  bgcolor="white" >Username : </td>
           <td><input bgcolor="grey" type="text" name="username"  required="required"></td>
     </tr>
	  <tr>
           <td style="color:black;font-weight:bolder;" bgcolor="white">Age : </td>
           <td><input type="text" name="age"  required="required"></td>
     </tr>
	  <tr>
           <td style="color:black;font-weight:bolder;" bgcolor="white">Sex : </td>
           <td><input type="text" name="sex"  required="required"></td>
     </tr>
	  <tr>
           <td style="color:black;font-weight:bolder;" bgcolor="white">State : </td>
           <td><input type="text" name="state" required="required"></td>
     </tr>
	 <tr>
           <td style="color:black;font-weight:bolder;" bgcolor="white">Occupation : </td>
           <td><input type="text" name="occupation"  required="required"></td>
     </tr>
	  <tr>
           <td style="color:black;font-weight:bolder;" bgcolor="white">Voter ID : </td>
           <td><input type="text" name="voterid" required="required"></td>
     </tr>
	  
     <tr>
           <td style="color:black;font-weight:bolder;" bgcolor="white">Email : </td>
           <td><input type="email" name="email" required="required"></td>
     </tr>
      <tr>
           <td style="color:black;font-weight:bolder;" bgcolor="white">Password : </td>
           <td><input type="password" name="password"  required="required"></td>
     </tr>
      <tr>
           <td style="color:black;font-weight:bolder;" bgcolor="white">Confirm Password: </td>
           <td><input type="password" name="password2"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="register_btn" value="Register"></td>
     </tr>
  
</table>
</form>

</div>

	</body>
</html>