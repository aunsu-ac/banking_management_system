<?php
    require 'dblink_bbi.php';
?>
<?php
    session_start();
    $un=$_SESSION['tuser_a'];
    $sqlc="select * from log_a_info where log_a_un='$un' ";
    $r=mysqli_query($cnt,$sqlc);
    while ($a=mysqli_fetch_array($r)) 
    {
        $n=$a['log_a_name'];
        $no=$a['log_a_con'];
        $em=$a['log_a_eml'];
        $sql_in="insert into con_tab(log_a_name,log_a_con,log_a_eml,log_a_un) values('$n','$no','$em','$un')";
        $re=mysqli_query($cnt,$sql_in);
            if ($re==1) {
                $msg = "Contact added to server.";
                header("Location: blog_ins_a.php?msg=".$msg);
            }else if ($re!==1) {
                $msg = "Data Not Added to contact Database.";
                header("Location: blog_ins_a.php?msg=".$msg);
            }
    }
?>