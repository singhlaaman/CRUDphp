<?php 
    global $connection;
    global $error1, $error2;

    if(isset($_POST['admin_login'])){
        $admin_email = $_POST['admin_email'];
        $admin_password = $_POST['admin_password'];
        
        $email = mysqli_real_escape_string($connection, $admin_email);
        $pass = mysqli_real_escape_string($connection, $admin_password);
        
        $select_query = "SELECT * FROM admin_login WHERE email = '{$email}'";
        $query = mysqli_query($connection, $select_query);
        
        $row = mysqli_fetch_array($query);
        $email_admin = $row['email'];
        $pass_admin = $row['password'];
        
        if(!empty($admin_email) && !empty($admin_password)){
            
            if($email == $email_admin && $pass == $pass_admin){
                header("Location: ./admin/dashboard.php");
                
                $_SESSION['email'] = $email_admin;
            }else{
                $error1 = "<div class='alert alert-danger email_alert'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            Admin Login Credentials are Invalid.</div>";
            }
            
        }else{
            $error2 = "<div class='alert alert-danger email_alert'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        Email and Password Fields Cannot be Empty.</div>";
        }
    }

?>