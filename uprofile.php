<?php
    // Include connection.php to establish a database connection
    include('connection.php');
    include('login-check.php');


    // Initialize variables
    $fullname = $email = $phoneno = '';

    // Retrieve username from session
    $username = $_SESSION['user'];


    // Check if the form is submitted for updating the user details
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];

        // Query to update user details in the database
        $sql = "UPDATE tbl_user SET fullname='$fullname', email='$email', phoneno='$phoneno' WHERE username='$username'";

        // Execute the query
        $result = mysqli_query($conn, $sql);

        // Check if the query executed successfully
        if ($result) {
            // Redirect to user profile page after successful update
            header("Location: uprofile.php");
            exit();
        } else {
            // Handle database query error
            echo "Error: " . mysqli_error($conn);
            exit();
        }
    }

    // Query to fetch user details from the database
    $sql = "SELECT fullname, email, phoneno FROM tbl_user WHERE username = '$username'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query executed successfully
    if ($result) {
        // Fetch user details as an associative array
        $userData = mysqli_fetch_assoc($result);

        // Check if user data is fetched
        if ($userData) {
            // Store user details in variables
            $fullname = $userData['fullname'];
            $email = $userData['email'];
            $phoneno = $userData['phoneno'];
        }else{
            echo "Please Login";
        }
    } else {
        // Handle database query error
        echo "Error: " . mysqli_error($conn);
        exit();
    }

    // Close database connection
    mysqli_close($conn);
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
      

    </header>
    <div class=emptyspace>
        this is empty space 
             
    </div>  


     <br>
    
    <section>
    <div class="container text-center uprofile">
        <h2>User Profile</h2>        
        <!-- Display user details -->
        <div class="user-details">
            <div class="row">
                <div class="label">Username:</div>
                <div class="value"><?php echo $username; ?></div>
            </div>
            <div class="row">
                <div class="label">Full Name:</div>
                <div class="value"><?php echo $fullname; ?></div>
                <input type="text" class="edit-input" name="fullname" value="<?php echo $fullname; ?>" style="display: none;">
            </div>
            <div class="row">
                <div class="label">Email:</div>
                <div class="value"><?php echo $email; ?></div>
                <input type="email" class="edit-input" name="email" value="<?php echo $email; ?>" style="display: none;">
            </div>
            <div class="row">
                <div class="label">Phone Number:</div>
                <div class="value"><?php echo $phoneno; ?></div>
                <input type="text" class="edit-input" name="phoneno" value="<?php echo $phoneno; ?>" style="display: none;">
            </div>
            
            
                
                <br>
            
                <a href="<?php echo SITEURL; ?>update-profile.php?id=<?php echo $username; ?>"
                        class="btn-secondary">Update Profile</a>



        </div>
    </div>
    </section>



       

    
    
        <script src="script.js"></script>
        <!-- <div id="form-container"></div> -->

       



    <!-- <hr> -->
    <br>




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







