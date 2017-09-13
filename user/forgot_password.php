<?php include("../config/db.php") ?>
<?php include("../scripts/forgot_pass.php"); ?>

<!--This is the page where the user enters his email address so as to receive a password reset email-->
<!--The user uses this page only if they want to reset their password-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORGOT PASSOWRD RECOVERY</title>
    
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
        <h3>FORGOT PASSWORD?</h3>
    </div>
    
    <div class="row sub_msg">
        <p>Please Enter Your Email Below</p>
    </div>
    
    <div class="row signup">
       
       <?php echo $info; ?>
       <?php echo $fail; ?>
       <?php echo $error; ?>
        
        
        <form action="" method="post" class=".form-horizontal"> 
            
           <div class="row form-group input_group">
               <label for="" class="col-sm-2">Email:</label>
               <div class="col-sm-10">
                  <input type="text" name="email" id="email" class="form-control"> 
                  <span id="error_Email"></span>
               </div>
           </div>
           
           <div class="row form-group" style="margin: 0px 10px 20px 10px;">
               <div class="col-xs-12">
                  <input type="submit" name="forgot" id="submit" class="form-control" value="SUBMIT"> 
               </div>
           </div>
            
        </form>
        
    </div>
    
</div>   


</body>
</html>