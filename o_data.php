<?php
    require 'dblink_bbi.php';
?>
<?php
if(isset($_POST['btn_nav']))
{
    $ans=$_POST['btn_nav'];
    if($ans=="Blogs")
    {
        header("Location: blog_ins_a.php");
    }
    else if($ans=="AllB")
{
    header("Location: show_blog.php");
}
else if($ans=="Active")
{
    header("Location: active_ss.php");
}
else if($ans=="Transections")
{
    header("Location: t_t_a.php");
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
if($_SESSION['is_login_a']){ ?>
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
                    <b>Welcome <?php echo $_SESSION['tuser_a']; ?></b>
                </strong>
            </a>
            <ul class="nav nav-pills dropdown-menu">
              <li><a href="logout_a.php">Logout</a></li>
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
  <button name="btn_nav" value="Blogs" class="btn btn-info">Blogs</button>
  <button name="btn_nav" value="AllB" class="btn btn-info">All Blogs</button>
  <button name="btn_nav" value="Active" class="btn btn-info">Session History</button>
  <button name="btn_nav" value="Transections" class="btn btn-danger">Transections</button>

</form>
<?php
$un=$_SESSION['tuser_a'];
$sql="SELECT log_a_strt_date from active_log_a WHERE log_a_un='$un' ORDER BY log_a_strt_date DESC limit 1" ;
      $md=mysqli_query($cnt,$sql) or die("Can not fetch data from database ".mysqli_error($cnt));
if(mysqli_num_rows($md)>0){ 
      while($r=mysqli_fetch_array($md))
      {
  echo "<br>login date on server ".$r['log_a_strt_date'];
}}
?>
</div>
<div align="left">
<!-- start content -->
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">All User's information</a>
          <?php
            if(isset($_GET['msg'])) echo "<font color=red>".$_GET['msg'].'</font>'; 
          ?>
        </h4>

      </div>
      <div id="collapse1" class="panel-collapse collapse ">
        <div class="panel-body">
          <?php
            include_once 'us_a_data.php';
          ?>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">All Admin's information</a>
          <?php
            if(isset($_GET['msg_a'])) echo "<font color=red>".$_GET['msg_a'].'</font>'; 
          ?>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <?php
            include_once 'ad_a_data.php';
          ?>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Feedback's</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <?php
            include_once 'feed_a.php';
          ?>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">All Contact's</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="">
            <?php
              include_once 'con_a_sh.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </div> 
  </div> 
</div>
</div>
</div>
</div>
<?php
}else{
    header("Location: login_a.php");
}
?>
</body>
</html>
