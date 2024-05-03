<?php include ('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        
        <h3><a href="manage-response.php">«— Manage Response</a></h1>
        <h1>Update Response</h1>
        </br>
        </br>

        <?php 
                //Check whether the id is set or not
                if(isset($_GET['id']))
                {
                    //Get the id and all other details
                    // echo "getting the data";
                    $id = $_GET['id'];
                    //Create SQL Query to get all other details
                    $sql = "SELECT * FROM basic_info WHERE id=$id";

                    //execute the query
                    $res = mysqli_query($conn, $sql);

                    $count = mysqli_num_rows($res);
                        //check whether response available or not
                        if($count==1)
                        {
                            //We have data
                            // Get the data from Database
                            $row = mysqli_fetch_assoc($res);
                            $username=$row['username'];
                            $status = $row['status'];

                            
                            $name=$row['name'];
                            $address=$row['address'];
                            $mob_no=$row['mob_no'];
                            $email=$row['email'];   
                            $company=$row['company'];

                            $image = $row['image'];    
                            $imagen1 = $row['imagen1'];
                            $imagen2 = $row['imagen2'];
                            // $company=$row['company'];
                            // Construct the complete image path
                            $imagepath = "uploads/" . $row['image'];
                            $imagen1path = "uploads-n1/" . $row['imagen1'];
                            $imagen1path = "uploads-n2/" . $row['imagen2'];

                            

                        }
                        else
                        {
                            //Detail not available
                            //Redirect to manage response page
                            header('location:'.SITEURL.'admin/manage-response.php');
                        }
                }
                else
                {
                    //redirect to manage category
                    header('location:'.SITEURL.'admin/manage-response.php');
                    
                }
        
        ?>
       

        <!-- Update response funtion -->
        <?php 

                //Check whether the submit Button is Clicked or Not
                if(isset($_POST['submit']))
                {
                    // echo "clicked";

                    // 1. Get the value from form
                    
                    $name = $_POST['name'];
                    $status = $_POST['status'];
                    $address = $_POST['address'];
                    // $post_box = $_POST['post_box'];
                    // $tel_no = $_POST['tel_no'];
                    $mob_no = $_POST['mob_no'];
                    // $fax_no = $_POST['fax_no'];


                    // Section1 Data
                    $qna1 = $_POST["qna1"];
                    $qna2 = $_POST["qna2"];
                    $qna3 = $_POST["qna3"];
                    $qna4 = $_POST["qna4"];
                    $qna6 = $_POST["qna6"];
                    $qna7 = $_POST["qna7"];
                    $qna8 = $_POST["qna8"];

                    // Section2 Data
                    $company = $_POST['company'];

                    // Section3 Data
                    $qna9 = $_POST["qna9"];
                    $qna10 = $_POST["qna10"];
                    $qna10 = $_POST["qna101"];
                    $qna11 = $_POST["qna11"];
                    $qna12 = $_POST["qna12"];
                    $qna13 = $_POST["qna13"];
                    $qna14 = $_POST["qna14"];

                    // Section4 Data
                    $qna15 = $_POST["qna15"];
                    $qna16 = $_POST["qna16"];
                    $qna17 = $_POST["qna17"];
                    $qna18 = $_POST["qna18"];
                    $qna19 = $_POST["qna19"];

                    // Section5 Data
                    // $qna20 = $_POST["qna20"];

                    // Section6 Data
                    $qna21 = $_POST["qna21"];

                    // Section7 Data
                    $qna22 = $_POST["qna22"];
                    $qna23 = $_POST["qna23"];
                    $qna24 = $_POST["qna24"];
                    $qna25 = $_POST["qna25"];
                    $qna26 = $_POST["qna26"];
                    $qna27 = $_POST["qna27"];
                    $qna28 = $_POST["qna28"];
                    $qna29 = $_POST["qna29"];

                    // Section8 Data
                    $qna30 = $_POST["qna30"];
                    $qna31 = $_POST["qna31"];
                    $qna32 = $_POST["qna32"];

                    // Section9 Data
                    $qna33 = $_POST["qna33"];
                    $qna34 = $_POST["qna34"];
                    $qna35 = $_POST["qna35"];
                    $qna36 = $_POST["qna36"];
                    $qna37 = $_POST["qna37"];
                    $qna38 = $_POST["qna38"];
                    $qna39 = $_POST["qna39"];
                    $qna40 = $_POST["qna40"];
                    $qna41 = $_POST["qna41"];
                    $qna42 = $_POST["qna42"];
                    $qna43 = $_POST["qna43"];
                    $qna44 = $_POST["qna44"];
                    $qna45 = $_POST["qna45"];
                    $qna46 = $_POST["qna46"];

                    // Section10 Data
                    $qna47 = $_POST["qna47"];
                    $qna48 = $_POST["qna48"];
                    $qna49 = $_POST["qna49"];
                    $qna50 = $_POST["qna50"];
                    $qna51 = $_POST["qna51"];
                    $qna52 = $_POST["qna52"];
                    $qna53 = $_POST["qna53"];
                    $qna54 = $_POST["qna54"];
                    $qna55 = $_POST["qna55"];
                    $qna56 = $_POST["qna56"];
                    $qna57 = $_POST["qna57"];
                    $qna58 = $_POST["qna58"];

                    // Section11 Data
                    $qna59 = $_POST["qna59"];
                    $qna60 = $_POST["qna60"];
                    $qna61 = $_POST["qna61"];
                    
                    //2. Update the Values
                        $sql2 = "UPDATE basic_info SET
                                
                                name = '$name',
                                status = '$status',
                                address = '$address',
                                mob_no = '$mob_no',
                                

                                -- section1
                                qna1='$qna1',
                                qna2='$qna2',
                                qna3='$qna3',
                                qna4='$qna4',
                                qna6='$qna6',
                                qna7='$qna7',
                                qna8='$qna8',
                                -- Section2
                                company='$company',
                                -- section3
                                qna9='$qna9',
                                qna10='$qna10',
                                qna101='$qna101',
                                qna11='$qna11',
                                qna12='$qna12',
                                qna13='$qna13',
                                qna14='$qna14',
                                -- section4
                                qna15='$qna15',
                                qna16='$qna16',
                                qna17='$qna17',
                                qna18='$qna18',
                                qna19='$qna19',
                                -- section5
                                -- qna20='$qna20',
                                -- section6
                                qna21='$qna21',
                                -- section7
                                qna22='$qna22',
                                qna23='$qna23',
                                qna24='$qna24',
                                qna25='$qna25',
                                qna26='$qna26',
                                qna27='$qna27',
                                qna28='$qna28',
                                qna29='$qna29',
                                -- section8
                                qna30='$qna30',
                                qna31='$qna31',
                                qna32='$qna32',
                                -- section9
                                qna33='$qna33',
                                qna34='$qna34',
                                qna35='$qna35',
                                qna36='$qna36',
                                qna37='$qna37',
                                qna38='$qna38',
                                qna39='$qna39',
                                qna40='$qna40',
                                qna41='$qna41',
                                qna42='$qna42',
                                qna43='$qna43',
                                qna44='$qna44',
                                qna45='$qna45',
                                qna46='$qna46',
                                -- section10
                                qna47='$qna47',
                                qna48='$qna48',
                                qna49='$qna49',
                                qna50='$qna50',
                                qna51='$qna51',
                                qna52='$qna52',
                                qna53='$qna53',
                                qna54='$qna54',
                                qna55='$qna55',
                                qna56='$qna56',
                                qna57='$qna57',
                                qna58='$qna58',
                                -- section11
                                qna59='$qna59',
                                qna60='$qna60',
                                qna61='$qna61'
                                WHERE id=$id

                        ";

                        //Execute the query
                        $res2 = mysqli_query($conn, $sql2);

                        //CHECK whether update or not

                        if($res2==TRUE)
                                {
                                    // Response updated
                                    $_SESSION['update'] = "<div class='success '>Response Updated Successfully.</div>";
                                    header('Location: manage-response.php');
                                }
                                else
                                {
                                    //Failed to Update Response
                                   
                                    $_SESSION['update'] = "<div class='error '>Failed to Update Response.</div>";
                                    header('location:'.SITEURL.'admin/manage-response.php');
                                }

                }


        ?>





        <!-- Update response Form Start -->
        <form action="" method="POST" >

            
            

            <div class=" form-content form-section form-container">              
                    
                        
                        <label>User Name:</label>
                        <td><b> <?php echo $username; ?></b></td>
                        <br>
                
                        <tr>
                        <label>Status:</label>
                        <td>
                                <select name="status" class="select-status">
                                    <option <?php if($status=="Arrived"){echo"selected";} ?> value="Arrived">Arrived</option>
                                    <option <?php if($status=="On Review"){echo"selected";} ?> value="On Review">On Review</option>
                                    <option <?php if($status=="Delivered"){echo"selected";} ?> value="Approved">Approved</option>
                                    <option <?php if($status=="Rejected"){echo"selected";} ?> value="Rejected">Rejected</option>
                                </select> 
                            
                        </td>
                        <div class="upload-container">
                                    <div class="upload">
                                        

                                        <div class="image-wrapper">
                                            <img src="../uploads/<?php echo $image; ?>" id="image" onclick="openModal(this.src)"> 
                                            <!-- <img src="<?php echo (isset($imagePath)) ? $imagePath : 'img/default-image.jpg'; ?>" id="image" onclick="openModal(this.src)"> -->
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
                                            <img src="../uploads-n1/<?php echo $imagen1; ?>" id="nagrita-front-image" onclick="openModal(this.src)"> 
                                            <!-- <img src="<?php echo (isset($imagen1path)) ? $imagen1path : 'img/default-id1.png'; ?>" id="image" onclick="openModal(this.src)">                                           -->
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
                                            <img src="../uploads-n2/<?php echo $imagen2; ?>" id="nagrita-back-image" onclick="openModal('nagrita-back', this.src)">
                                            <!-- <img src="<?php echo (isset($imagen2path)) ? $imagen2path : 'img/default-id2.png'; ?>" id="image" onclick="openModal(this.src)"> -->
                                        </div>
                                        <div class="rightRound-2" id="nagrita-back-upload">
                                            <input type="file" name="nagritaBackImg" id="nagritaBackImg" accept=".jpg, .jpeg, .png">
                                            <i class="fa fa-camera"></i>
                                        </div>   
                                        <!-- <br> -->
                                        <p>Nagrita Back Face</p>                     
                                    </div>
                                </div>
                        <br>
                            <b># परिचय</b><br>
                            <label>नाम:</label>
                            <input type="text" id="name" name="name" value="<?php echo $name; ?>">
                            <label>ठेगाना:</label>
                            <input type="text" id="address" name="address" value="<?php echo $address; ?>"><br>
                            <!-- <label>पोस्टबक्स न:</label>
                            <input type="text" id="post_box" name="post_box" value="<?php echo $post_box; ?>"> -->
                            <!-- <label>टेलिफोन न:</label>
                            <input type="text" id="tel_no" name="tel_no" value="<?php echo $tel_no; ?>"><br> -->
                            <label>मोबाइल न:</label>
                            <input type="text" id="mob_no" name="mob_no" value="<?php echo $mob_no; ?>">
                            <label>इमेल:</label>
                            <input type="text" id="email" name="email" value="<?php echo $email; ?>"><br>
                            <!-- <label>फ्याक्स न:</label>
                            <input type="text" id="fax_no" name="fax_no" value="<?php echo $fax_no; ?>"> -->

                            <br>
                            <br>

                            <b>१. दरखास्त पेश गने फर्म वा कम्पनीको :</b><br>
                            <label>नाम:</label>
                            <input type="text" id="qna1" name="qna1" value="<?php echo isset($row['qna1']) ? $row['qna1'] : ''; ?>">
                            <label>ठेगाना:</label>
                            <input type="text" id="qna2" name="qna2" value="<?php echo isset($row['qna2']) ? $row['qna2'] : ''; ?>"><br>
                            <label>पोस्टबक्स न:</label>
                            <input type="text" id="qna3" name="qna3" value="<?php echo isset($row['qna3']) ? $row['qna3'] : ''; ?>">                
                            <label>टेलिफोन न:</label>
                            <input type="text" id="qna4" name="qna4" value="<?php echo isset($row['qna4']) ? $row['qna4'] : ''; ?>"><br>
                            <label>मोबाइल न:</label>
                            <input type="text" id="qna6" name="qna6" value="<?php echo isset($row['qna6']) ? $row['qna6'] : ''; ?>">
                            <label>इमेल:</label>
                            <input type="text" id="qna7" name="qna7" value="<?php echo isset($row['qna7']) ? $row['qna7'] : ''; ?>"><br>
                            <label>फ्याक्स न:</label>
                            <input type="text" id="qna8" name="qna8" value="<?php echo isset($row['qna8']) ? $row['qna8'] : ''; ?>">
                            <br>
                            <br>

                          
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
                    <b>३. सम्पर्कको लागि फर्म वा कम्पनीको आधिकाऱीक :</b><br>
                            <label>नाम:</label>
                            <input type="text" id="qna9" name="qna9" value="<?php echo isset($row['qna9']) ? $row['qna9'] : ''; ?>">
                            <label>ठेगाना:</label>
                            <input type="text" id="qna10" name="qna10" value="<?php echo isset($row['qna10']) ? $row['qna10'] : ''; ?>"><br>
                            <label>पोस्टबक्स न:</label>
                            <input type="text" id="qna101" name="qna101" value="<?php echo isset($row['qna101']) ? $row['qna101'] : ''; ?>">
                            <label>टेलिफोन न:</label>
                            <input type="text" id="qna11" name="qna11" value="<?php echo isset($row['qna11']) ? $row['qna11'] : ''; ?>"><br>
                            <label>मोबाइल न:</label>
                            <input type="text" id="qna12" name="qna12" value="<?php echo isset($row['qna12']) ? $row['qna12'] : ''; ?>">
                            <label>इमेल:</label>
                            <input type="text" id="qna13" name="qna13" value="<?php echo isset($row['qna13']) ? $row['qna13'] : ''; ?>"><br>
                            <label>फ्याक्स न:</label>
                            <input type="text" id="qna14" name="qna14" value="<?php echo isset($row['qna14']) ? $row['qna14'] : ''; ?>">
                            <br>
                            <br>
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
                            <b>५. ईजाजतपत्र लिन चाहेको वर्ग :(घ) वर्ग </b>
                             <!-- <br><br> -->
                            <!-- <input type="text" id="qna20" name="qna20" value="<?php echo isset($row['qna20']) ? $row['qna20'] : ''; ?>"> -->
                            <br>
                            <br>
                            <b>६. समुहिकरण हुन चाहेको समूह :</b>
                            <input type="samuha" id="qna21" name="qna21" value="<?php echo isset($row['qna21']) ? $row['qna21'] : ''; ?>">
                            <br>
                            <br>
                            <div id="section7" class="form-section sources">
                            <b>७. आर्थिक श्रोतको विवरण :</b><br>
                            <p><a>(क) स्थाही ओभरड्राफ्ट:-</a></p>
                            <label id="amt-label">रकम रू:-</label>
                            <input type="text" id="qna22" name="qna22" value="<?php echo isset($row['qna22']) ? $row['qna22'] : ''; ?>">
                            <label id="bank-label">बैंक वा वितिय सस्थाको नाम:-</label>
                            <input type="text" id="qna23" name="qna23" value="<?php echo isset($row['qna23']) ? $row['qna23'] : ''; ?>"><br>
                            <p><a>(ख) मुद्ती खाता:-</a></p>
                            <label id="amt-label">रकम रू:-</label>
                            <input type="text" id="qna24" name="qna24" value="<?php echo isset($row['qna24']) ? $row['qna24'] : ''; ?>">
                            <label id="bank-label">बैंक वा वितिय सस्थाको नाम:-</label>
                            <input type="text" id="qna25" name="qna25" value="<?php echo isset($row['qna25']) ? $row['qna25'] : ''; ?>"><br>
                            <p><a>(ग) चल्ती खाता:-</a></p>
                            <label id="amt-label">रकम रू:-</label>
                            <input type="text" id="qna26" name="qna26" value="<?php echo isset($row['qna26']) ? $row['qna26'] : ''; ?>">
                            <label id="bank-label">बैंक वा वितिय सस्थाको नाम:-</label>
                            <input type="text" id="qna27" name="qna27" value="<?php echo isset($row['qna27']) ? $row['qna27'] : ''; ?>"><br><br>
                            <p><a>(घ) बचत खाता:-</a></p>
                            <label id="amt-label">रकम रू:-</label>
                            <input type="text" id="qna28" name="qna28" value="<?php echo isset($row['qna28']) ? $row['qna28'] : ''; ?>">
                            <label id="bank-label">बैंक वा वितिय सस्थाको नाम:-</label>
                            <input type="text" id="qna29" name="qna29" value="<?php echo isset($row['qna29']) ? $row['qna29'] : ''; ?>">
                            </div>
                            <br>
                            <br>
                            <div id="section8" class="form-section">
                            <b>८. कामदारको विवरण :</b><br>
                            <label>प्राबिधिक:-</label>
                            <input type="prabhdik" id="qna30" name="qna30" value="<?php echo isset($row['qna30']) ? $row['qna30'] : ''; ?>"><br>
                            <label>अप्राविधिक:-</label>
                            <input type="aprabhdik" id="qna31" name="qna31" value="<?php echo isset($row['qna31']) ? $row['qna31'] : ''; ?>"><br>
                            <label>अन्य:-</label>
                            <input type="other" id="qna32" name="qna32" value="<?php echo isset($row['qna32']) ? $row['qna32'] : ''; ?>">
                            </div>
                            <br>
                            <br>
                            <div id="section9" class="form-section">
                            <b>९. औजारको विवरण :</b><br>
                            <br><b>१.</b><br>
                            <label id="num-label">सि.नं. २.:-</label>
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
                            </div>
                            <br>
                            <br>
                            <div id="section10" class="form-section">
                            <b>१०. कामको विवरण :</b><br>
                            <br><b>१.</b><br>
                            <label id="work-label">सि.नं. १.:-</label>
                            <input type="" id="qna47" name="qna47" value="<?php echo isset($row['qna47']) ? $row['qna47'] : ''; ?>"><br>
                            <label id="work-label">निर्माण सम्बन्धी कामको प्रकार १.:-</label>
                            <input type="" id="qna48" name="qna48" value="<?php echo isset($row['qna48']) ? $row['qna48'] : ''; ?>"><br>
                            <label id="work-label">काम गरेको साल १.:-</label>
                            <input type="" id="qna49" name="qna49" value="<?php echo isset($row['qna49']) ? $row['qna49'] : ''; ?>">
                            <label id="cash-label">रकम १.:-</label>
                            <input type="" id="qna50" name="qna50" value="<?php echo isset($row['qna50']) ? $row['qna50'] : ''; ?>"><br>
                            <label id="work-label">ठेक्का दाता कार्यालयको नाम १.:-</label>
                            <input type="" id="qna51" name="qna51" value="<?php echo isset($row['qna51']) ? $row['qna51'] : ''; ?>"><br>
                            <label id="work-label">कामको अवस्था प्रगति प्रतिशतमा १.:-</label>
                            <input type="" id="qna52" name="qna52" value="<?php echo isset($row['qna52']) ? $row['qna52'] : ''; ?>"><br>
                            <b>२.</b><br>
                            <label id="work-label">सि.नं. २.:-</label>
                            <input type="" id="qna53" name="qna53" value="<?php echo isset($row['qna53']) ? $row['qna53'] : ''; ?>"><br>
                            <label id="work-label">निर्माण सम्बन्धी कामको प्रकार २.:-</label>
                            <input type="" id="qna54" name="qna54" value="<?php echo isset($row['qna54']) ? $row['qna54'] : ''; ?>"><br>
                            <label id="work-label">काम गरेको साल २.:-</label>
                            <input type="" id="qna55" name="qna55" value="<?php echo isset($row['qna55']) ? $row['qna55'] : ''; ?>">
                            <label id="cash-label">रकम २.:-</label>
                            <input type="" id="qna56" name="qna56" value="<?php echo isset($row['qna56']) ? $row['qna56'] : ''; ?>"><br>
                            <label id="work-label">ठेक्का दाता कार्यालयको नाम २.:-</label>
                            <input type="" id="qna57" name="qna57" value="<?php echo isset($row['qna57']) ? $row['qna57'] : ''; ?>"><br>
                            <label id="work-label">कामको अवस्था प्रगति प्रतिशतमा २.:-</label>
                            <input type="" id="qna58" name="qna58" value="<?php echo isset($row['qna58']) ? $row['qna58'] : ''; ?>"><br>
                            </div> 
                            <br>
                            <br>
                            <div id="section11" class="form-section">
                            <b>११. कर चुक्ता गरेको प्रमाण कागजात :</b><br>
                            <label>(क).:-</label>
                            <input type="" id="qna59" name="qna59" value="<?php echo isset($row['qna59']) ? $row['qna59'] : ''; ?>"><br>
                            <label>(ख).:-</label>
                            <input type="" id="qna60" name="qna60" value="<?php echo isset($row['qna60']) ? $row['qna60'] : ''; ?>"><br>
                            <label>(ग).:-</label>
                            <input type="" id="qna61" name="qna61" value="<?php echo isset($row['qna61']) ? $row['qna61'] : ''; ?>"><br><br>
                            </div> 

                            <br>
                <br>
                    <imput type="hidden"name="id"value="<?php echo $id; ?>" >
                            <input type="submit" name="submit" value="Update Response" class="btn-secondary"style="margin-left: 55;">
                           
                            <a href="<?php echo SITEURL; ?>admin/delete-response.php?id=<?php echo $id; ?>"
                        class="btn-danger" style="margin-left: 10%;">Delete Response</a>

                          
                   
                
            </div>
            </form>



        
        <!-- Update response Form End -->

        

    </div>
</div>





<!-- Footer Section Starts -->
<?php include('partials/footer.php'); ?>