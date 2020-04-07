<?php
    require 'dblink_bbi.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Business Bank of India</title>
<!--Include the Bootstrap.css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<!-- Include the Jquery Main Library-->
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<!-- Include the BS.js -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="js/jquery-ui.css"/>
<link href="images/BBI_logo_febicon.ico" type="image" rel="icon">
</head>

<body>
<div class="wrapper">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    
<div class="container-fluid">
    
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
<a href="index.php" class="navbar-brand">
      <img style=" width:50px; height: 50px; float: left; margin-top: -15px;  " 
      src="images/BBI_logo.png"/><!--padding-left:40px;-->
    </a>
    <a href="index.php" class="navbar-brand">
      <font size="6px">Business Bank of India</font>
    </a>
</div>
  <div class="collapse navbar-collapse" id="mynavbar">
  <ul class="nav navbar-nav nav-pills">
    <li class="active"><a href="index.php"><font size="3px">Home</font></a></li>
<li class="dropdown">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="w_w_a.php">What We Are</a></li>
    <li><a href="t_c.php">Team &amp; Contributer</a></li>
  </ul>
  </li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="dmst.php">Demonstration</a></li>
  <li><a href="fdb.php">Feedback</a></li> 
  </ul>
        
  <ul class="nav navbar-nav navbar-right nav-pills">
    <li class="">
            <a href="sign_up.php">
                <span class="glyphicon glyphicon-user"> Sign-up</span>
            </a>
        </li>
        <li>
            <a href="login_u.php">
                <span class="glyphicon glyphicon-log-in"> Login &raquo;</span>
            </a>
                
        </li>
  </ul>
  </div>
</div>
</nav>
<br><br><br><br>

<div class="row">
<div class="col-lg-8 col-lg-offset-2">
    <div class="col-lg-6 col-lg-offset-3 col-xs-12">
        <h3>Secure <strong>Login</strong> For Admin</h3>
        <hr>
        <form name="Login Form" action="login_a.php" method="post">
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" name="tuser" class="form-control" placeholder="Enter your Username" required="">
            </div>
            <div class="form-group">
                <label for="password">Password:-</label>
                <input type="password" class="form-control" name="tpass" placeholder="password" required="">
            </div>
            <div class="form-group"> 
            <button name="btn" id="btn" class="form-control">Login</button>
            </div>
        </form>
        <br>
    </div>
    </div>
    </div>

</div>
</body>
</html>
<?php
//forlogin
session_start();
if(!isset($_SESSION['is_login_a'])){
if (isset($_POST['btn']))
{
    $un=mysqli_real_escape_string($cnt,trim($_POST['tuser']));
    $pw=mysqli_real_escape_string($cnt,trim($_POST['tpass']));
    $sql="select * from log_a_info where log_a_un='$un' and log_a_pass='$pw' and log_a_stus='open' ";
    
    $r=mysqli_query($cnt,$sql);
    if ($r) {
      if (mysqli_num_rows($r) ==1 ) {
        while($a=mysqli_fetch_array($r))
    {
        $fn=$a[1];
        $sql_ses_a = "INSERT INTO active_log_a(log_a_name,log_a_un,log_a_strt_tim,log_a_strt_date) VALUES('$fn','$un',curtime(),curdate())";

        $r_s = mysqli_query($cnt,$sql_ses_a) or die("Can not insert data into database. ".mysqli_error($cnt));
            if ($r_s) {
                $_SESSION['is_login_a'] = true;
                $_SESSION['tfname'] = $fn;
                $_SESSION['tuser_a'] = $un;
                header("Location: blog_ins_a.php");
                      }
      }
    }
  }
    else if($cn==0)
    {
        echo "incorrect username or password or your Account has been closed";
        
    } 
    mysqli_close($cnt);
}
}else{
    header("Location: blog_ins_a.php");
}
?>