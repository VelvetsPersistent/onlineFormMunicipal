 <?php
        // Include connection.php to establish a database connection
        include('connection.php');
        include('login-check.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>इजाजतपत्रको लागि दिईने दरखास्त</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="font/kalimati.otf">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header>  
        <div class="head-flex">
        <a href="#"><img src="img/logo.png" class="logo"></a>
        
            <h4 class="header-text" >बेलबारी नगरपालिका, नगर कार्यपालिकाको कार्यालय<br>
                कोशी प्रदेश, मोरङ , नेपाल</h4>
        
        <a href="#"><img src="img/flag.gif" class="flag"></a>
        </div>
        <!-- Loading page going to new page -->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="formf.php">Forms</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="download.php">Downloads</a></li>
            <li><a href="uprofile.php" class="username">Welcome, <?php echo $_SESSION['user']; ?></a></li>
            <li><a href="logout.php" class='btn1'>Logout</a></li>          
        </ul>
        <!-- Loading page without reload -->
       

    </header>
    <div class=emptyspace>
        this is empty space 
             
    </div>  


     <br>
    

    <div class="container text-center uprofile">
        <h2>User Profile</h2>        
        <h3>Still developing ...</h3>        
        <!-- Display user details -->
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="user-details">
            <div class="row">
                <div class="label">Username:</div>
                <!-- <div class="value"><?php echo $username; ?></div> -->
                <div class="value"><input type="text" name="username" value="<?php echo $username; ?>"></div>
            </div>
            <div class="row">
                <div class="label">Full Name:</div>
                <div class="value"><input type="text" name="fullname" value="<?php echo $fullname; ?>"></div>
            </div>
            <div class="row">
                <div class="label">Email:</div>
                <div class="value"><input type="text" name="email" value="<?php echo $email; ?>"></div>
            </div>
            <div class="row">
                <div class="label">Phone Number:</div>
                <div class="value"><input type="text" name="phoneno" value="<?php echo $phoneno; ?>"></div>
            </div>
            
            <br>
            <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update User" class="btn-secondary">
                    </td>
                </tr>
            
        </div>
        
        </form>
        <!-- Update User Form End -->

    
    </div>



  


    
    
    <script src="script.js"></script>
    <!-- <div id="form-container"></div> -->

       








<!-- social Section Starts Here -->
<section class="social">
<hr>
    <div class="container text-center">
    <div class="social-links">
        <a href="https://www.facebook.com/">
        <li class="fa fa-facebook"></li></a>
        <a href="https://www.instagram.com/">
        <li class="fa fa-instagram"></li></a>
        <a href="https://www.twitter.com/">
        <li class="fa fa-twitter"></li></a>
        <a href="https://www.youtube.com/">
        <li class="fa fa-youtube"></li></a>
    </div>
    </div>
</section>
<!-- social Section Ends Here -->

<!-- footer Section Starts Here -->

<section class="footer">
    <div class="container text-center">
        <p>
            Copyright © 2080 <a href="#" style="color: #a0c0fd;">Belbari Municipality</a> All Rights Reserved.
        </p>
    </div>
</section>
<!-- footer Section Ends Here -->
</body>

</html>







