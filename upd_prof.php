<?php
    require 'dblink_bbi.php';
?>
<?php
if(isset($_POST['btn_nav']))
{
    $ans=$_POST['btn_nav'];
    if($ans=="Transections")
    {
        header("Location: home_us.php");
    }
    else if($ans=="shw_prof")
{
    header("Location: shw_prof.php");
}
else if($ans=="plans")
{
    header("Location: n_pln.php");
}
else if($ans=="con")
{
    header("Location: con_tab_u.php");
}
else if ($ans=="m_acv") 
{
    header("Location: m_actv.php");
}

}
?>
<?php
    session_start();
    $un=$_SESSION['tuser_u'];
    $sqlc="SELECT * FROM log_u_info WHERE log_u_un='$un' ";
    $r=mysqli_query($cnt,$sqlc) or die("Can not fetch the data.".mysqli_error($cnt));
    $user=mysqli_fetch_array($r);
?>
<?php
    // update data
    if(isset($_POST['btnupdate'])){
        $pn = $_POST['phone'];
        $em = $_POST['email'];
        $pw = $_POST['pass'];
        
        $query = "UPDATE log_u_info SET log_u_con = '$pn',log_u_eml = '$em',log_u_pass = '$pw' WHERE log_u_un='$un' ";
        $fire = mysqli_query($cnt,$query) or die("Can not update the data. ".mysqli_error($cnt));

        if($fire) header("Location: shw_prof.php");

    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Business Bank of India</title>
<!--Include the Bootstrap.css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap2.css"/>
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
<?php 
if($_SESSION['is_login_u']){ ?>
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
        <li class="active dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <strong>
                    <span class="glyphicon glyphicon-user"></span>
                    <b>Welcome <?php echo $_SESSION['tuser_u']; ?></b>
                </strong>
            </a>
            <ul class="nav nav-pills dropdown-menu">
              <li><a href="logout_u.php">Logout</a></li>
            </ul>  
        </li>
  </ul> 
  </div>
</div>
</nav>
<br><br>
<div class="row">
<div class="col-lg-12">
  <div align="center">
    <h1>Welcome to Busness bank of India</h1>
    <br>
<form method="post" >
  <button name="btn_nav" value="Transections" class="btn btn-info">Transections</button>
  <button name="btn_nav" value="shw_prof" class="btn btn-danger">Show My Profile</button>
  <button name="btn_nav" value="plans" class="btn btn-info">New plans</button>
  <button name="btn_nav" value="con" class="btn btn-danger">Contacts</button>
  <button name="btn_nav" value="m_acv" class="btn btn-danger">My Activity</button>
<br> 
</form>
<?php
$sql="SELECT log_u_strt_date from active_log_u WHERE log_u_un='aunsu28678' ORDER BY log_u_strt_date DESC limit 1" ;
      $md=mysqli_query($cnt,$sql) or die("Can not fetch data from database ".mysqli_error($cnt));
if(mysqli_num_rows($md)>0){ 
      while($r=mysqli_fetch_array($md))
      {
  echo "<br>login date on server ".$r['log_u_strt_date'];
}}
?>
</div>
<div align="left">
    <!-- code gose hear -->
      <div class="col-lg-6 col-xs-12">
               <h3>Update your profile</h3>
        <hr>
    <form name="signup" id="signup" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="account">Account no. : &nbsp;</label><?php echo $user['log_u_id'] ?><br> 
            <label for="fullname">Fullname: &nbsp;</label><?php echo $user['log_u_name'] ?><br> 
            <label for="fname">Father name: &nbsp;</label><?php echo $user['log_u_fname'] ?><br> 
            <label for="add">Address: &nbsp;</label><?php echo $user['log_u_add'] ?><br> 
            <label for="gen">Gender: &nbsp;</label><?php echo $user['log_u_gen'] ?><br> 
            <label for="dob">Date of birth: &nbsp;</label><?php echo $user['log_u_dob'] ?><br> 
            <label for="Username">Username: &nbsp;</label><?php echo $user['log_u_un'] ?><br> 
            <label for="Password">Old Password: &nbsp;</label><?php echo $user['log_u_pass'] ?><br>
            <label for="trns">My balance: &nbsp;</label><?php echo $user['log_u_bal'] ?>RS<br>
            <small>Put 'old password' in 'new password' field if you <label> don't</label> want to change it</small>

        <div class="form-group">
            <label for="phone">Phone no:</label>
            <input value="<?php echo $user['log_u_con'] ?>" name="phone" id="phone" type="text" class="form-control" placeholder="Enter The Phone no" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input value="<?php echo $user['log_u_eml'] ?>" name="email" id="email" type="mailbox" class="form-control" placeholder="Enter the email">
        </div>
        <div class="form-group">
            <label for="pass">New password:</label>
            <input name="pass" id="pass" type="password" class="form-control" placeholder="Enter the new Password">
        </div>
            <div class="form-group">
                <button name="btnupdate" id="btnupdate" class="btn btn-primary btn-block">Update</button>
            </div>
    </form>
    </div>

</div>
</div>
</div>
</div>
<?php
}else{
    header("Location: login_u.php");
}
?>
</body>
</html>
