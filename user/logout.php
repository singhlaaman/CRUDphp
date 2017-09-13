<!--First we start a session using the session_start() method-->
<!--When the logout button is clicked, all the sessions that are set when the user logs in are all set to null-->
<!--The sessions are set inside the login.php file-->


<?php session_start(); ?>


<?php
    $_SESSION['id'] = null;
    $_SESSION['firstname'] = null;
    $_SESSION['lastname'] = null;
    $_SESSION['email'] = null;
    $_SESSION['activation_key'] = null;

    //The the user should be redirected to the index.php page and shown the login tab
    header("Location: ../index.php#login");

?>