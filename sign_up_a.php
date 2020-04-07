<!doctype html>
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
          <?php 
            session_start();
            session_destroy();
 ?>
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

<?php if(isset($_GET['msg'])) echo $_GET['msg']; ?>

<form class="form-inline" name="Login Form" action="actions.php" method="post" >
            <div class="form-group">
                <label for="fullname">Fullname: </label>
                <input type="text" name="fullname" class="form-control" placeholder="Enter your Fullname" required>
            </div>
            <div class="form-group">
                <label for="">Contact no: </label>
                <input type="text" name="phone" class="form-control" placeholder="Enter Your Contact No" required>
                </div>
            <div class="form-group">
                <label for="email">E-mail: </label>
                <input type="text" name="email" class="form-control" placeholder="Enter your E-mail" required>
            </div><br><br>
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" name="username" class="form-control" placeholder="Enter your Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" name="password" placeholder="password" required>
            </div><br><br>
            <div class="form-group"> 
            <button name="btn" id="btn" class="form-control" class="btn btn-block btn-info">Sign-up</button>
            </div>
        </form>
        <br>

</div>
</body>
</html>