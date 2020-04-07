<?php
    include_once 'dblink_bbi.php';
    ?> 
<?php
    session_start();
    $un=$_SESSION['tuser_a'];
    $sql="select ses_id from active_log_a where log_a_un='$un' ORDER BY ses_id DESC limit 1" ;
    $r_a=mysqli_query($cnt,$sql) or die("Cant fetch data from database. ".mysqli_error($cnt));
    	while ($a=mysqli_fetch_array($r_a)) {
    		$id=$a['0'];
    		$sql_upd="UPDATE active_log_a SET log_a_stp_tim = curtime(), log_a_stp_date = curdate() WHERE ses_id='$id' ";
    		$r_a=mysqli_query($cnt,$sql_upd) or die("Logout Failed. ".mysqli_error($cnt));
    		if ($r_a) {
				//session_destroy();
				//we have to write the code of unset session
				unset($_SESSION['is_login_a']);
                unset($_SESSION['tfname']);
                unset($_SESSION['tuser_a']);
				header("Location: index.php");
    		}
    	}
?>



