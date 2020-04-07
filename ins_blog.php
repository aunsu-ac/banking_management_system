<?php
//session_start();
    //require 'dblink_bbi.php';
?>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
    <div class="imgcontainer" align="left">
        <label for="image">Please select your image: </label>
      <img id="img_p" src="images/1.png" alt="Avatar" class="avatar">
      <input type="file" id="img" name="img" accept=".jpg,.jpeg,.png" onchange="PreviewImage();">
    </div>
</div> 
        <div class="form-group">
            <input type="text" name="sub" class="form-control" placeholder="Enter the Subject of the Blog" required>
        </div>
        <div class="form-group">
            <textarea name="blog" cols="50" rows="10" class="form-control" placeholder="This blog must be 255 characters including Space"></textarea>
        </div>
        <div class="form-group">
            <button name="btn" value="insBlog" class="btn btn-info">Submit Blog</button>
        </div>
    </form>
        <?php
          if(isset($_POST['btn']))
{  
    $un=$_SESSION['tuser_a'];
    $sqlc="select * from log_a_info where log_a_un='$un' ";
    $r=mysqli_query($cnt,$sqlc);
    while ($a=mysqli_fetch_array($r)) 
    {           
                $n=$a['log_a_name'];
                $sub=$_POST['sub'];
                $cont=$_POST['blog'];
                $uname=$un;

                $img_name=$_FILES['img']['name'];
                $img_tmp=$_FILES['img']['tmp_name'];

                $dir='uploads/';
                $t_file=$dir.$img_name;

                move_uploaded_file($img_tmp,$t_file);

                $sql="INSERT INTO log_blog (log_a_name,log_a_un, log_blog_sub,log_blog_data,log_blog_img, log_blog_time,log_blog_date) VALUES('$n','$uname','$sub','$cont','$t_file',curtime(),curdate())";

                $r=mysqli_query($cnt,$sql);
                if($r==1)
                    header("Location: show_blog.php");
                else if($r==0)
                {
                    $msg = "Failed to Upload the blog";
                    //header("Location: blog_ins_a.php?msg=".=$msg);
                    header("Location: blog_ins_a.php?msg=".$msg);
                    }
    }
}
        ?>