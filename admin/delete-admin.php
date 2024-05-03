<?php 

        //Include constants.php file here
        include('../connection.php');

        // 1. get the ID of the Admin to be deleted
        $id = $_GET['id'];


        // 2.Create SQL Query to Delete Admin
        $sql = "DELETE FROM tbl_admin WHERE id=$id";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Check whether the query executed successfully or not
        if($res==TRUE)
        {
                //Query Executed Successfully and Admin Deleted
                //echo "Admin Deleted";
                //Create Session Variable to Disply message
                $_SESSION['delete'] = "<div class='success'> Admin Deleted Successfully. </div>";
                //Redirect to Manage Admin page
                header('location:'.SITEURL.'admin/manage-admin.php');
        }
        else
        {
                //Failed to Delete Admin
                //echo "Failed to Delete Admin";
                //Create Session Variable to Disply message
                $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later. </div>";
                //Redirect to Manage Admin page
                header('localhost:'.SITEURL.'admin/manage-admin.php');
        }

        // 3. Redirect to manage Admin page with message (success/error)



?>

