<?php
    // session_start();
    include ('connection.php'); 
 ?>
<html>
    <head>
        <title>Login - Belbari Municipality</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="font/kalimati.otf">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <div class="login">
            <h1 class="text-center">User - Sign Up</h1></br>

            <?php 
            if(isset($_SESSION['login']))
            {
              echo $_SESSION['login'];    //Displaying Session Message
              unset($_SESSION['login']); //Removing Session Message
                
            }
           
            if(isset($_SESSION['no-login-message']))
            {
              echo $_SESSION['no-login-message'];    //Displaying Session Message
              unset($_SESSION['no-login-message']); //Removing Session Message
                
            }
            ?>
            </br>

            <!-- Sign up form starts here -->
            <form action="" method="POST" class="text-center">
                
                    Full Name : 
                    <input type="text" name="fullname" class="btnl "  placeholder="  Enter your full name">
                
            </br></br>
            <form action="" method="POST" class="text-center">
                
                    User Name : 
                    <input type="text" name="username" class="btnl "  placeholder="  Enter username">
                
            </br></br>
                
                    Password :
                    <input type="password" name="password" class="btnl "  placeholder="  Enter password">
                
            </br></br>
                    User Email : 
                    <input type="text" name="email" class="btnl "  placeholder="  Enter your email">
                
            </br></br>
                    Phone No. : 
                    <input type="text" name="phoneno" class="btnl "  placeholder="  Enter phone number">
                
            </br></br>
                
                    <input type="submit" name="submit" value=" Sign up " class=" btns btn-primary"></input>
                
            </br></br>
            <!-- login form ends here -->
            <!-- Already had an account -->
            <div class="text-center small-text">
                <p>Already a User? <a href="login.php" class="btn btn-secondary small-text">Login</a></p>
            </div>
            <br>

            <p class="text-center ">Site Owned By - <a href="index.php">Belbari Municipality</a></p>
            <p class="text-center ">Site Owned By - <a href="admin/index.php" target="_blank">Belbari Municipality - Admin Panel</a></p>

        </div>

</body>

</html>

<!-- Signup Frontend Code ends here -->

<!-- PHP - Signup backend Code starts here -->

<?php

    // Check if the form is submitted
    if(isset($_POST['submit'])) {
        // Get form data
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];

        // Check if the username or email already exists in the database
        $check_query = "SELECT * FROM tbl_user WHERE username = '$username' OR email = '$email'";
        $check_result = mysqli_query($conn, $check_query);

        // If the username or email already exists, display an error message
        if(mysqli_num_rows($check_result) > 0) {
            $_SESSION['login'] = "<div class='error text-center btn'>Username or Email already exists!</div>";
            header('location: signup.php');
            exit(); // Stop further execution
        } else {
            // Insert user data into the database
            $insert_query = "INSERT INTO tbl_user (fullname, username, password, email, phoneno) 
                             VALUES ('$fullname', '$username', '$password', '$email', '$phoneno')";
            $insert_result = mysqli_query($conn, $insert_query);

            // Check if the user data is inserted successfully
            if($insert_result) {
                $_SESSION['login'] = "<div class='success text-center btn'>Signup Successful!</div>";
                header('location: login.php');
                exit(); // Stop further execution
            } else {
                $_SESSION['login'] = "<div class='error text-center btn'>Signup Failed!</div>";
                header('location: signup.php');
                exit(); // Stop further execution
            }
        }
    }
?>