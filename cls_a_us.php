<?php
    require 'dblink_bbi.php';
?>
<?php
    session_start();
    if(isset($_GET['cls']))
    {
        $msg="";
    $id=$_GET['cls'];
    $sqlc="SELECT * FROM log_u_info WHERE log_u_id='$id' ";
    $r=mysqli_query($cnt,$sqlc);
    while ($a=mysqli_fetch_array($r)) 
    {
        $n=$a['log_u_name'];
        $no=$a['log_u_con'];
        $em=$a['log_u_eml'];
        $un=$a['log_u_un'];
        $bal=$a['log_u_bal'];

        $sql_in="UPDATE log_u_info SET log_u_bal = '0' WHERE log_u_id='$id' ";
        $re=mysqli_query($cnt,$sql_in) or die("Final Transection Failed. ".mysqli_error($cnt));
            if ($re) {
                $msg .= "All Money Withdrawal The Previous Balance is ".$bal.' Current balence is 0.00 ' ;
            }

        $sql_trnc = "INSERT INTO log_u_tranc(log_u_name,log_u_un,log_u_wit,log_u_time,log_u_date) VALUES('$n','$un','$bal',curtime(),curdate())";
        $r_t = mysqli_query($cnt,$sql_trnc) or die("Can not insert data into database. ".mysqli_error($cnt));
            if ($r_t) {
                $msg .= " Transection success ";
            }

        $sql_cls="UPDATE log_u_info SET log_u_stus = 'closed' WHERE log_u_id='$id' ";
             $r_a=mysqli_query($cnt,$sql_cls) or die("Account Closing Failed. ".mysqli_error($cnt));
            if ($r_a) {
                $msg .= " Account Closed ";
                header("Location: o_data.php?msg=".$msg);
            }
    }
}
 
?>