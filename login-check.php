<?php 
    // session_start();
    // include('connection.php'); 
    
    // Check whether the user is logged in or not
    if (!isset($_SESSION['user'])) {
        // User session is not set, redirect to the login page
        $_SESSION['no-login-message'] = "<div class='error text-center btn'>Please Login to access the Website.</div>";
        header('location:' . SITEURL . 'login.php');
        exit(); // Stop further execution
    } 
    // else {
    //     // User is logged in, redirect to the formf.php page
    //     header('location:' . SITEURL . 'formf.php');
    //     exit(); // Stop further execution
    // }
?>


