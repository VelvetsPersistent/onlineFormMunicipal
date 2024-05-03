<?php include ('../connection.php'); ?>
<html>
    <head>
        <title>Belbari Municipality - Admin Login</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>
        
        <div class="login">
            <h1 class="text-center">Admin - Login</h1></br>

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
                    <input type="text" name="username" class="btn "  placeholder="  Enter username">
                
            </br></br>
                
                    Password :
                    <input type="password" name="password" class="btn "  placeholder="  Enter password">
                
            </br></br>
                
                    <input type="submit" name="submit" value=" Login " class=" btn btn-primary"></input>
                
            </br></br>
            <!-- login form ends here -->

            <p class="text-center ">Site Owned By - <a href="../index.php" target="_blank">Belbari Municipality - Home</a></p>

        </div>

    </body>
</html>

<?php 
        //check whether the user is logged in or not
        if(isset($_POST['submit']))
        {
            //Process for Login
            //1. Get the username and password from the form
              $username = $_POST['username'];
              $password = $_POST['password'];
            //2. Check whether the user is valid or not in sql
            $sql = "SELECT * FROM tbl_admin WHERE username ='$username' AND password ='$password'";

            //3. If the user is valid, redirect to the admin page. Execcute the Query
            $res = mysqli_query($conn, $sql);

            //4. If the user is not valid, redirect to the login page. count rows
            $count = mysqli_num_rows($res);
            if($count == 1)
            {
                //user available and login successfully
                $_SESSION['login'] = "<div class='success text-center btn'>Login Successfully.</div>";
                $_SESSION['user'] = $username; // to check whether user is logged in or not and logout will unset it
                //redirect to admin page
                header('location:'.SITEURL.'admin/');
            }
            else
            {
                //user not available
                $_SESSION['login'] = "<div class='error text-center btn'>Invalid Username or Password</div>";
                //redirect to login page
                header('location:'.SITEURL.'admin/login.php');
            }

        }


?>