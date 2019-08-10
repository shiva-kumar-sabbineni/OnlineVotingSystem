<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","mytest");
if(isset($_POST['login_btn']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password=($password); //Remember we hashed password before storing last time
    $sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['message']="You are now Loggged In";
        $_SESSION['username']=$Username;
		
        header("location:results.php");
		
    }
   else
   {
                $_SESSION['message']="If youare admin you can login";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="cache-control" content="private, max-age=0, no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
  <title>Admin Login</title>
  <link href="style.css" rel="stylesheet">
</head>
<center>
<body background="images/bg.jpg" style="background-size:100%">
<div class="header"></br></br></br></br></br></br>
    <h1 style="color:black">&nbsp;Admin login</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<center>
<form id="form1" method="post" action="admin1.php" style="color:black">
  <table>
     <tr>
           <td>Username : </td>
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

<p align="center">
Go to home menu click	<a href="index.html">here</a>
</p>
</form>

</body>
</html>