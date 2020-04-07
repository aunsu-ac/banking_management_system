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
  <li class="active"><a href="fdb.php">Feedback</a></li> 
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

<span style=" font-size: 20px; font-weight: 800; font-family: times new roman; ">
  <p>&nbsp; &nbsp; &nbsp; &nbsp;
    If you have some suggestion or Questions how to upgrade this website!<br>
    &nbsp; &nbsp; &nbsp; &nbsp;Please Contact Us!&nbsp; Your Oppnion is Inportant for Us!<br>
    &nbsp; &nbsp; &nbsp; &nbsp;Please rate us for the credit of team work . . .!</p></span>

<form name="sentMessage" id="contactForm" method="post" action="fdb.php">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required="" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" required="" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <p>&nbsp; &nbsp; &nbsp; &nbsp;How do you rate about the website exprience . . .!</p>
              &nbsp; &nbsp; &nbsp; &nbsp;<input type="radio" name="r" value="poor">&nbsp;Poor
              <input type="radio" name="r" value="good">&nbsp;Good
              <input type="radio" name="r" value="excellent">&nbsp;Excellent<br>
              <label>&nbsp; &nbsp; &nbsp; &nbsp;Please provide the rating between &#40;1-10&#41;</label>
              <input type="range" name="rng" min="1" max="10" style=" margin-left: 40px; ">
              <br>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Your Message *" id="message" name="mesg" required="" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="row">
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button type="submit" class="btn" name="btn">Send Message</button>
                </div>
              </div>
            </form><br>
<?php
if (isset($_POST['btn'])) 
{
    $nm=$_POST['name'];
    $em=$_POST['email'];
    $r=$_POST['r'];
    $rng=$_POST['rng'];
    $mesg=$_POST['mesg'];

    $sql="INSERT INTO v_feedback(v_f_name,v_f_eml,v_f_typ,v_f_rng,v_f_msg) VALUES('$nm','$em','$r','$rng','$mesg')";

        $r=mysqli_query($cnt,$sql);
        if($r){
            echo "&nbsp; &nbsp; &nbsp; Message is Submited Successfully. Thank You! <br><br>";
           // header("Location: index.php?msg=Your message Submited Successfully");
        }else{
            echo "&nbsp; &nbsp; &nbsp; Sorry! Message not Submited.<br><br>";
        }
}
?><br>
</div>
</body>
</html>