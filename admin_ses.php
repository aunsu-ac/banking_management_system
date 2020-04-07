<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>fullname</th>
        <th>Username</th>
        <th>Session start time</th>
        <th>Session start date</th>
        <th>Session stop time</th>
        <th>Session stop date</th>
      </tr>
    </thead>

      <?php
      $sql="select * from active_log_a order by ses_id desc";
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
</tr>
   </tbody>
<?php
        }      
        }
    else{ ?>
<tr>
<td colspan="6" class="text-center">
<h2 class="text-muted">There is No Data to Show !!</h2>
</td>
</tr>      
    <?php } ?>

      
  </table>
</div>