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
else if($ans=="Database")
{
    header("Location: o_data.php");
}
else if($ans=="Active")
{
    header("Location: active_ss.php");
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
  <button name="btn_nav" value="Database" class="btn btn-danger">Others Data</button>
  <button name="btn_nav" value="Active" class="btn btn-info">Session History</button>

</form><br>
<!-- start content -->
  <form class="navbar-form navbar-left" name="search" id="search" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Name" name="search" id="search" type="text">
        <div class="input-group-btn">
          <button name="btns" class="btn btn-default" type="submit" style=" height: 34px; ">
            <span class="glyphicon glyphicon-search" style=" top: -3px; "> Search</span>
          </button>
        </div>
      </div>
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
   <div class="">
<br><br>
            <div class="table-responsive">
                    <table class="table table-striped">
    <thead>
      <tr>
        <th>Transection id</th>
        <th>Coustomer name</th>
        <th>Last deposit</th>
        <th>Last withdrawal</th>
        <th>Transection Time</th>
        <th>Transection Date</th>
      </tr>
    </thead>
<?php
if(isset($_POST['btns']))
{

  $fns=$_POST['search'];
  $sql="select * from log_u_tranc where log_u_name like '%$fns%' OR log_u_dep like '%$fns%' OR log_u_wit like '%$fns%' OR log_u_date like '%$fns%' order by trans_id desc ";

  $rs=mysqli_query($cnt,$sql);
       if(mysqli_num_rows($rs)>0){
  while($a=mysqli_fetch_array($rs))
  {
    ?>
       <tbody>
<tr>
        <td><label>c5g1c1</label><?php echo $a['0'] ?></td>
        <td><?php echo $a['1'] ?></td>
        <td><?php echo $a['3'] ?></td>
        <td><?php echo $a['4'] ?></td>
        <td><?php echo $a['5'] ?></td>
        <td><?php echo $a['6'] ?></td>
</tr>
   </tbody>
   <?php 
 } }else
 {
  ?>
    <tr>
<td colspan="6" class="text-center">
<h2 class="text-muted">There is No Transection's Like <label><?php echo "$fns"; ?></label> !!</h2>
</td>
</tr>
<?php
 } }
   ?>
    </table>
</div>
</div>
        
<div class="" id="p_div">
  <h3>All Transections</h3>
  <hr>
  <div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Transection id</th>
        <th>Coustomer name</th>
        <th>Last deposit</th>
        <th>Last withdrawal</th>
        <th>Transection Time</th>
        <th>Transection Date</th>
      </tr>
    </thead>

      <?php
$perpage = 10;
if(isset($_GET['page']) & !empty($_GET['page'])){
  $curpage = $_GET['page'];
}else{
  $curpage = 1;
}
$start = ($curpage * $perpage) - $perpage;
$PageSql = "SELECT * FROM log_u_tranc ORDER BY trans_id DESC";
$pageres = mysqli_query($cnt, $PageSql) or die("Can not fetch data from database ".mysqli_error($con));

$totalres = mysqli_num_rows($pageres);

$endpage = ceil($totalres/$perpage);
$startpage = 1;
$nextpage = $curpage + 1;
$previouspage = $curpage - 1;

$ReadSql = "SELECT * FROM log_u_tranc ORDER BY trans_id DESC LIMIT $start, $perpage";
$res = mysqli_query($cnt, $ReadSql);

        while($a = mysqli_fetch_assoc($res))
            {
          ?>
       <tbody>
<tr>
        <td><label>c5g1c1</label><?php echo $a['trans_id'] ?></td>
        <td><?php echo $a['log_u_name'] ?></td>
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
    header("Location: login_a.php");
}
?>
</body>
</html>
