<?php
    include_once 'dblink_bbi.php';
    ?> 
<?php
    session_start();
    $un=$_SESSION['tuser_u'];
    $sql="select ses_id from active_log_u where log_u_un='$un' ORDER BY ses_id DESC limit 1" ;
    $r_u=mysqli_query($cnt,$sql) or die("Cant fetch data from database. ".mysqli_error($cnt));
    	while ($a=mysqli_fetch_array($r_u)) {
    		$id=$a['0'];
    		$sql_upd="UPDATE active_log_u SET log_u_stp_tim = curtime(), log_u_stp_date = curdate() WHERE ses_id='$id' ";
    		$r_u_ins=mysqli_query($cnt,$sql_upd) or die("Logout Failed. ".mysqli_error($cnt));
    		if ($r_u_ins) {
				//session_destroy();
				//we have to write the code of unset session
                unset($_SESSION['is_login_u']);
                unset($_SESSION['tfname']);
                unset($_SESSION['tuser_u']);

				header("Location: index.php");
    		}
    	}
?>



