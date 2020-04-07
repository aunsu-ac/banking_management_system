<?php
    include_once 'dblink_bbi.php';
    ?> 
    <center>
<?php
// for contact data insert
    if((isset($_POST['btnu']))){
        $msg ="";
        $fullname = mysqli_real_escape_string($cnt,trim($_POST['name']));
        $fatn = mysqli_real_escape_string($cnt,trim($_POST['fname']));
        $add = mysqli_real_escape_string($cnt,trim($_POST['add']));
        $dob = mysqli_real_escape_string($cnt,trim($_POST['dob']));
        $gender = mysqli_real_escape_string($cnt,trim($_POST['gender']));
        $phone = mysqli_real_escape_string($cnt,trim($_POST['con']));
        $email = mysqli_real_escape_string($cnt,trim($_POST['email']));
        $username = mysqli_real_escape_string($cnt,trim($_POST['tuser']));
        $password = mysqli_real_escape_string($cnt,trim($_POST['tpass']));
       
        $fullname_valid = $fatn_valid = $phone_valid = $email_valid = $password_valid = $username_valid = false;


        //Check Fullname
        if(!empty($fullname)){            
            if(strlen($fullname) > 2 && strlen($fullname) <= 30){
                if(!preg_match('/[^a-zA-Z\s]/', $fullname)){
                    $sqlc="select * from log_u_info where log_u_name='$fullname' ";
                    $rc=mysqli_query($cnt,$sqlc);
                    if(mysqli_num_rows($rc)>0)
                    {
                        $msg .=  "There are already a user as same Fullname!";
                    }else{
                            // All Test Passed !!
                            $fullname_valid = true;                 
                    }
                }else { /*Invalid Characters --> */ $msg .= "  Fullname can contain only alphabets <br>"; }
            } else { /* Invalid Length --> */ $msg .= " Fullname must be between 2 to 30 chars long. <br>"; }
        } else { /* Blank Input --> */ $msg .= " Fullname can not be blank !! <br>";}

        //Check Father name
        if(!empty($fatn)){            
            if(strlen($fatn) > 2 && strlen($fatn) <= 30){
                if(!preg_match('/[^a-zA-Z\s]/', $fatn)){

                    // All Test Passed !!
                    $fatn_valid = true;                 

                }else { /*Invalid Characters --> */ $msg .= "Father name can contain only alphabets <br>"; }
            } else { /* Invalid Length --> */ $msg .= "Father name must be between 2 to 30 chars long. <br>"; }
        } else { /* Blank Input --> */ $msg .= "Fullname can not be blank !! <br>";}

        //Check Email
        if(!empty($email)){            
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){                

                    // All Test Passed !!
                    $email_valid = true;
                
            } else { /* Invalid Email --> */ $msg .= $email."is an Invalid Email Address. <br>"; }
        } else { /* Blank Input --> */ $msg .= "email can not be blank !! <br>";}

        //Check Phone no
        if(!empty($phone)){            
            if(strlen($phone) > 9 && strlen($phone) <= 14){
                if(!preg_match('/[^\d]/', $phone)){

                    // All Test Passed !!
                    $phone_valid = true;                

                }else { /*Invalid Characters --> */ $msg .= "Phone no contents only digits <br>"; }
            } else { /* Invalid Length --> */ $msg .= "phone no must be 10 numbers long. <br>"; }
        } else { /* Blank Input --> */ $msg .= "Phone no can not be blank !! <br>";}

        //Check Username
        if(!empty($username)){            
            if(strlen($username) >= 4 && strlen($username) <= 15){
                if(!preg_match('/[^a-zA-Z\d_.]/', $username)){

                    // All Test Passed !!
                    $username_valid = true;                

                }else { /*Invalid Characters --> */ $msg .= "Username can contain alphabets,digits,underscore '_' and period '.' symbols <br>"; }
            } else { /* Invalid Length --> */ $msg .= "Username must be between 2 to 15 chars long. <br>"; }
        } else { /* Blank Input --> */ $msg .= "Username can not be blank !! <br>";}

        //Check Password
        if(!empty($password)){            
            if(strlen($password) >= 5 && strlen($password) <= 15){
                    
                    // All Test Passed !!
                    $password_valid = true;              
            } else { /* Invalid Length --> */ $msg .= $password." = password must be between 5 to 15 chars long. <br>"; }
        } else { /* Blank Input --> */ $msg .= "Password can not be blank !! <br>";}
  

        if($fullname_valid = $fatn_valid = $phone_valid = $email_valid = $password_valid = $username_valid){

            $query = "INSERT INTO log_u_info(log_u_name,log_u_fname,log_u_add,log_u_dob,log_u_gen,log_u_con,log_u_eml,log_u_un,log_u_pass) VALUES('$fullname','$fatn','$add','$dob','$gender','$phone','$email','$username','$password')";
            $fire = mysqli_query($cnt,$query) or die("Can not insert data into database. ".mysqli_error($cnt));

            if($fire) {                
                // transection code start
                $sql_trnc = "INSERT INTO log_u_tranc(log_u_name,log_u_un,log_u_dep,log_u_time,log_u_date) VALUES('$fullname','$username','1000',curtime(),curdate())";
                $r_t = mysqli_query($cnt,$sql_trnc) or die("Can not insert data into database. ".mysqli_error($cnt));
                
                if ($r_t) {
                
                $msg = "Sign up successfully.";
                header("Location: login_u.php?msg=".$msg);

                }else{
                    echo "Sign up failed";
                }
            }
        }else{
                header("Location: sign_up.php?msg=".$msg);
        }
    }
    ?>

</center>