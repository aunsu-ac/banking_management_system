<?php
    require 'dblink_bbi.php';
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
</div>
<?php
    if(isset($_GET['shw']))
    {
    $id=$_GET['shw'];
    $sqlc="SELECT * FROM log_u_info WHERE log_u_id='$id' ";
    $md=mysqli_query($cnt,$sqlc) or die("Can not fetch the data.".mysqli_error($cnt));
    
      while($r=mysqli_fetch_array($md))
      {
          ?>
        <label  for="account">Account no. : &nbsp;h5g5v1</label><?php echo $r['0'] ?><br>
        <label  for="fullname">Fullname: &nbsp;</label><?php echo $r['1'] ?><br>
        <label for="fname">Father name: &nbsp;</label><?php echo $r['2'] ?><br>
        <label for="Adderss">Adderss: &nbsp;</label><?php echo $r['3'] ?><br>
        <label for="dob">Date of Birth: &nbsp;</label><?php echo $r['4'] ?><br>
        <label for="Gender">Gender: &nbsp;</label><?php echo $r['5'] ?><br>
        <label for="contact">Contact no. : &nbsp;</label><?php echo $r['6'] ?><br>
        <label for="E-Mail">E-Mail: &nbsp;</label><?php echo $r['7'] ?><br>
        <label for="Username">Username: &nbsp;</label><?php echo $r['8'] ?><br>
        <label for="Password">Password: &nbsp;</label><?php echo $r['9'] ?><br>
        <label for="current Balence">current Balence: &nbsp;</label><?php echo $r['10'] ?> RS<br>
        <label for="status">Account status: &nbsp;</label><?php echo $r['11'] ?><br>
        <a href="upd_a_us.php?upd=<?php echo $r['log_u_id'] ?>" class="btn btn-warning btn-block">Update</a><br>
        <a href="o_data.php" class="btn btn-primary btn-block">Back</a><br>

<?php
        }      
        }
 ?>
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