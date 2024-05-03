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
            <h1 class="text-center">User - Login</h1></br>

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

            <!-- login form starts here -->
            <form action="" method="POST" class="text-center">
                
                    Username: 
                    <input type="text" name="username" class="btnl "  placeholder="  Enter username">
                
            </br></br>
                
                    Password :
                    <input type="password" name="password" class="btnl "  placeholder="  Enter password">
                
            </br></br>
                
                    <input type="submit" name="submit" value=" Login " class=" btns btn-primary"></input>
                
            </br></br>
            <!-- login form ends here -->
            <!-- Create new account button -->
            <div class="text-center small-text">
                <p>Not a User? <a href="signup.php" class="btn btn-secondary small-text">Sign Up</a></p>
            </div>
            <br>
            <p class="text-center ">Site Owned By - <a href="index.php">Belbari Municipality</a></p>
            <p class="text-center ">Site Owned By - <a href="admin/index.php" target="_blank">Belbari Municipality - Admin Panel</a></p>

        </div>

</body>

</html>

<!-- Login Frontend Code ends here -->

<!-- PHP - Login backend Code starts here -->

<?php 
        //check whether the user is logged in or not
        if(isset($_POST['submit']))
        {
            //Process for Login
            //1. Get the username and password from the form
              $user_input = $_POST['username'];
              $password = $_POST['password'];
            //2. Check whether the user is valid or not in sql
            $sql = "SELECT * FROM tbl_user WHERE username ='$user_input' AND password ='$password'";
           


            //3. If the user is valid, redirect to the admin page. Execcute the Query
            $res = mysqli_query($conn, $sql);

            //4. If the user is not valid, redirect to the login page. count rows
            $count = mysqli_num_rows($res);
            if($count == 1)
            {
                //user available and login successfully
                $_SESSION['login'] = "<br><div class='success text-center btn'>Login Successfully.</div>";
                $_SESSION['user'] = $user_input; // to check whether user is logged in or not and logout will unset it
                //redirect to admin page
                header('location:'.SITEURL.'index.php');
            }
            else
            {
                //user not available
                $_SESSION['login'] = "<div class='error text-center btn'>Invalid Username or Password</div>";
                //redirect to login page
                header('location:'.SITEURL.'login.php');
            }

        }


?>


