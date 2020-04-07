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
else if($ans=="upd_prof")
{
    header("Location: upd_prof.php");
}
    else if($ans=="shw_prof")
{
    header("Location: shw_prof.php");
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
    session_start();
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
  <button name="btn_nav" value="upd_prof" class="btn btn-danger">Update Profile</button>
  <button name="btn_nav" value="shw_prof" class="btn btn-info">Show My Profile</button>
  <button name="btn_nav" value="con" class="btn btn-info">Contacts</button>
  <button name="btn_nav" value="m_acv" class="btn btn-danger">My Activity</button>
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
    <!-- code gose hear -->
<?php
if(isset($_POST['btn_x_nav']))
{
    $trns=$_POST['btn_x_nav'];
    if($trns=="dip")
    {
        header("Location: d_u.php");
    }
else if($trns=="wit")
{
    header("Location: w_u.php");
}
}
?>
<form method="post">
<button name="btn_x_nav" value="wit" class="btn btn-warning">Withdrawal</button>
</form>
<?php
if (isset($_POST['btn_dip'])) 
{
    $msg="";
    $n=$_SESSION['tfname'];
    $un=$_SESSION['tuser_u'];
    $amm=$_POST['amm'];
    $sql_dip="insert into log_u_tranc (log_u_name,log_u_un,log_u_dep,log_u_time,log_u_date) values('$n','$un','$amm',curtime(),curdate())";
    $r = mysqli_query($cnt,$sql_dip) or die("Can not insert data into database. ".mysqli_error($cnt));
            if ($r) {
                  $msg .= $amm."RS Deposited <br> Transection success ";
            }

   $sqlc="SELECT * FROM log_u_info WHERE log_u_un='$un' ";
    $r_mb=mysqli_query($cnt,$sqlc);
    while ($a=mysqli_fetch_array($r_mb)) 
    {
      $bal=$a['log_u_bal'];
      $tb=$amm+$bal;
       $sql_in="UPDATE log_u_info SET log_u_bal = '$tb' WHERE log_u_un='$un' ";
        $re=mysqli_query($cnt,$sql_in) or die("Final Transection Failed. ".mysqli_error($cnt));
            if ($re) {
        $msg .= "Previous Balance is ".$bal.' Current balence is '.$tb ;
        header("Location: d_u.php?msg=".$msg);

            }

    }

}

?>
<div align="left">
<div class="col-lg-4 col-xs-12 col-lg-offset-1">
<form method="post" class="">
  <div class="form-group">
      <label for="username">Enter Amount: </label>
      <input type="number" name="amm" class="form-control" placeholder="Enter your amount you want to deposit" required><small> Enter your amount you want to deposit</small>
  </div>
<div class="form-group">
<button type="submit" name="btn_dip" value="Deposit" class="btn btn-primary">Deposit</button>
</div>
</form>

</div>
</div>
<?php
  if(isset($_GET['msg'])) echo "<font color=Green><label>".$_GET['msg'].'</label></font>'; 
?>
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
