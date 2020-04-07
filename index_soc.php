<!DOCTYPE html>
<html>
    <head>
        <title>ABS Academy.... News</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body><center>
        <h1>Login to the ABS Academy.... News</h1>
        <form name="Login Form" action="login.php" method="post" >
            <fieldset>
                <legend>Login Form</legend>
                <label>Username:- <input type="text" name="tuser" placeholder="Enter your Username" required></label>
                <label>Password:- <input type="password" name="tpass" placeholder="password" required></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="Reset"> 
                &nbsp;&nbsp;
            	<input type="submit" name="btn" value="Login"><br><br>
            	<a href="signup.php">Unregistered Users Sign-up hear, to get letest news of ABS Academy....</a><br>
            	<p>This Website is a Final year Project and only for Teachers and Students</p>
            </fieldset>
        </form></center>


    </body>
</html>

<?php
require 'dblink.php';
?>

<?php
if (isset($_POST['btn']))
{
    $un=$_POST['tuser'];
    $pw=$_POST['tpass'];
    
    $sql="select count(*) from login_info where log_un='$un' and log_pass='$pw' ";
    
    $r=mysqli_query($cn,$sql);
    $cnt=0;
    while($a=mysqli_fetch_array($r))
    {
        $cnt=$a[0];
    
    if($cnt==1)
    {
        header('Location: home.php');
    }
    else if($cnt==0)
    {
        echo "incorrect username or password";
        header('login.php');
    }
    }
    mysqli_close($cn);
}
?>