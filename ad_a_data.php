<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Admin Name</th>
        <th>Contact no.</th>
        <th>E-Mail</th>
        <th>log_a_un</th>
        <th>log_a_pass</th>
        <th>Account Status</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>

      <?php
      $sql="select * from log_a_info";
      $md=mysqli_query($cnt,$sql) or die("Can not fetch data from database ".mysqli_error($cnt));
                        
                        
if(mysqli_num_rows($md)>0){ 
    
    
      while($r=mysqli_fetch_array($md))
      {
          ?>
       <tbody>
<tr>
        <td><?php echo $r['1'] ?></td>
        <td><?php echo $r['2'] ?></td>
        <td><?php echo $r['3'] ?></td>
        <td><?php echo $r['4'] ?></td>
        <td><?php echo $r['5'] ?></td>
        <td><?php echo $r['6'] ?></td>
<!-- edit, close -->
  <?php
        $sts=$r['6'];
if ($sts=='open') {
  ?>
        <td>
<a href="upd_ad.php?upd=<?php echo $r['log_a_id'] ?>" class="btn btn-sm btn-warning" >Update</a>
        </td> 

  <td>
<a href="cls_ad.php?cls=<?php echo $r['log_a_id'] ?>" class="btn btn-sm btn-danger">close</a>
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