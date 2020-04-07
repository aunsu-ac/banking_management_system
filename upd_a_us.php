<?php
    require 'dblink_bbi.php';
?>
<?php
    session_start();
    if(isset($_GET['upd']))
    {
    $id=$_GET['upd'];
    $sqlc="SELECT * FROM log_u_info WHERE log_u_id='$id' ";
    $r=mysqli_query($cnt,$sqlc) or die("Can not fetch the data.".mysqli_error($cnt));
    $user=mysqli_fetch_array($r);
}
?>
<?php
    // update data
    if(isset($_POST['btnupdate'])){
        $fn = $_POST['fname'];
        $add = $_POST['add'];
        $dob = $_POST['dob'];
        $pn = $_POST['phone'];
        $em = $_POST['email'];
        $pw = $_POST['pass'];
        
        $query = "UPDATE log_u_info SET log_u_fname = '$fn', log_u_add = '$add', log_u_dob = '$dob', log_u_con = '$pn',log_u_eml = '$em',log_u_pass = '$pw' WHERE log_u_id=$id";
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
  <div align="center">
    <h1>Welcome to Busness bank of India</h1>
    <br>

           <div class="col-lg-4 col-xs-12 col-lg-offset-4">
               <h3>Update your selected customer profile</h3>
        <hr>
    <form name="signup" id="signup" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <label  for="account">Account no. : &nbsp;h5g5v1</label><?php echo $user['log_u_id'] ?>
            <label  for="fullname">Fullname: &nbsp;</label><?php echo $user['log_u_name'] ?>
            <label for="Username">Username: &nbsp;</label><?php echo $user['log_u_un'] ?>
            <label for="Password">Old Password: &nbsp;</label><?php echo $user['log_u_pass'] ?><br>
            <small>Put 'old password' in 'new password' field if you <label> don't</label> want to change it</small>
        <div class="form-group">
            <label for="fname">Father name:</label>
            <input value="<?php echo $user['log_u_fname'] ?>" name="fname" id="fname" type="text" class="form-control" placeholder="Enter The Father name" required>
        </div>
        <div class="form-group">
            <label for="add">Address:</label>
            <textarea name="add" class="form-control" cols="50" rows="4" wrap="virtual" required><?php echo $user['log_u_add'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="dob">Date of birth:</label>
            <input value="<?php echo $user['log_u_dob'] ?>" name="dob" id="dob" type="date" class="form-control" required>
        </div>
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
            <a href="o_data.php" class="btn btn-block btn-danger">Cancel</a>
    </form>
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