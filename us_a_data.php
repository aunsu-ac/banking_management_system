<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Account no</th>
        <th>Fullname</th>
        <th>contact no.</th>
        <th>Balence</th>
        <th>Account status</th>
        <th colspan="3">Action</th>
      </tr>
    </thead>

      <?php
      $sql="select * from log_u_info";
      $md=mysqli_query($cnt,$sql) or die("Can not fetch data from database ".mysqli_error($cnt));
                        
                        
if(mysqli_num_rows($md)>0){ 
    
    
      while($r=mysqli_fetch_array($md))
      {
          ?>
       <tbody>
<tr>
        <td>h5g5v1<?php echo $r['0'] ?></td>
        <td><?php echo $r['1'] ?></td>
        <td><?php echo $r['6'] ?></td>
        <td><?php echo $r['10'] ?></td>
        <td><?php echo $r['11'] ?></td>
<!-- show admin -->
      <td>
<a href="shw_a_us.php?shw=<?php echo $r['log_u_id'] ?>" class="btn btn-sm btn-primary">Show User</a>
      </td>
<!-- edit, close -->
  <?php
        $sts=$r['11'];
if ($sts=='open') {
  ?>
        <td>
<a href="upd_a_us.php?upd=<?php echo $r['log_u_id'] ?>" class="btn btn-sm btn-warning" >Update</a>
        </td>        
        <td>
<a href="cls_a_us.php?cls=<?php echo $r['log_u_id'] ?>" class="btn btn-sm btn-danger">close Account</a>
        </td>
        <?php
}
        ?>    
         
        
</tr>
   </tbody>
<?php
        }      
        }
    else{ ?>
<tr>
<td colspan="5" class="text-center">
<h2 class="text-muted">There is No Data to Show !!</h2>
</td>
</tr>      
    <?php } ?>

      
  </table>
</div>