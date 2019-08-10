<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","mytest");
if(isset($_POST['login_btn']))
{
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
	echo $username."\n".$password;
    $sql="SELECT * FROM register WHERE email='".$username."' AND password='".$password."'";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['message']="You are now Loggged In";
        $_SESSION['username']=$username;
		
        header("location:user.php");
		
    }
   else
   {
                $_SESSION['message']="Username and Password combiation incorrect";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="cache-control" content="private, max-age=0, no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
  <title>Voter Login</title>
  <link href="style.css" rel="stylesheet">
</head>
<center>
<body background="images/login.jpg" style="background-repeat:norepeat; background-size:100%;">
<div class="header"></br></br></br></br></br></br>
    <h1 style="color:yellow">&nbsp;Voter Login</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg' ><font color='white'>".$_SESSION['message']."</font></div><br />";
         unset($_SESSION['message']);
    }
?>
<center>
<form id="form1" method="post" action="login.php" style="color:white">
  <table>
     <tr>
           <td>Enter Email : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="login_btn" class="Log In"></td>
     </tr>
	 
  
</table>

<p align="center" >
Go to home menu click <a href="index.html" style=color:red>HERE</a>
</p>
</form>

</body>

</html>
 