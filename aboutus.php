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
    <!-- About us section starts here -->
    <section id="aboutus">

            <div class="text-center container">
                </div>
                <div class="text-center">
                <h3>नगरपालिकाको संक्षिप्त परिचय</h3>
                    </br></br>
                <h4>    
                मोरङ जिल्ला प्राचीन कालमा विराट राजाको राजधानी र मध्यकालमा विजयपुरमा विजयनारायण पछि पाल्पाली सेन राजाको राज्य भित्र रहेको इतिहास छ । मोरङ जिल्लाका एक विराटनगर महानगरपालिका ८ नगरपालिका र ८ गाउँपालिकाहरूमध्ये बेलबारी नगरपालिका एक हो । मानव बसोबासको इतिहास र पुरातात्त्विक प्रमाणहरूको आधारमा लगभग तीन हजार वर्ष अघिदेखि बसोबास गरिआएको बेतना सिमसार क्षेत्रको पुरातात्त्विक प्रमाण र लगभग आठ सय वर्षभन्दा अगाडिको धनपालगढी क्षेत्र रहेको यो बेलबारी नगरपालिका हो । आधुनिक नेपाल निर्माणपछि ३५ वटा जिल्लाहरू हुँदा हालको मोरङ, झापा, सुनसरी एउटा जिल्ला मोरङ रहेको थियो । यो बेलबारी नगरपालिका मोरङ जिल्लाको लगभग मध्य भागमा रहेको छ ।

                ऐतिहासिक कालमा यो क्षेत्र घना जङ्गलले ढाकेको थियो । अहिले पनि राजमार्ग उत्तर क्षेत्र जङ्गलले नै ढाकिएको छ । पुराना बुढापाकाहरूको भनाइ अनुसार त्यस समयमा यहाँको जङ्गल क्षेत्रमा प्रशस्त बेलको रुखहरू पाइने हुनाले कालान्तरमा यस क्षेत्रको नाम नै “बेलबारी” रहन गएको हो । अर्थात् बेलै बेलको घारी भएको हुनाले यस भेगको नाम बेलबारी रहन गएको भन्ने भनाइ रही रहेको छ । नेपाल सरकारबाट २०७१ साल वैशाखमा साबिक बेलबारी र कसेनी गाउँ विकास समिति मिलाएर नगरपालिका बने पछि सङ्घीय राज्यको संरचना अनुसार पुन
                :
                २०७३ को राज्य पुनर्संरचना पश्चात् बेलबारी नगरपालिकामा साबिक डाँगीहाट र बाहुनी गाउँ विकास समिति गाभिएर हालको बेलबारी नगरपालिका बनेको हो । यस नगरपालिका हाल ११ वटा वडाहरूमा विभाजन गरिएको छ । बेलबारी नगरपालिकाको कुल ‍१३२.७९ वर्ग कि.मी. क्षेत्रफलमा फैलिएको छ ।</br>

                
                </h4>
            </div>
            
            
    </section>



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