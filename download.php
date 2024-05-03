<?php
    include("connection.php");
    include ('login-check.php'); 
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
<!-- Download section Starts here -->
<section class="container text-center">   
</section>

<?php
// Define the directory where the files are stored
$directory = 'files/';

// Scan the directory for files
$files = scandir($directory);

// Remove "." and ".." from the list
$files = array_diff($files, array('.', '..'));

// Check if there are any files in the directory
if (count($files) > 0) {
    // Display a title within the section
    echo '<section class="container text-center">';
    echo '<h2>Available Files for Download:</h2><br>';
    
    // Initialize a counter for the serial number
    $serialNumber = 1;
    
    // Loop through the files and create download links
    echo '<ul>';
    foreach ($files as $file) {
        // Display the serial number and increment it
        echo '<li>' . $serialNumber . '. ' . $file . '&nbsp;&nbsp;';
        // Download button
        echo '<a href="' . $directory . $file . '" download><button>Download</button></a>&nbsp;&nbsp;';
        // View Online button
        echo '<a href="' . $directory . $file . '" target="_blank"><button>View Online</button></a></li><br>';
        $serialNumber++;
    }
    echo '</ul>';
    echo '</section>';
} else {
    echo '<section class="container text-center">';
    echo '<p>No files available for download.</p>';
    echo '</section>';
}
?>




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