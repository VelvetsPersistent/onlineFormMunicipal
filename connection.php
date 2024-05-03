<?php
    //Start Session
    session_start();
    // Database Info
    $db_host = "localhost";
    $db_name = "onlineform";
    $db_user = "root";
    $db_password = "";
    define('SITEURL','http://localhost/onlineForm/');

    try {
            $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
        
            // Check connection
            if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
            }
        
            // echo "Connected successfully!";
            // echo "*";
    
        } catch (Exception $e) {
            echo "Connection error: " . $e->getMessage();
        }



    //   $conn = null;
?>
