<?php include("../config/db.php") ?>
<?php include("../scripts/view_profile.php") ?>
<?php include("../scripts/user_profile.php") ?>

<?php
//This function gets all users data from the profile table and display them on the home.php 
function allUsers(){
    global $connection;
    
    //This query is sent to the mysql database to retrieve data
    $select_query = mysqli_query($connection, "SELECT * FROM profile WHERE user_id != {$_SESSION['id']}");
    
    while($row = mysqli_fetch_array($select_query)){
        $user_id = $row['user_id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $gender = $row['gender'];
        $intro = $row['intro'];
        $img = $row['image'];
        
$users = <<<DELIMETER
    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail">
        
            <a href="../users/user.php?id=$user_id&&$firstname&&$lastname">
                <img class="img-responsive" src="../images/$img">
            </a>
            
            <div class="caption">
                <center>
                    <a href="../users/user.php?id=$user_id&&$firstname&&$lastname">
                        <h4>{$firstname} {$lastname}</h4>
                    </a>
                </center>
            </div>
            
        </div>
    </div>


DELIMETER;
echo $users;
    }
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD APPLICATION - INDEX PAGE</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/custom.css">

</head>

<script>
//First we get the document objct model ready
$(document).ready(function(){
    //We get the id of search button and add a click event listener to the button
    //So when the button is clicked, the function will be executed
    $("#search").click(function(){
        //We get the value of the search input field by getting the id and using the val method to get the value. We then store the result in a variable called search.
        var search = $("#search_input").val();
        
        //This ajax method is used to send the data from the input field to the search.php to be processed
        //Url is the request that is sent to the search.php
        //type is the type of request sent and in this case it is a POST request
        //data is the data sent through the request and it is sent as a javascript object
        //the first search is the key that is sent and the second search is the same search variable that holds the input value.
        //success is the callback function that is executed after the request has been sent
        //but in this case we are not doing anything with it.
        $.ajax({
            url: '../scripts/search.php',
            type: 'POST',
            data: {search: search},
            success: function(data){}
        });
    });
});    
    
</script>


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
    
    <form action="result.php" method="post" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="search" id="search_input" class="form-control" placeholder="Search">
        </div>
        <button type="submit" name="submit" id="search" class="btn btn-default">Search</button>
    </form>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
<?php
//This count variable is from the view_profile.php included at the top of the page
//If the user does not have data in the profile table, the user should see all these links including the link for complete profile. That is if count <= 0
//But if count > 0, that is if the user has updated his profile then the user should see the links in the else statement
            
if($count <= 0){

$profile_links = <<<DELIMETER
<a href="#" style="color: white; background-color:#19aff5;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{$_SESSION['firstname']} <span class="caret"></span>
</a>
    <ul class="dropdown-menu">
        <li><a href="../users/profile.php?firstname={$_SESSION['firstname']}">View Profile</a></li>
        <li><a href="../users/complete-profile.php?firstname={$_SESSION['firstname']}">Complete Profile</a></li>
        <li><a href="../users/edit.php?firstname={$_SESSION['firstname']}">Edit Profile</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
DELIMETER;
echo $profile_links;    
    
}else{
$profile_links2 = <<<DELIMETER

<a href="#" style="color: white; background-color:#19aff5;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{$_SESSION['firstname']} <span class="caret"></span>
</a>
    <ul class="dropdown-menu">
        <li><a href="../users/profile.php?firstname={$_SESSION['firstname']}">View Profile</a></li>
        <li><a href="../users/edit.php?firstname={$_SESSION['firstname']}">Edit Profile</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

DELIMETER;
echo $profile_links2;
}
          
?>      
        </li>
        
      </ul>
    </div>
    
  </div>
</nav>

<div class="container">
    <div class="row">
        
        <div class="col-md-3">
            <?php
            //Similarly if the user has not data in the profile table, the user should see only the first name, last name, an icon for image and a button to take the user to the complete profile page
                if($count <= 0){
                    echo "<div class='col-sm-10 col-md-10 col-lg-10'>
                                <center>
                                    <h3 style='font-weight:bold;'>$user_firstname $user_lastname</h3>

                                    <a href='../users/profile.php?id=$id&&$firstname&&$lastname'>
                                        <span class='fa fa-user fa-5x' style='font-size:10em;' aria-hidden='true'></span>
                                    </a>
                                </center><br>
                                <a href='../users/complete-profile.php' class='btn btn-block btn-primary'>Complete Your Profile</a>
                            </div>";
                }else{
                    //But if count > 0 the user should see this
                    echo "<div class='col-sm-10 col-md-10 col-lg-10 clearfix'>
                                <center class='thumbnail' style='border:none'>
                                    <h3 style='padding-left:; font-weight:bold;'>Hi, $firstname $lastname</h3>
                                    <a href='../users/profile.php?id=$user_id&&$firstname&&$lastname''>
                                        <img src='../images/$user_image' />
                                    </a>
                                </center><br>
                                <a href='../users/profile.php' class='btn btn-block btn-primary'>View Your Profile</a>
                            </div>";
                }
            
            ?>
        </div>
        
        <div class="col-md-9">
<!--            Boottrap corousel to display sliders-->
            <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="../images/slider1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../images/slider1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../images/slider1.jpg" alt="">
                                </div>
                            </div>

                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div><br>
                
                <h3 class="text-center">All Users</h3>
                <div class="row" style="margin-bottom: 150px">
<!--                   This is where the function is called-->
                    <?php allUsers(); ?>
                </div>
            
            
        </div>
        
    </div>
    
</div>   


<?php include("footer.php"); ?>
</body>
</html>