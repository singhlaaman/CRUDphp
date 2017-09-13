<?php include("/admin_scripts/admin.php"); ?>

<div class="container">
    <div class="row" style="text-align:center;">
        <h3>CRUD APPLICATION ADMIN LOGIN</h3>
    </div>
    
    
    <div class="row signup">
        <div class="row">
            <h3>Welcome Admin, Please Login</h3>
        </div>
        
        
        <form action="" method="post" class=".form-horizontal"> 
           
           <?php echo $error1 ?>
           <?php echo $error2 ?>
            
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Email:</label>
               <div class="col-sm-10">
                  <input type="text" name="admin_email" id="admin_email" class="form-control"> 
               </div>
           </div>
           
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Password:</label>
               <div class="col-sm-10">
                  <input type="password" name="admin_password" id="admin_password" class="form-control"> 
               </div>
           </div>
           
           <div class="row form-group" style="margin: 0px 10px 20px 10px;">
               <div class="col-xs-12">
                  <input type="submit" name="admin_login" id="admin_btn" class="form-control" value="LOGIN"> 
               </div>
           </div>
            
        </form>
        
<!--
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="./user/forgot_password.php">Forgot Password?</a>
            </div>
        </div>
-->
        
    </div>
    
</div>