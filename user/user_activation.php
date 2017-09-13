<?php include("../config/db.php"); ?>
<?php include("../scripts/activate.php"); ?>


<!--This is the page that will be displayed after the user successfully activates his account-->
<!--In other words, when the user clicks on the activation link sent to his email, the user will be taken to this page-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>USER ACTIVATION</title>
    
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
      <a class="navbar-brand crud" href="#">CRUD SYSTEM</a>
    </div>
    
  </div>
</nav>
   
<div class="container">
   <div class="row text=center" >
       <?php echo $update_good; ?>
       <?php echo $good_update; ?>
       <?php echo $error; ?>
   </div>
   
   
    <div class="row sub_msg">
        <p>Click on the button to go to the login page.</p>
    </div>
    
    <div class="row signup">
       <div class="row" style="margin-bottom:20px;">
           <h3><a href="../index.php" class="btn btn-primary">CLICK HERE TO LOGIN</a></h3>
       </div>
        
    </div>
    
</div>
    
</body>
</html>