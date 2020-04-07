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
<script type="text/javascript">
  function printcontent(el) {
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
  }
</script>
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
  <button name="btn_nav" value="plans" class="btn btn-danger">New plans</button>
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
<button name="btn_x_nav" value="dip" class="btn btn-primary">Deposit</button>
<button name="btn_x_nav" value="wit" class="btn btn-warning">Withdrawal</button>
<br><br>
</form>
<div class="" id="p_div">
  <h3>All Transections</h3>
  <hr>
  <div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Transection id</th>
        <th>Last deposit</th>
        <th>Last withdrawal</th>
        <th>Transection Time</th>
        <th>Transection Date</th>
      </tr>
    </thead>
<?php
$un=$_SESSION['tuser_u'];
$perpage = 10;
if(isset($_GET['page']) & !empty($_GET['page'])){
  $curpage = $_GET['page'];
}else{
  $curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$PageSql = "SELECT * FROM log_u_tranc WHERE log_u_un='$un' ORDER BY trans_id DESC";
$pageres = mysqli_query($cnt, $PageSql) or die("Can not fetch data from database ".mysqli_error($con));

$totalres = mysqli_num_rows($pageres);

$endpage = ceil($totalres/$perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;

$ReadSql = "SELECT * FROM log_u_tranc WHERE log_u_un='$un' ORDER BY trans_id DESC LIMIT $start, $perpage";
$res = mysqli_query($cnt, $ReadSql);

        while($a = mysqli_fetch_assoc($res))
            { 
?>
       <tbody>
<tr>
        <td><label>c5g1c1</label><?php echo $a['trans_id'] ?></td>
        <td><?php echo $a['log_u_dep'] ?></td>
        <td><?php echo $a['log_u_wit'] ?></td>
        <td><?php echo $a['log_u_time'] ?></td>
        <td><?php echo $a['log_u_date'] ?></td>
</tr>
   </tbody>
<?php
        }      
 ?>

      
  </table>
</div>
</div>
<nav aria-label="Page navigation"><!-- style=" width: 1920px; height: 50px; "-->
  <ul class="pagination">
  <?php if($curpage != $startpage){ ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous"><!--  style=" width: 72px; "-->
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">First</span>
      </a>
    </li>

    <?php } ?>
    <?php if($curpage >= 2){ ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
    <?php } ?>
    <li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
    <?php if($curpage != $endpage){ ?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next"><!--  style=" width: 72px; "-->
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Last</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>
        
<button onclick="printcontent('p_div')" class="btn btn-block btn-primary">Print</button>
<br>

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
