<?php 

    include ('../connection.php'); 
    include ('login-check.php'); 


?>



<html>

<head>
    <title>Belbari Municipality - Admin Panel</title>
    <link rel="stylesheet" href="../css/admin.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Menu Section Starts -->
    <div class="menu text-center">
        <div class="wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="manage-admin.php">Admin</a></li>
                <li><a href="manage-form.php">Forms</a></li>
                <li><a href="manage-user.php">Users</a></li>
                <li><a href="manage-response.php">Responses</a></li>
                <li><a href="logout.php" class='btn1'>Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- Menu Section Ends -->