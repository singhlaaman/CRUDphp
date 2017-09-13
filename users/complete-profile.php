<?php include("../config/db.php") ?>
<?php include("../scripts/user_profile.php") ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD APPLICATION - INDEX PAGE</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/custom.css">

</head>

<body>
<nav class="navbar" style="background-color: ; margin-bottom: 0; border-radius:0;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand crud" style="color: black !important;" href="../user/home.php">CRUD SYSTEM</a>
    </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" style="color: black ; background-color:white;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['firstname']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../users/profile.php?firstname=<?php echo $_SESSION['firstname']; ?>">View Profile</a></li>
            <li><a href="../users/edit.php?firstname=<?php echo $_SESSION['firstname']; ?>">Edit Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../user/logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    
  </div>
</nav>

<div class="jumbotron jumbo">
    <h2 class="text-center" style="font-size:70px; font-weight: 600;">Welcome <?php echo $_SESSION['firstname']; ?></h2>
    <h4 class="text-center" style="font-size: 30px;">(Complete Your profile)</h4>
</div>

<div class="container">
    <br>
    <h1 class="text-center">FILL IN YOUR DETAILS TO COMPLETE YOUR PROFILE</h1>
    <br>
    
    <div class="row" style="border: 1px solid #e7e7e7;">
       <div class="col-sm-12">
          
          <?php echo $msg; ?>
          
           <form action="" method="post" enctype="multipart/form-data">
               <div class="form-group">
                   <label for="" class="control-label">Profile Image</label>
                   <img src="http://placehold.it/150x150" alt=""><br><br>
                   <input type="file" class="form-control" name="image">
               </div><br>
               
               <div class="row">
                   <div class="col-sm-6">
                       <label for="" class="control-label">Firstname</label>
                       <input type="text" class="form-control" name="firstname" value="<?php echo $user_firstname; ?>">
                   </div>
                   
                   <div class="col-sm-6">
                       <label for="" class="control-label">Lastname</label>
                       <input type="text" class="form-control" name="lastname" value="<?php echo $user_lastname; ?>">
                   </div>
               </div><br>
               
               <div class="row">
                   <div class="col-sm-6 form-group">
                       <label for="" class="control-label">Email</label>
                       <input type="text" class="form-control" name="email" value="<?php echo $user_email; ?>">
                   </div>
                   
                   <div class="col-sm-6 form-group">
                       <label for="" class="control-label">Gender</label>
                       <select name="gender" id="gender" class="form-control">
                           <option value="">Select Gender</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                       </select>
                   </div>
               </div><br>
               
               <div class=" form-group">
                   <label for="" class="control-label">Short Quote</label>
                   <textarea name="quote" class="form-control" id="" cols="30" rows="10"></textarea>
               </div><br>
               
               <div class=" form-group">
                   <label for="" class="control-label">About Me</label>
                   <textarea name="intro" class="form-control" id="" cols="30" rows="10"></textarea>
               </div><br>
               
               <div class="form-group">
                   <input type="submit" name="submit" class="form-control btn btn-primary" value="SUBMIT">
               </div>
               
           </form>
       </div>
        
    </div>
    
</div>   

<?php include("../user/footer.php"); ?>
</body>
</html>