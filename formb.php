<?php
    include("connection.php");


// All Data at once
if(isset($_POST['submitall'])){
        // Get username from session
        $username = $_SESSION['user'];
        
        
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
    
        // Check if the user has already submitted data
        $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
        if(mysqli_num_rows($existingData) > 0) {
            // If user exists, update the existing row
            $sql = "UPDATE form_1 SET
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

                    WHERE username='$username'";
        } else {
            // If user doesn't exist, insert a new row
            $sql = "INSERT INTO form_1(qna1, qna2, qna3, qna4, qna6, qna7, qna8, qna9, qna10, qna11, qna12, qna13, qna14, qna15, qna16, qna17, qna18, qna19,  qna21, qna22, qna23, qna24, qna25, qna26, qna27, qna28, qna29, qna30, qna31, qna32, qna33, qna34, qna35, qna36, qna37, qna38, qna39, qna40, qna41, qna42, qna43, qna44, qna45, qna46, qna47, qna48, qna49, qna50, qna51, qna52, qna53, qna54, qna55, qna56, qna57, qna58, qna59, qna60, qna61, qna101)
                    VALUES ('$qna1', '$qna2', '$qna3', '$qna4', '$qna6', '$qna7', '$qna8', '$qna9', '$qna10', '$qna11', '$qna12', '$qna13', '$qna14', '$qna15', '$qna16', '$qna17', '$qna18', '$qna19',  '$qna21', '$qna22', '$qna23', '$qna24', '$qna25', '$qna26', '$qna27', '$qna28', '$qna29', '$qna30', '$qna31', '$qna32', '$qna33', '$qna34', '$qna35', '$qna36', '$qna37', '$qna38', '$qna39', '$qna40', '$qna41', '$qna42', '$qna43', '$qna44', '$qna45', '$qna46', '$qna47', '$qna48', '$qna49', '$qna50', '$qna51', '$qna52', '$qna53', '$qna54', '$qna55', '$qna56', '$qna57', '$qna58', '$qna59', '$qna60', '$qna61', '$qna101')";
        }
    
        // Execute SQL query
        if ($conn->query($sql) === TRUE) {     
            // Redirect to another page
            header("Location: formf.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
        }
        
        // Close connection
        $conn->close();
}

// Section wise insertion
// Section 1
if(isset($_POST['submit1'])){
    // Get username from session
    $username = $_SESSION['user'];
    
    
    // Section1 Data
    $qna1 = $_POST["qna1"];
    $qna2 = $_POST["qna2"];
    $qna3 = $_POST["qna3"];
    $qna4 = $_POST["qna4"];
    $qna6 = $_POST["qna6"];
    $qna7 = $_POST["qna7"];
    $qna8 = $_POST["qna8"];
   

    // Check if the user has already submitted data
    $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
    if(mysqli_num_rows($existingData) > 0) {
        // If user exists, update the existing row
        $sql = "UPDATE form_1 SET 
                qna1='$qna1',
                qna2='$qna2',
                qna3='$qna3',
                qna4='$qna4',
                qna6='$qna6',
                qna7='$qna7',
                qna8='$qna8'                
                WHERE username='$username'";
    } else {
        // If user doesn't exist, insert a new row
        $sql = "INSERT INTO form_1(qna1, qna2, qna3, qna4, qna6, qna7, qna8)
                VALUES ('$qna1', '$qna2', '$qna3', '$qna4', '$qna6', '$qna7', '$qna8')";
    }

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {     
        // Redirect to another page
        header("Location: formf.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
    }
    
    // Close connection
    $conn->close();
}
// Section 2
if(isset($_POST['submit2'])){
    // Get username from session
    $username = $_SESSION['user'];

    // Section2 Data
    $company = $_POST['company'];

    // Check if the user has already submitted data
    $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
    if(mysqli_num_rows($existingData) > 0) {
        // If user exists, update the existing row
        $sql = "UPDATE form_1 SET                 
                company='$company'
                WHERE username='$username'";
    } else {
        // If user doesn't exist, insert a new row
        $sql = "INSERT INTO form_1(company)
                VALUES ('$company')";
    }

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {     
        // Redirect to another page
        header("Location: formf.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
    }
    
    // Close connection
    $conn->close();
}
// Section 3
if(isset($_POST['submit3'])){
    // Get username from session
    $username = $_SESSION['user'];

    // Section3 Data
    $qna9 = $_POST["qna9"];
    $qna10 = $_POST["qna10"];
    $qna10 = $_POST["qna101"];
    $qna11 = $_POST["qna11"];
    $qna12 = $_POST["qna12"];
    $qna13 = $_POST["qna13"];
    $qna14 = $_POST["qna14"];

    // Check if the user has already submitted data
    $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
    if(mysqli_num_rows($existingData) > 0) {
        // If user exists, update the existing row
        $sql = "UPDATE form_1 SET                 
                qna9='$qna9',
                qna10='$qna10',
                qna11='$qna11',
                qna12='$qna12',
                qna13='$qna13',
                qna14='$qna14'
                WHERE username='$username'";
    } else {
        // If user doesn't exist, insert a new row
        $sql = "INSERT INTO form_1(qna9, qna10, qna11, qna12, qna13, qna14)
                VALUES ('$qna9', '$qna10', '$qna11', '$qna12', '$qna13', '$qna14')";
    }

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {     
        // Redirect to another page
        header("Location: formf.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
    }
    
    // Close connection
    $conn->close();
}
// Section 4
if(isset($_POST['submit4'])){
    // Get username from session
    $username = $_SESSION['user'];

    // Section4 Data
    $qna15 = $_POST["qna15"];
    $qna16 = $_POST["qna16"];
    $qna17 = $_POST["qna17"];
    $qna18 = $_POST["qna18"];
    $qna19 = $_POST["qna19"];

    // Check if the user has already submitted data
    $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
    if(mysqli_num_rows($existingData) > 0) {
        // If user exists, update the existing row
        $sql = "UPDATE form_1 SET                 
                qna15='$qna15',
                qna16='$qna16',
                qna17='$qna17',
                qna18='$qna18',
                qna19='$qna19'
                WHERE username='$username'";
    } else {
        // If user doesn't exist, insert a new row
        $sql = "INSERT INTO form_1(qna15, qna16, qna17, qna18, qna19)
                VALUES ('$qna15', '$qna16', '$qna17', '$qna18', '$qna19')";
    }

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {     
        // Redirect to another page
        header("Location: formf.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
    }
    
    // Close connection
    $conn->close();
}
// Section 5, No Data.
// if(isset($_POST['submit5'])){
//     // Get username from session
//     $username = $_SESSION['user'];

//     // Section5 Data
//     // $qna20 = $_POST["qna20"];

//     // Check if the user has already submitted data
//     $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
//     if(mysqli_num_rows($existingData) > 0) {
//         // If user exists, update the existing row
//         $sql = "UPDATE form_1 SET                 
//                 qna20='$qna20'
//                 WHERE username='$username'";
//     } else {
//         // If user doesn't exist, insert a new row
//         $sql = "INSERT INTO form_1(qna20)
//                 VALUES ('$qna20')";
//     }

//     // Execute SQL query
//     if ($conn->query($sql) === TRUE) {     
//         // Redirect to another page
//         header("Location: formf.php");
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
//     }
    
//     // Close connection
//     $conn->close();
// }
// Section 6
if(isset($_POST['submit6'])){
    // Get username from session
    $username = $_SESSION['user'];

    // Section6 Data
    $qna21 = $_POST['qna21'];

    // Check if the user has already submitted data
    $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
    if(mysqli_num_rows($existingData) > 0) {
        // If user exists, update the existing row
        $sql = "UPDATE form_1 SET                 
                qna21='$qna21'
                WHERE username='$username'";
    } else {
        // If user doesn't exist, insert a new row
        $sql = "INSERT INTO form_1(qna21)
                VALUES ('$qna21')";
    }

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {     
        // Redirect to another page
        header("Location: formf.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
    }
    
    // Close connection
    $conn->close();
}
// Section 7
if(isset($_POST['submit7'])){
    // Get username from session
    $username = $_SESSION['user'];

    // Section7 Data
    $qna22 = $_POST["qna22"];
    $qna23 = $_POST["qna23"];
    $qna24 = $_POST["qna24"];
    $qna25 = $_POST["qna25"];
    $qna26 = $_POST["qna26"];
    $qna27 = $_POST["qna27"];
    $qna28 = $_POST["qna28"];
    $qna29 = $_POST["qna29"];

    // Check if the user has already submitted data
    $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
    if(mysqli_num_rows($existingData) > 0) {
        // If user exists, update the existing row
        $sql = "UPDATE form_1 SET                 
                qna21='$qna21',
                qna22='$qna22',
                qna23='$qna23',
                qna24='$qna24',
                qna25='$qna25',
                qna26='$qna26',
                qna27='$qna27',
                qna28='$qna28',
                qna29='$qna29'
                WHERE username='$username'";
    } else {
        // If user doesn't exist, insert a new row
        $sql = "INSERT INTO form_1(qna21, qna22, qna23, qna24, qna25, qna26, qna27, qna28, qna29)
                VALUES ('$qna21', '$qna22', '$qna23', '$qna24', '$qna25', '$qna26', '$qna27', '$qna28', '$qna29')";
    }

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {     
        // Redirect to another page
        header("Location: formf.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
    }
    
    // Close connection
    $conn->close();
}
// Section 8
if(isset($_POST['submit8'])){
    // Get username from session
    $username = $_SESSION['user'];

    // Section8 Data
    $qna30 = $_POST["qna30"];
    $qna31 = $_POST["qna31"];
    $qna32 = $_POST["qna32"];

    // Check if the user has already submitted data
    $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
    if(mysqli_num_rows($existingData) > 0) {
        // If user exists, update the existing row
        $sql = "UPDATE form_1 SET                 
                qna30='$qna30',
                qna31='$qna31',
                qna32='$qna32'
                WHERE username='$username'";
    } else {
        // If user doesn't exist, insert a new row
        $sql = "INSERT INTO form_1(qna30, qna31, qna32)
                VALUES ('$qna30', '$qna31', '$qna32')";
    }

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {     
        // Redirect to another page
        header("Location: formf.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
    }
    
    // Close connection
    $conn->close();
}
// Section 9
if(isset($_POST['submit9'])){
    // Get username from session
    $username = $_SESSION['user'];

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

    // Check if the user has already submitted data
    $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
    if(mysqli_num_rows($existingData) > 0) {
        // If user exists, update the existing row
        $sql = "UPDATE form_1 SET                 
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
                qna46='$qna46'
                WHERE username='$username'";
    } else {
        // If user doesn't exist, insert a new row
        $sql = "INSERT INTO form_1(qna33, qna34, qna35, qna36, qna37, qna38, qna39, qna40, qna41, qna42, qna43, qna44, qna45, qna46)
                VALUES ('$qna33', '$qna34', '$qna35', '$qna36', '$qna37', '$qna38', '$qna39', '$qna40', '$qna41', '$qna42', '$qna43', '$qna44', '$qna45', '$qna46')";
    }

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {     
        // Redirect to another page
        header("Location: formf.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
    }
    
    // Close connection
    $conn->close();
}
// Section 10
if(isset($_POST['submit10'])){
    // Get username from session
    $username = $_SESSION['user'];

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

    // Check if the user has already submitted data
    $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
    if(mysqli_num_rows($existingData) > 0) {
        // If user exists, update the existing row
        $sql = "UPDATE form_1 SET                 
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
                qna58='$qna58'
                WHERE username='$username'";
    } else {
        // If user doesn't exist, insert a new row
        $sql = "INSERT INTO form_1(qna47, qna48, qna49, qna50, qna51, qna52, qna53, qna54, qna55, qna56, qna57, qna58)
                VALUES ('$qna47', '$qna48', '$qna49', '$qna50', '$qna51', '$qna52', '$qna53', '$qna54', '$qna55', '$qna56', '$qna57', '$qna58')";
    }

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {     
        // Redirect to another page
        header("Location: formf.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
    }
    
    // Close connection
    $conn->close();
}
// Section 11, at last we will submit all at once
// if(isset($_POST['submit11'])){
//     // Get username from session
//     $username = $_SESSION['user'];

//     // Section11 Data
//     $qna59 = $_POST["qna59"];
//     $qna60 = $_POST["qna60"];
//     $qna61 = $_POST["qna61"];

//     // Check if the user has already submitted data
//     $existingData = mysqli_query($conn, "SELECT * FROM form_1 WHERE username='$username'");
//     if(mysqli_num_rows($existingData) > 0) {
//         // If user exists, update the existing row
//         $sql = "UPDATE form_1 SET                 
//                 qna59='$qna59',
//                 qna60='$qna60',
//                 qna61='$qna61'
//                 WHERE username='$username'";
//     } else {
//         // If user doesn't exist, insert a new row
//         $sql = "INSERT INTO form_1(qna59, qna60, qna61)
//                 VALUES ('$qna59', '$qna60', '$qna61')";
//     }

//     // Execute SQL query
//     if ($conn->query($sql) === TRUE) {     
//         // Redirect to another page
//         header("Location: formf.php");
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error; // Display error message if insertion/update fails                
//     }
    
//     // Close connection
//     $conn->close();
// }






?>


