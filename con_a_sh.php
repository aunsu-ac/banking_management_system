<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Contact no.</th>
        <th>E-Mail</th>
      </tr>
    </thead>

      <?php
      $sql="select * from con_tab";
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
        <td>
<a href="upd_con.php?upd=<?php echo $r['0'] ?>" class="btn btn-sm btn-warning" >Update</a>
        </td>

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