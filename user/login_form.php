<?php include("./scripts/login.php"); ?> 

<!--This form is displayed inside the login tab in the index.php page-->

<div class="container">
    <div class="row" style="text-align:center;">
        <h3>CRUD APPLICATION USER LOGIN</h3>
    </div>
    
    <div class="row sub_msg">
        <p>This is a system that allows users to create, read update and delete information.</p>
    </div>
    
    <div class="row signup">
        <div class="row">
            <h3>Welcome, Please Login</h3>
        </div>
        
        
        <!--This is the login form for the user-->
        <!--The php script for the login functionality is in the login.php and is included at the top of the page-->
        <form action="" method="post" class=".form-horizontal"> 
            <!--The global variables that holds all alert messages are echoed here with php-->         
            <?php echo $error1; ?>
            <?php echo $error2; ?>
            <?php echo $error3; ?>
            <?php echo $error4; ?>
            <?php echo $error5; ?>
            <?php echo $error6; ?>
            
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Email:</label>
               <div class="col-sm-10">
                  <input type="text" name="email_login" id="email_login" class="form-control"> 
                  <span id="error_Email"></span> <!--This span tag with id is used to display the client-side error from the custom validation. Same with the others-->
               </div>
           </div>
           
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Password:</label>
               <div class="col-sm-10">
                  <input type="password" name="password_login" id="password_login" class="form-control"> 
                  <span id="error_Password"></span>
               </div>
           </div>
           
           <div class="row form-group" style="margin: 0px 10px 20px 10px;">
               <div class="col-xs-12">
                  <input type="submit" name="login" id="log_in" class="form-control" value="LOGIN"> 
               </div>
           </div>
            
        </form>
        
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="./user/forgot_password.php">Forgot Password?</a>
            </div>
        </div>
        
    </div>
    
</div>