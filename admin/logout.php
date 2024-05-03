
<?php
        //include constants file
        include('../connection.php');
        //1. Destroy the session
        session_destroy();//unsets ($_SESSION['user']);
        //2. Redirect to the login page
        header('location:'.SITEURL.'admin/login.php');
?>