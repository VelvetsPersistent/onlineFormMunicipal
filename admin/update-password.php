<?php include ('partials/menu.php'); ?>



<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        </br>


        <?php 
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                }
        
        ?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Current Password:</td>
                    <td>
                        <input type="password" name="current_password" placeholder="Old Password">
                    </td>
                </tr>
                <tr>
                    <td>New Password:</td>
                    <td>
                        <input type="password" name="new_password" placeholder="New Password">
                    </td>
                </tr>

                <tr>
                    <td>Confirm Password:</td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                    </td>
                </tr>


                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>

<?php 

    // Check whether the Submit Button is Clicked or not
    if(isset($_POST['submit']))
    {
         // echo "button clicked";
        // 1. Get all the data from form
         $id=$_POST['id'];
         $current_password = $_POST['current_password'];
         $new_password = $_POST['new_password'];
         $confirm_password = $_POST['confirm_password'];
         


        // 2. check whether the user with current ID and Current Password exist or not

        $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";
            
        //Execute the Query
         $res = mysqli_query($conn, $sql);

         if($res==true)
         {
             //check whether data is availabe or not
             $count=mysqli_num_rows($res);

             if($count==1)
             {
                    //user exists and password can be changed
                 // echo "User Found";
                    //Check whether the new password and confirm password match or not
                    If($new_password==$confirm_password)
                    {
                        //update the Password
                        // echo"password Matched";
                        $sql2 = "UPDATE tbl_admin SET
                            password = '$new_password'
                            WHERE id = $id
                        ";
                        //Execute the Query
                        $res2 = mysqli_query($conn, $sql2);

                        //Check Whether the query executed or not
                        if($res2==true)
                        {
                            //Dispaly Success Message
                            //Redirect to Manage Admin page
                            $_SESSION['change-psd'] = "<div class='success'>Password Changed Successfully.</div>";
                            //Redirect the User 
                            header('location:'.SITEURL.'admin/manage-admin.php');

                        }
                        else
                        {
                            //display Error mesasge
                            //Redirect to Manage Admin page
                            $_SESSION['change-psd'] = "<div class='error'>Failed to Change Password.</div>";
                            //Redirect the User 
                            header('location:'.SITEURL.'admin/manage-admin.php');
                        }

                    }
                    else
                    {
                        //Redirect to Manage Admin page
                        $_SESSION['psd-not-match'] = "<div class='error'>Password Did Not Match.</div>";
                        //Redirect the User 
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
             }
             else
             {
                 //user doesnt exist set message and redirect
                 $_SESSION['user-not-found'] = "<div class='error'>User Not Found.</div>";
                 //Redirect to Manage Admin Page
                 header('location:'.SITEURL.'admin/manage-admin.php');
             }
         }
            

        
    }


?>


<!-- Footer Section Starts -->
<?php include('partials/footer.php'); ?>