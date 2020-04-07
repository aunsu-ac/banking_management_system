<?php
    require 'dblink_bbi.php';
?>
 <?php
    // get update variables
    if(isset($_GET['upd']))
    {
        $id = $_GET['upd'];
        $query = "SELECT * FROM con_tab WHERE con_id = $id";
        $fire = mysqli_query($cnt,$query) or die("Can not fetch the data.".mysqli_error($cnt));
        $user = mysqli_fetch_assoc($fire);  
    }
?>
<?php
    // update data
    if(isset($_POST['btnupdate'])){
        $pn = $_POST['phone'];
        $em = $_POST['email'];
        
        $query = "UPDATE con_tab SET log_a_con = '$pn',log_a_eml = '$em' WHERE con_id=$id";
        $fire = mysqli_query($cnt,$query) or die("Can not update the data. ".mysqli_error($cnt));

        if($fire) header("Location: o_data.php");

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
<div class="">
  <div align="center">
    <h1>Welcome to Busness bank of India</h1>
    <br>
           <div class="col-lg-4 col-xs-12 col-lg-offset-4">
               <h3>Update your selected data</h3>
        <hr>
    <form name="signup" id="signup" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="form-group">
            <label  for="fullname">Fullname: &nbsp;</label><?php echo $user['log_a_name'] ?>
        </div>
        <div class="form-group">
            <label for="phone">Phone no:</label>
            <input value="<?php echo $user['log_a_con'] ?>" name="phone" id="phone" type="text" class="form-control" placeholder="Enter The Phone no" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input value="<?php echo $user['log_a_eml'] ?>" name="email" id="email" type="mailbox" class="form-control" placeholder="Enter the email">
        </div>
            <div class="form-group">
                <button name="btnupdate" id="btnupdate" class="btn btn-primary btn-block">Update</button>
            </div>
        <a href="o_data.php" class="btn btn-block btn-danger">Cancel</a>

    </form><br>
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