<?php
    // session_start();
    include("connection.php");
    include ('login-check.php'); 
?>
<!-- PHP code to get any previous data entered -->
<?php 
    //Check whether the username is set in session or not
    if(isset($_SESSION['user']))
    {
        //Get the username from session
        $username = $_SESSION['user'];

        //Create SQL Query to get all details based on the username
        $sql = "SELECT * FROM form_1 WHERE username='$username'";

        //Execute the query
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        //Check whether response available or not
        if($count == 1)
        {
            //We have data
            //Get the data from Database
            $row = mysqli_fetch_assoc($res);

            //Extract data
            $status = $row['status'];
            $name = $row['name'];
            $address = $row['address'];
            $citizen_no = $row['citizen_no'];
            $citizen_date = $row['citizen_date'];
            $mob_no = $row['mob_no'];
            $email = $row['email'];
            $image = $row['image'];    
            $imagen1 = $row['imagen1'];
            $imagen2 = $row['imagen2'];
            $company=$row['company'];
            // Construct the complete image path
            $imagepath = "uploads/" . $row['image'];
            $imagen1path = "uploads-n1/" . $row['imagen1'];
            $imagen1path = "uploads-n2/" . $row['imagen2'];
            
        }else {
            // If no database data, check for company type in $_GET
            $company = isset($_GET['company']) ? $_GET['company'] : "";
        }
    }
        
?>



        

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>इजाजतपत्रको लागि दिईने दरखास्त</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="font/kalimati.otf">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <!-- Fullscreen Image Modal -->
    <div id="imageModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="fullImage">
            <div id="caption"></div>
    </div>
    <script>      
        // Get the modal
        var modal = document.getElementById("imageModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var modalImg = document.getElementById("fullImage");

        // Function to open modal with clicked image
        function openModal(imageSrc) {
            modal.style.display = "block";
            modalImg.src = imageSrc;
        }

        // Function to close modal
        function closeModal() {
            modal.style.display = "none";
        }

        // When the user clicks on <span> (x), close the modal
        var closeBtn = document.getElementsByClassName("close")[0];
        closeBtn.onclick = function () {
            closeModal();
        };
    </script>
    <header>  
        <div class="head-flex">
        <a href="#"><img src="img/logo.png" class="logo"></a>
        
            <h4 class="header-text" >बेलबारी नगरपालिका, नगर कार्यपालिकाको कार्यालय<br>
                कोशी प्रदेश, मोरङ , नेपाल</h4>
        
        <a href="#"><img src="img/flag.gif" class="flag"></a>
        </div>
      
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="formf.php">Forms</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="download.php">Downloads</a></li>
            <li><a href="uprofile.php" class="username">Welcome, <?php echo $_SESSION['user']; ?></a></li>
            <li><a href="logout.php" class="btn1">Logout</a></li>
        </ul>


    </header>
   
    <div class=emptyspace>
        this is empty space        
    </div>  
    <!-- Login Success Message -->
        <?php 
            if(isset($_SESSION['login']))
            {
              echo $_SESSION['login'];    //Displaying Session Message
              unset($_SESSION['login']); //Removing Session Message
                
            }
        ?>
    <!-- This is for Introduction form -->
    <?php
        // Check if the form is submitted
        
        if(isset($_POST['submitintro'])){
            // Get username from session
            $username = $_SESSION['user'];

            // Extract data from POST
            $name = $_POST['name'];
            $address = $_POST['address'];
            $citizen_no = $_POST['citizen_no'];
            $mob_no = $_POST['mob_no'];
            $email = $_POST['email'];
            $citizen_date = $_POST['citizen_date'];
            
            // Check if a new image is uploaded
            if(isset($_FILES['fileImg']) && $_FILES['fileImg']['error'] === UPLOAD_ERR_OK) {
                // Specify the directory where it want to store the uploaded images
                $uploadDir = "uploads/";

                // Generate a unique filename to avoid overwriting existing files
                $fileName = uniqid() . "_" . basename($_FILES["fileImg"]["name"]);
                
                // Specify the path where the file will be stored
                $filePath = $uploadDir . $fileName;

                // Move the uploaded file to the specified directory
                if(move_uploaded_file($_FILES["fileImg"]["tmp_name"], $filePath)) {
                    // File uploaded successfully, save the filename to the database
                    $image = $fileName;
                } else {
                    echo "Error uploading file.";
                    
                }
            } else {
                // No new image uploaded, keep the existing image in the database
                $image = ''; 
            }
            // Check if a new Nagrita front image is uploaded
            if(isset($_FILES['nagritaFrontImg']) && $_FILES['nagritaFrontImg']['error'] === UPLOAD_ERR_OK) {
                // Specify the directory where it want to store the uploaded images
                $uploadDirN1 = "uploads-n1/";

                // Generate a unique filename to avoid overwriting existing files
                $fileNameN1 = uniqid() . "_" . basename($_FILES["nagritaFrontImg"]["name"]);
                
                // Specify the path where the file will be stored
                $filePathN1 = $uploadDirN1 . $fileNameN1;

                // Move the uploaded file to the specified directory
                if(move_uploaded_file($_FILES["nagritaFrontImg"]["tmp_name"], $filePathN1)) {
                    // File uploaded successfully, save the filename to the database
                    $imagen1 = $fileNameN1;
                } else {
                    echo "Error uploading file.";
                    
                }
            } else {
                // No new Nagrita front image uploaded, keep the existing image in the database
                $imagen1 = '';
            }

            // Check if a new Nagrita back image is uploaded
            if(isset($_FILES['nagritaBackImg']) && $_FILES['nagritaBackImg']['error'] === UPLOAD_ERR_OK) {
                // Specify the directory where  to store the uploaded images
                $uploadDirN2 = "uploads-n2/";

                // Generate a unique filename to avoid overwriting existing files
                $fileNameN2 = uniqid() . "_" . basename($_FILES["nagritaBackImg"]["name"]);
                
                // Specify the path where the file will be stored
                $filePathN2 = $uploadDirN2 . $fileNameN2;

                // Move the uploaded file to the specified directory
                if(move_uploaded_file($_FILES["nagritaBackImg"]["tmp_name"], $filePathN2)) {
                    // File uploaded successfully, save the filename to the database
                    $imagen2 = $fileNameN2;
                } else {
                    echo "Error uploading file.";
                    
                }
            } else {
                // No new Nagrita back image uploaded, keep the existing image in the database
                $imagen2 = ''; // or it can set it to the existing image filename
            }


            // Check if the user has already submitted data
                $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
                if(mysqli_num_rows($existingData) > 0) {
                    // If user exists, update the existing row
                    $sql = "UPDATE form_1 SET 
                            name='$name', 
                            address='$address', 
                            citizen_no='$citizen_no', 
                            mob_no='$mob_no', 
                            email='$email', 
                            citizen_date='$citizen_date'";

                    // Only update image if a new image is uploaded
                    if(isset($image)) {
                        $sql .= ", image=IF(image IS NULL OR image = '', '$image', image)"; // Update image if it's null or empty
                    }


                    // Update Nagrita front part and back part images if new images are uploaded
                    // Only update imagen1 if a new image is uploaded
                    if(isset($imagen1)) {
                        $sql .= ", imagen1=IF(imagen1 IS NULL OR imagen1 = '', '$imagen1', imagen1)"; // Update imagen1 if it's null or empty
                    }

                    
                    // Only update imagen2 if a new image is uploaded
                    if(isset($imagen2)) {
                        $sql .= ", imagen2=IF(imagen2 IS NULL OR imagen2 = '', '$imagen2', imagen2)"; // Update imagen2 if it's null or empty
                    }

                    
                    $sql .= " WHERE username='$username'";
                } else {
                    // If user doesn't exist, insert a new row
                    $sql = "INSERT INTO form_1(username, name, address, citizen_no, mob_no, email, citizen_date, image, imagen1, imagen2)
                            VALUES ('$username', '$name', '$address', '$citizen_no', '$mob_no', '$email', '$citizen_date', '$image', '$imagen1', '$imagen2')";
                }

                // Execute SQL query
                if ($conn->query($sql) === TRUE) {     
                    // Redirect to another page
                    // header("Location: formf.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
                }

                // Close connection
                $conn->close();

        }


    ?>

    
        <br>

    <div class="form-container"> 
            <h1 style="text-align: center; text-decoration: underline;">Application Form</h1><br>
                <div class="sidebar">
                    <ul>
                        <li><a href="#" onclick="showSection('section0')"><img src="img/app-form.png" class="icon">परिचय</a></li>
                        <li><a href="#" onclick="showSection('section1')"><img src="img/app-form.png" class="icon">दरखास्त पेश</a></li>
                        <li><a href="#" onclick="showSection('section2')"><img src="img/company-type.png" class="icon">कम्पनीको प्रकृति</a></li>
                        <li><a href="#" onclick="showSection('section3')"><img src="img/contact-person.png" class="icon">सम्पर्क विवरण</a></li>
                        <li><a href="#" onclick="showSection('section4')"><img src="img/company-info.png" class="icon">कम्पनीको विवरण</a></li>
                        <li><a href="#" onclick="showSection('section5')"><img src="img/clearance-form.png" class="icon">ईजाजतपत्र वर्ग</a></li>
                        <li><a href="#" onclick="showSection('section6')"><img src="img/company-group.png" class="icon">समुहिकरण</a></li>
                        <li><a href="#" onclick="showSection('section7')"><img src="img/income-source.png" class="icon">आर्थिक विवरण</a></li>
                        <li><a href="#" onclick="showSection('section8')"><img src="img/manpower.png" class="icon">कामदारको विवरण</a></li>
                        <li><a href="#" onclick="showSection('section9')"><img src="img/machinery.png" class="icon">औजारको विवरण</a></li>                    
                        <li><a href="#" onclick="showSection('section10')"><img src="img/work-detail.png" class="icon">कामको विवरण</a></li>
                        <li><a href="#" onclick="showSection('section11')"><img src="img/income-tax.png" class="icon">कर चुक्ता प्रमाण </a></li>
                    </ul>
                </div>
        <div class="form-content">
            <!-- Introduction Form Starts here -->
                <form id="myForm" name="form" action="" method="POST" enctype="multipart/form-data"> 
                        <div id="section0" class="form-section">
                                <b># परिचय</b><br>
                                <div class="upload-container">
                                    <div class="upload">
                                        

                                        <div class="image-wrapper">
                                            <img src="uploads/<?php echo $image; ?>" id="image" onclick="openModal(this.src)"> 
                                            
                                        </div>
                                        <div class="rightRound" id="upload">
                                            <input type="file" name="fileImg" id="fileImg" accept=".jpg, .jpeg, .png">
                                            <i class="fa fa-camera"></i>
                                        

                                        </div>
                                        <!-- <br> -->
                                        <p>Profile Picture</p>

                                    </div>
                                    
                                    <!-- Nagrita Front Part -->
                                    <div class="upload-n1">
                                        <div class="image-wrapper-1">
                                            <img src="uploads-n1/<?php echo $imagen1; ?>" id="nagrita-front-image" onclick="openModal(this.src)"> 
                                            
                                        </div>
                                        <div class="rightRound-1" id="nagrita-front-upload">
                                            <input type="file" name="nagritaFrontImg" id="nagritaFrontImg" accept=".jpg, .jpeg, .png">
                                            <i class="fa fa-camera"></i>
                                        </div>    
                                        <!-- <br> -->
                                        <p>Nagrita Front Face</p>                   
                                    </div>                               
                                    <!-- Nagrita Back Part -->
                                    <div class="upload-n2">
                                        <div class="image-wrapper-2">
                                            <img src="uploads-n2/<?php echo $imagen2; ?>" id="nagrita-back-image" onclick="openModal('nagrita-back', this.src)">
                                            
                                        </div>
                                        <div class="rightRound-2" id="nagrita-back-upload">
                                            <input type="file" name="nagritaBackImg" id="nagritaBackImg" accept=".jpg, .jpeg, .png">
                                            <i class="fa fa-camera"></i>
                                        </div>   
                                        <!-- <br> -->
                                        <p>Nagrita Back Face</p>                     
                                    </div>
                                </div>
                                <!-- Introduction Form Starts here -->
                            <div class="info">
                                <label>नाम:</label>
                                <input type="text" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>">
                                <label>ठेगाना:</label>
                                <input type="text" id="address" name="address" value="<?php echo isset($address) ? $address : ''; ?>">
                                <br>
                                <label>मोबाइल न:</label>
                                <input type="text" id="mob_no" name="mob_no" value="<?php echo isset($mob_no) ? $mob_no : ''; ?>">
                                <label>इमेल:</label>
                                <input type="text" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>"><br>
                                <label>नागरिता न:</label>
                                <input type="text" id="citizen_no" name="citizen_no" value="<?php echo isset($citizen_no) ? $citizen_no : ''; ?>">                   
                                <label>=> जारी मिति:</label>
                                <input type="date" id="citizen_date" name="citizen_date" value="<?php echo isset($citizen_date) ? $citizen_date : ''; ?>"><br>
                                
                                    
                                    <br>
                                    <br>
                                    <button type="submit" id="submitBtn" name="submitintro" class="btn-submit-form">Submit</button>
                                        
                                    <br><br><br>Next:-
                                    <li><a href="#" onclick="showSection('section1')"><img src="img/company-type.png" class="icon">1. दरखास्त पेश गने फर्म वा कम्पनीको</a></li>
                            </div> 
                        </div> 
                </form> 
            <!-- Application Form Starts here -->
            <form id="myForm" name="form" action="formb.php" method="POST">
                    <div id="section1" class="form-section">
                        <b>१. दरखास्त पेश गने फर्म वा कम्पनीको :</b><br>
                        <label>नाम:</label>
                        <input type="text" id="qna1" name="qna1" value="<?php echo isset($row['qna1']) ? $row['qna1'] : ''; ?>"><br>

                        <label>ठेगाना:</label>
                        <input type="text" id="qna2" name="qna2" value="<?php echo isset($row['qna2']) ? $row['qna2'] : ''; ?>">

                        <label>पोस्टबक्स न:</label>
                        <input type="text" id="qna3" name="qna3" value="<?php echo isset($row['qna3']) ? $row['qna3'] : ''; ?>"><br>

                        <label>टेलिफोन न:</label>
                        <input type="text" id="qna4" name="qna4" value="<?php echo isset($row['qna4']) ? $row['qna4'] : ''; ?>">

                        <label>मोबाइल न:</label>
                        <input type="text" id="qna6" name="qna6" value="<?php echo isset($row['qna6']) ? $row['qna6'] : ''; ?>"><br>

                        <label>इमेल:</label>
                        <input type="text" id="qna7" name="qna7" value="<?php echo isset($row['qna7']) ? $row['qna7'] : ''; ?>">

                        <label>फ्याक्स न:</label>
                        <input type="text" id="qna8" name="qna8" value="<?php echo isset($row['qna8']) ? $row['qna8'] : ''; ?>">



                       
                        <br>
                        <br>
                        <button type="submit" id="submitBtn" name="submit1" class="btn-submit-form">Submit</button>


                        <br><br><br>Next:-
                        <li><a href="#" onclick="showSection('section2')"><img src="img/company-type.png" class="icon">२. फर्म वा कम्पनीको प्रकृति</a></li>
                    </div>                
                    <div id="section2" class="form-section radio-group ">
                    <b>२. फर्म वा कम्पनीको प्रकृति:</b><br> 
                    <label id="label-2">प्राइभेट लिमिटेड कम्पनी:</label>
                            <input type="radio" class="class-2" name="company" value="1" <?php echo ($company == '1') ? 'checked' : ''; ?> required> 
                            <label>एकलौटी:</label>
                            <input type="radio" class="class-2" name="company" value="2" <?php echo ($company == '2') ? 'checked' : ''; ?>> <br><br>
                            <label id="label-2">पुब्लिक लिमिटेड कम्पनी:</label>
                            <input type="radio" class="class-2" name="company" value="3" <?php echo ($company == '3') ? 'checked' : ''; ?>> 
                            <label>साझेदाऱी:</label>
                            <input type="radio" class="class-2" name="company" value="4" <?php echo ($company == '4') ? 'checked' : ''; ?>>

                           
                            <br>
                            <br>
                        <button type="submit" id="submitBtn" name="submit2" class="btn-submit-form">Submit</button>
                        <br><br><br>Next:-
                        <li><a href="#" onclick="showSection('section3')"><img src="img/company-type.png" class="icon">३. सम्पर्कको लागि फर्म वा कम्पनीको आधिकाऱीक</a></li>
                    </div>         
                    <div id="section3" class="form-section">
                        <b>३. सम्पर्कको लागि फर्म वा कम्पनीको आधिकाऱीक  :</b><br>
                        <label>नाम:</label>
                        <input type="text" id="qna9" name="qna9" value="<?php echo isset($row['qna9']) ? $row['qna9'] : ''; ?>"><br>

                        <label>ठेगाना:</label>
                        <input type="text" id="qna10" name="qna10" value="<?php echo isset($row['qna10']) ? $row['qna10'] : ''; ?>">

                        <label>पोस्टबक्स न:</label>
                        <input type="text" id="qna101" name="qna101" value="<?php echo isset($row['qna101']) ? $row['qna101'] : ''; ?>"><br>

                        <label>टेलिफोन न:</label>
                        <input type="text" id="qna11" name="qna11" value="<?php echo isset($row['qna11']) ? $row['qna11'] : ''; ?>">

                        <label>मोबाइल न:</label>
                        <input type="text" id="qna12" name="qna12" value="<?php echo isset($row['qna12']) ? $row['qna12'] : ''; ?>"><br>

                        <label>इमेल:</label>
                        <input type="text" id="qna13" name="qna13" value="<?php echo isset($row['qna13']) ? $row['qna13'] : ''; ?>">

                        <label>फ्याक्स न:</label>
                        <input type="text" id="qna14" name="qna14" value="<?php echo isset($row['qna14']) ? $row['qna14'] : ''; ?>">


                    
                        <br>
                        <br>
                        <button type="submit" id="submitBtn" name="submit3" class="btn-submit-form">Submit</button>
                        <br><br><br>Next:-
                        <li><a href="#" onclick="showSection('section4')"><img src="img/company-type.png" class="icon">४. फर्म वा कम्पनीको विवरण</a></li>
                    </div> 
                    <div id="section4" class="form-section details">
                        <b>४. फर्म वा कम्पनीको विवरण :</b><br>
                        <label>दर्ता न.:</label>
                        <input type="number" id="qna15" name="qna15" value="<?php echo isset($row['qna15']) ? $row['qna15'] : ''; ?>">

                        <label>दर्ता मिति:</label>
                        <input type="date" id="qna16" name="qna16" value="<?php echo isset($row['qna16']) ? $row['qna16'] : ''; ?>"><br>

                        <label>अधिकृत पुजी रू:-</label>
                        <input type="text" id="qna17" name="qna17" value="<?php echo isset($row['qna17']) ? $row['qna17'] : ''; ?>">

                        <label>जारी पुजी रू:</label>
                        <input type="text" id="qna18" name="qna18" value="<?php echo isset($row['qna18']) ? $row['qna18'] : ''; ?>"><br>

                        <label>नाम ठेगाना:</label>
                        <input type="text" id="qna19" name="qna19" value="<?php echo isset($row['qna19']) ? $row['qna19'] : ''; ?>">


                      
                        <br>
                        <br>
                        <button type="submit" id="submitBtn" name="submit4" class="btn-submit-form">Submit</button>
                        <br><br><br>Next:-
                        <li><a href="#" onclick="showSection('section5')"><img src="img/company-type.png" class="icon">५. ईजाजतपत्र लिन चाहेको वर्ग</a></li>
    
                    </div>
                    <div id="section5" class="form-section">
                        <b>५. ईजाजतपत्र लिन चाहेको वर्ग :(घ) वर्ग </b>
                        <!-- <input type="text" id="qna20" name="qna20" value="<?php echo isset($row['qna20']) ? $row['qna20'] : ''; ?>"> -->
                        
                        <br><br><br>Next:-
                        <!-- name="qna20" -->
                        <li><a href="#" onclick="showSection('section6')"><img src="img/company-type.png" class="icon">६. समुहिकरण हुन चाहेको समूह</a></li>
    
                    </div>
                    <div id="section6" class="form-section">
                        <b>६. समुहिकरण हुन चाहेको समूह :</b>
                        <input type="samuha" id="qna21" name="qna21" value="<?php echo isset($row['qna21']) ? $row['qna21'] : ''; ?>">
                        
                        <br>
                        <br>
                        <button type="submit" id="submitBtn" name="submit6" class="btn-submit-form">Submit</button>
                        <br><br><br>Next:-
                        <li><a href="#" onclick="showSection('section7')"><img src="img/company-type.png" class="icon">७. आर्थिक श्रोतको विवरण</a></li>
    
                    </div>
                    <div id="section7" class="form-section sources">
                        <b>७. आर्थिक श्रोतको विवरण :</b><br>
                        <b><a>(क) स्थाही ओभरड्राफ्ट:-</a></b><br>
                        <label id="amt-label">रकम रू:-</label>
                        <input type="text" id="qna22" name="qna22" value="<?php echo isset($row['qna22']) ? $row['qna22'] : ''; ?>">

                        <label id="bank-label">बैंक वा वितिय सस्थाको नाम:-</label>
                        <input type="text" id="qna23" name="qna23" value="<?php echo isset($row['qna23']) ? $row['qna23'] : ''; ?>"><br>

                        <b><a>(ख) मुद्ती खाता:-</a></b><br>

                        <label id="amt-label">रकम रू:-</label>
                        <input type="text" id="qna24" name="qna24" value="<?php echo isset($row['qna24']) ? $row['qna24'] : ''; ?>">

                        <label id="bank-label">बैंक वा वितिय सस्थाको नाम:-</label>
                        <input type="text" id="qna25" name="qna25" value="<?php echo isset($row['qna25']) ? $row['qna25'] : ''; ?>"><br>

                        <b><a>(ग) चल्ती खाता:-</a></b><br>

                        <label id="amt-label">रकम रू:-</label>
                        <input type="text" id="qna26" name="qna26" value="<?php echo isset($row['qna26']) ? $row['qna26'] : ''; ?>">

                        <label id="bank-label">बैंक वा वितिय सस्थाको नाम:-</label>
                        <input type="text" id="qna27" name="qna27" value="<?php echo isset($row['qna27']) ? $row['qna27'] : ''; ?>"><br>

                        <b><a>(घ) बचत खाता:-</a></b><br>

                        <label id="amt-label">रकम रू:-</label>
                        <input type="text" id="qna28" name="qna28" value="<?php echo isset($row['qna28']) ? $row['qna28'] : ''; ?>">

                        <label id="bank-label">बैंक वा वितिय सस्थाको नाम:-</label>
                        <input type="text" id="qna29" name="qna29" value="<?php echo isset($row['qna29']) ? $row['qna29'] : ''; ?>">

                       
                        <br>
                        <br>
                        <button type="submit" id="submitBtn" name="submit7" class="btn-submit-form">Submit</button>
                        <br><br><br>Next:-
                        <li><a href="#" onclick="showSection('section8')"><img src="img/company-type.png" class="icon">८. कामदारको विवरण</a></li>
    
                    </div>
                    <div id="section8" class="form-section">
                        <b>८. कामदारको विवरण :</b><br>
                        <label>प्राबिधिक:-</label>
                        <input type="prabhdik" id="qna30" name="qna30" value="<?php echo isset($row['qna30']) ? $row['qna30'] : ''; ?>"><br>
                        <label>अप्राविधिक:-</label>
                        <input type="aprabhdik" id="qna31" name="qna31" value="<?php echo isset($row['qna31']) ? $row['qna31'] : ''; ?>"><br>
                        <label>अन्य:-</label>
                        <input type="other" id="qna32" name="qna32" value="<?php echo isset($row['qna32']) ? $row['qna32'] : ''; ?>">
                        
                        <br>
                        <br>
                        <button type="submit" id="submitBtn" name="submit8" class="btn-submit-form">Submit</button>
                        <br><br><br>Next:-
                        <li><a href="#" onclick="showSection('section9')"><img src="img/company-type.png" class="icon">९. औजारको विवरण</a></li>
                    </div>
                    <div id="section9" class="form-section">
                        <b>९. औजारको विवरण :</b><br>
                        <br><b>१.</b><br>
                        <label id="num-label">सि.नं. १.:-</label>
                        <input type="" id="qna33" name="qna33" value="<?php echo isset($row['qna33']) ? $row['qna33'] : ''; ?>">

                        <label id="qty-label">सवारी साधनको विवरण १.:-</label>
                        <input type="" id="qna34" name="qna34" value="<?php echo isset($row['qna34']) ? $row['qna34'] : ''; ?>"><br>

                        <label id="num-label">दर्ता.नं. १.:-</label>
                        <input type="" id="qna35" name="qna35" value="<?php echo isset($row['qna35']) ? $row['qna35'] : ''; ?>">

                        <label id="qty-label">क्षमता संख्या १.:-</label>
                        <input type="" id="qna36" name="qna36" value="<?php echo isset($row['qna36']) ? $row['qna36'] : ''; ?>"><br>

                        <label id="num-label">मुल्य १.:-</label>
                        <input type="" id="qna37" name="qna37" value="<?php echo isset($row['qna37']) ? $row['qna37'] : ''; ?>">

                        <label id="qty-label">खरिद मिति १.:-</label>
                        <input type="" id="qna38" name="qna38" value="<?php echo isset($row['qna38']) ? $row['qna38'] : ''; ?>"><br>

                        <label id="num-label">अन्य व्यहोरा १.:-</label>
                        <input type="" id="qna39" name="qna39" value="<?php echo isset($row['qna39']) ? $row['qna39'] : ''; ?>"><br><br>

                        <b>२.</b><br>

                        <label id="num-label">सि.नं. २.:-</label>
                        <input type="" id="qna40" name="qna40" value="<?php echo isset($row['qna40']) ? $row['qna40'] : ''; ?>">

                        <label id="qty-label">सवारी साधनको विवरण २.:-</label>
                        <input type="" id="qna41" name="qna41" value="<?php echo isset($row['qna41']) ? $row['qna41'] : ''; ?>"><br>

                        <label id="num-label">दर्ता.नं. २.:-</label>
                        <input type="" id="qna42" name="qna42" value="<?php echo isset($row['qna42']) ? $row['qna42'] : ''; ?>">

                        <label id="qty-label">क्षमता संख्या २.:-</label>
                        <input type="" id="qna43" name="qna43" value="<?php echo isset($row['qna43']) ? $row['qna43'] : ''; ?>"><br>

                        <label id="num-label">मुल्य २.:-</label>
                        <input type="" id="qna44" name="qna44" value="<?php echo isset($row['qna44']) ? $row['qna44'] : ''; ?>">

                        <label id="qty-label">खरिद मिति २.:-</label>
                        <input type="" id="qna45" name="qna45" value="<?php echo isset($row['qna45']) ? $row['qna45'] : ''; ?>"><br>

                        <label id="num-label">अन्य व्यहोरा २.:-</label>
                        <input type="" id="qna46" name="qna46" value="<?php echo isset($row['qna46']) ? $row['qna46'] : ''; ?>">

                        <br>
                        <br>
                        <button type="submit" id="submitBtn" name="submit9" class="btn-submit-form">Submit</button>
                        <br><br><br>Next:-
                        <li><a href="#" onclick="showSection('section10')"><img src="img/company-type.png" class="icon">१०. कामको विवरण</a></li>
                        
                    </div>   
                    <div id="section10" class="form-section">
                        <b>१०. कामको विवरण :</b><br>
                        <br><b>१.</b><br>
                        <label id="work-label1">सि.नं. १.:-</label>
                        <input type="" id="qna47" name="qna47" value="<?php echo isset($row['qna47']) ? $row['qna47'] : ''; ?>"><br>

                        <label id="work-label2">निर्माण सम्बन्धी कामको प्रकार १.:-</label>
                        <input type="" id="qna48" name="qna48" value="<?php echo isset($row['qna48']) ? $row['qna48'] : ''; ?>"><br>

                        <label id="work-label3">काम गरेको साल १.:-</label>
                        <input type="" id="qna49" name="qna49" value="<?php echo isset($row['qna49']) ? $row['qna49'] : ''; ?>">

                        <label id="cash-label1">रकम १.:-</label>
                        <input type="" id="qna50" name="qna50" value="<?php echo isset($row['qna50']) ? $row['qna50'] : ''; ?>"><br>

                        <label id="work-label4">ठेक्का दाता कार्यालयको नाम १.:-</label>
                        <input type="" id="qna51" name="qna51" value="<?php echo isset($row['qna51']) ? $row['qna51'] : ''; ?>"><br>

                        <label id="work-label5">कामको अवस्था प्रगति प्रतिशतमा १.:-</label>
                        <input type="" id="qna52" name="qna52" value="<?php echo isset($row['qna52']) ? $row['qna52'] : ''; ?>"><br>

                        <b>२.</b><br>

                        <label id="work-label6">सि.नं. २.:-</label>
                        <input type="" id="qna53" name="qna53" value="<?php echo isset($row['qna53']) ? $row['qna53'] : ''; ?>"><br>

                        <label id="work-label7">निर्माण सम्बन्धी कामको प्रकार २.:-</label>
                        <input type="" id="qna54" name="qna54" value="<?php echo isset($row['qna54']) ? $row['qna54'] : ''; ?>"><br>

                        <label id="work-label8">काम गरेको साल २.:-</label>
                        <input type="" id="qna55" name="qna55" value="<?php echo isset($row['qna55']) ? $row['qna55'] : ''; ?>">

                        <label id="cash-label2">रकम २.:-</label>
                        <input type="" id="qna56" name="qna56" value="<?php echo isset($row['qna56']) ? $row['qna56'] : ''; ?>"><br>

                        <label id="work-label9">ठेक्का दाता कार्यालयको नाम २.:-</label>
                        <input type="" id="qna57" name="qna57" value="<?php echo isset($row['qna57']) ? $row['qna57'] : ''; ?>"><br>

                        <label id="work-label10">कामको अवस्था प्रगति प्रतिशतमा २.:-</label>
                        <input type="" id="qna58" name="qna58" value="<?php echo isset($row['qna58']) ? $row['qna58'] : ''; ?>">

                        
                        <br>
                        <br>
                        <button type="submit" id="submitBtn" name="submit10" class="btn-submit-form">Submit</button>
                        <br><br><br>Next:-
                        <li><a href="#" onclick="showSection('section10')"><img src="img/company-type.png" class="icon">११. कर चुक्ता गरेको प्रमाण कागजात</a></li>
                        
                    </div>             
                    <!-- Last Section with Submit button -->
                    <div id="section11" class="form-section">
                        <b>११. कर चुक्ता गरेको प्रमाण कागजात :</b><br>
                        <label>(क).:-</label>
                        <input type="" id="qna59" name="qna59" value="<?php echo isset($row['qna59']) ? $row['qna59'] : ''; ?>"><br>

                        <label>(ख).:-</label>
                        <input type="" id="qna60" name="qna60" value="<?php echo isset($row['qna60']) ? $row['qna60'] : ''; ?>"><br>

                        <label>(ग).:-</label>
                        <input type="" id="qna61" name="qna61" value="<?php echo isset($row['qna61']) ? $row['qna61'] : ''; ?>"><br><br>


                        <!-- This is the Main Button -->
                        <button type="submit" id="submitBtn" name="submitall" class="btn-submit-form">Submit</button>
                        
                        
                    </div> 
                  
            </form>
        </div>
            
        <script src="script.js"></script>

                <script type="text/javascript">
                document.getElementById("fileImg").onchange = function(){
                    document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image
                }

               
                document.getElementById("nagritaFrontImg").onchange = function(){
                    document.getElementById("nagrita-front-image").src = URL.createObjectURL(this.files[0]); // Preview new image

                    
                }

                
                document.getElementById("nagritaBackImg").onchange = function(){
                    document.getElementById("nagrita-back-image").src = URL.createObjectURL(this.files[0]); // Preview new image

                    
                }

                

        
        </script>
       
    </div>
    


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