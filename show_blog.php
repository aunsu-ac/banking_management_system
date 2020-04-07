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
else if($ans=="Database")
{
    header("Location: o_data.php");
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
  <button name="btn_nav" value="Database" class="btn btn-danger">Others Data</button>
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
    <h2>All Blogs: </h2>
<?php
$sql="select * from log_blog order by log_blog_time desc";
$md=mysqli_query($cnt,$sql) or die("Can not fetch data from database ".mysqli_error($cnt));

if(mysqli_num_rows($md)>0){ 

      while($r=mysqli_fetch_array($md))
      {
          ?><hr>
<div style=" background-image: url(<?php echo $r['log_blog_img'] ?>); opacity: .15; width: 100%; height: 220px;"></div>

  <!-- Right-aligned media object -->
  <div class="media" style="width: auto; height: auto; margin-top: -200px; margin-bottom: 50px">
    <div class="media-body">
      <h4 class="media-heading" style=" margin-left: 10px; ">&nbsp;Subject: <?php echo $r['log_blog_sub'] ?></h4>
      <h4 class="media-heading" style=" margin-left: 10px; "><small>&nbsp;on <?php echo $r['log_blog_date'] ?></small> by: <?php echo $r['log_a_name'] ?></h4>
      <hr>
      <p style=" margin-left: 10px; "> &nbsp;Blog Content: <?php echo $r['log_blog_data'] ?>
      </p>

    </div>
    <div class="media-right media-middle">
      <img src="<?php echo $r['log_blog_img'] ?>" class="media-object" style="width:200px;">
      
    </div>
  </div>
<p align="right"><a href="<?php echo $r['log_blog_img'] ?>" target="_blank" >Show Image</a></p>
<?php
        }      
        }
    else{ ?>
     <strong>Sorry! There is No Blogs to Show.</strong>
    <?php } ?>

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
