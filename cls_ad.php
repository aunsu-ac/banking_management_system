<?php
    require 'dblink_bbi.php';
?>
<?php
    session_start();
    if(isset($_GET['cls']))
    {
    $msg_a = "";
    $id=$_GET['cls'];
    $sqlc="SELECT * FROM log_a_info WHERE log_a_id='$id' ";
    $r=mysqli_query($cnt,$sqlc);
    while ($a=mysqli_fetch_array($r)) 
    {
        $n=$a['log_a_name'];
        $no=$a['log_a_con'];
        $em=$a['log_a_eml'];
        $sql_in="UPDATE log_a_info SET log_a_stus = 'closed' WHERE log_a_id='$id' ";
        $re=mysqli_query($cnt,$sql_in) or die("Account Closing Failed. ".mysqli_error($cnt));
            if ($re) {
                $msg_a .= "Account Closed ";
                header("Location: o_data.php?msg_a=".$msg_a);
            }
    }
}
?>