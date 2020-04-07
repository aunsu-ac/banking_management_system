<?php
    include_once 'dblink_bbi.php';
?> 
<?php
// for cnttact data insert
    if((isset($_POST['btn']))){
        $msg ="";
        $fullname = mysqli_real_escape_string($cnt,trim($_POST['fullname']));
        $phone = mysqli_real_escape_string($cnt,trim($_POST['phone']));
        $email = mysqli_real_escape_string($cnt,trim($_POST['email']));
        $username = mysqli_real_escape_string($cnt,trim($_POST['username']));
        $password = mysqli_real_escape_string($cnt,trim($_POST['password']));
         
       
        $fullname_valid = $phone_valid = $email_valid = $password_valid = $username_valid = false;


        //Check Fullname
        if(!empty($fullname)){            
            if(strlen($fullname) > 2 && strlen($fullname) <= 30){
                if(!preg_match('/[^a-zA-Z\s]/', $fullname)){

                    // All Test Passed !!
                    $fullname_valid = true;                 

                }else { /*Invalid Characters --> */ $msg .= "Fullname can contains only alphabets <br>"; }
            } else { /* Invalid Length --> */ $msg .= "Fullname must be between 2 to 30 chars long. <br>"; }
        } else { /* Blank Input --> */ $msg .= "Fullname can not be blank !! <br>";}
            

        //Check Phone no
        if(!empty($phone)){            
            if(strlen($phone) >= 10 && strlen($phone) <= 14){
                if(!preg_match('/[^\d]/', $phone)){

                    // All Test Passed !!
                    $phone_valid = true;                

                }else { /*Invalid Characters --> */ $msg .= "Phone no contents only digits <br>"; }
            } else { /* Invalid Length --> */ $msg .= "phone no must be between 10 to 14 chars long. <br>"; }
        } else { /* Blank Input --> */ $msg .= "Phone no can not be blank !! <br>";}

        //Check Email
        if(!empty($email)){            
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){                

                    // All Test Passed !!
                    $email_valid = true;
                
            } else { /* Invalid Email --> */ $msg .= $email." is an Invalid Email Address. <br>"; }
        } else { /* Blank Input --> */ $msg .= "email can not be blank !! <br>";}

        //Check Username
        if(!empty($username)){            
            if(strlen($username) >= 4 && strlen($username) <= 15){
                if(!preg_match('/[^a-zA-Z\d_.]/', $username)){
    $sqlc="select * from log_a_info where log_a_un='$username' ";
    $rc=mysqli_query($cnt,$sqlc);
    if(mysqli_num_rows($rc)>0)
    {
        $msg .=  "There are already a user as same username!";
    }
    else
    {
                    // All Test Passed !!
                    $username_valid = true;                
    }
                }else { /*Invalid Characters --> */ $msg .= "Username can contents alphabets,digits,underscore '_' and period '.' symbols <br>"; }
            } else { /* Invalid Length --> */ $msg .= "Username must be between 2 to 15 chars long. <br>"; }
        } else { /* Blank Input --> */ $msg .= "Username can not be blank !! <br>";}


        //Check Password
        if(!empty($password)){            
            if(strlen($password) >= 5 && strlen($password) <= 15){
                    
                    // All Test Passed !!
                    $password_valid = true;
                
            } else { /* Invalid Length --> */ $msg .= $password." = password must be between 5 to 15 chars long. <br>"; }
        } else { /* Blank Input --> */ $msg .= "Password can not be blank !! <br>";}

               
        if($fullname_valid = $phone_valid = $email_valid = $password_valid = $username_valid){

                //echo $fullname.$phone.$email.$username.$password ;
            $query = "INSERT INTO log_a_info(log_a_name,log_a_con,log_a_eml,log_a_un,log_a_pass) VALUES('$fullname','$phone','$email','$username','$password')";
            $fire = mysqli_query($cnt,$query) or die("Can not insert data into database. ".mysqli_error($cnt));
            if($fire) {                
                $msg = "Data Submitted to Database.";
                header("Location: login_a.php?msg=".$msg);
            }
        }else{
                header("Location: sign_up_a.php?msg=".$msg);
        }
        
    }
    ?>