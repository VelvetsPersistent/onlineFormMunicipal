<?php
    include("connection.php");
    include ('login-check.php'); 
?>
        

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>बेलबारी नगरपालिका, नगर कार्यपालिकाको कार्यालय</title>
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
            <!-- <li><a href="#" onclick="loadForm()">Forms</a></li> -->
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="download.php">Downloads</a></li>
            <li><a href="uprofile.php" class="username">Welcome, <?php echo $_SESSION['user']; ?></a></li>
            <li><a href="logout.php" class='btn1'>Logout</a></li>          
        </ul>
       
    </header>
    <div class=emptyspace>
        this is empty space        
    </div>  


     
    <!-- Login Success Message -->
    <!-- <?php 
            if(isset($_SESSION['login']))
            {
              echo $_SESSION['login'];    //Displaying Session Message
              unset($_SESSION['login']); //Removing Session Message
                
            }
        ?>  -->
<!-- Slide Show -->
        <div class="slider">
            <div class="slides">
                <img src="bg/bg.jpg" alt="Image 1">
                    <div class="text">Text 1</div>
                <img src="bg/bg2.jpg" alt="Image 2">
                    <div class="text">Text 2</div>
                <img src="bg/bg3.jpg" alt="Image 3">
                    <div class="text">Text 3</div>
                <img src="bg/bg4.jpg" alt="Image 4">
                    <div class="text">Text 4</div>
            </div>
        </div>

    <!-- <div id="content-container"></div> -->
    
    <script src="script.js"></script>
    <!-- <div id="form-container"></div> -->
<hr>
<div class="text-center">
    <br>
<b2>This is Contact Us Section</b2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>Veritatis tempore deleniti culpa natus est, nulla rerum magnam molestias unde totam error amet ratione eveniet! Eligendi repellendus amet dolorum rem reiciendis?</p>

</div>
       

<section class="container text-center">           
        <h1>सम्पर्कको लागि</h1>
        <h2>केहि समस्या भए इमेल गर्नु होला</h2>
    
            <div class="footer-row">
                <div class="footer-left">
                    <h3>होयेबसाईट खुल्ने समय</h3>
                    <p><i class="fa fa-clock-o"></i>आइतबार देखि शुक्रबार - 10am to 5pm</p>
                </div>
                <div class="footer-right">
                    <h3>सम्पर्कमा रहनुहोस्</h3>
                    <p>इमेल: spprojest@gmail.com<i class="fa fa-paper-plane"></i></p>
                    <p>मोबिल न: +9779812345678<i class="fa fa-phone"></i></p>
                    <p>ठेगाना: बेलबारी, मोरंग, नेपाल<i class="fa fa-map-marker"></i></p>
                </div>
            </div>
</section>

<div class="bold-line"></div>



<!-- social Section Starts Here -->
<section class="social">
<hr style="border: 2px solid black;">

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







