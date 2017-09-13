<?php include("../config/db.php") ?>
<?php include("../scripts/reset_pass.php"); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RESET PASSOWRD</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/custom.css">

</head>

<body>
<nav class="navbar" style="background-color: #19aff5;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand crud" href="../index.php">CRUD SYSTEM</a>
    </div>
    
  </div>
</nav>

<div class="container">
    <div class="row" style="text-align:center;">
        <h3>RESET PASSWORD</h3>
    </div>
    
    <div class="row sub_msg">
        <p>Please Enter Your New Password</p>
    </div>
    
    <div class="row signup">
<!--       The global variables that holds all alert messages are echoed here with php-->
       <?php echo $error; ?>
       <?php echo $update_good; ?>
       <?php echo $fail_update; ?>
       <?php echo $empty_update; ?>
       <?php echo $confirm_error; ?>
        
        
        <!--This is the form that allows the user to update their password-->
<!--        The php script responsible for this is included at the top of the page which is reset_pass.php-->
        <form action="" method="post" class=".form-horizontal"> 
            
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Password:</label>
               <div class="col-sm-10">
                  <input type="password" name="password" id="password" class="form-control"> 
                  
               </div>
           </div>
           
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Confirm Password:</label>
               <div class="col-sm-10">
                  <input type="password" name="cpassword" id="cpassword" class="form-control"> 
               </div>
           </div>
           
           <div class="row form-group" style="margin: 0px 10px 20px 10px;">
               <div class="col-xs-12">
                  <input type="submit" name="reset" id="reset" class="form-control" value="RESET PASSWORD"> 
               </div>
           </div>
            
        </form>
        
    </div>
    
</div>   


</body>
</html>