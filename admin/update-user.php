<?php include ('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update User</h1>
        </br>

        
    <?php
      // Check whether the id is set or not
      if(isset($_GET['id'])) {
        // Get the id and all other details
        // echo "getting the data";
        $id = $_GET['id'];

        // Create SQL Query to get all other details
        $sql2 = "SELECT * FROM tbl_user WHERE id=$id";

        // Execute the query
        $res2 = mysqli_query($conn, $sql2);

        // Check if query execution was successful
        if ($res2) {
          // Get the value based on the executed query
          $row2 = mysqli_fetch_assoc($res2);

          if ($row2) {
            // Get all the data of the selected user
            $fullname = $row2['fullname'];
            $username = $row2['username'];
            $email = $row2['email'];
            $phoneno = $row2['phoneno'];
          } else {
            // Handle case where data is not fetched (e.g., display error message)
            echo "<div class='error'>Failed to fetch user data.</div>";
          }
        } else {
          // Handle query execution failure
          echo "<div class='error'>Error executing query: " . mysqli_error($conn) . "</div>";
        }
      } else {
        // Redirect to manage user
        header('location:' . SITEURL . 'admin/manage-user.php');
      }
    ?>





        <!-- Update user Form Start -->
        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Fullname: </td>
                    <td>
                        <input type="text" name="fullname" value="<?php echo $fullname; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td>Email: </td>
                    <td>
                        <input type="text" name="email" value="<?php echo $email; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Phone No.: </td>
                    <td>
                        <input type="text" name="phoneno" value="<?php echo $phoneno; ?>">
                    </td>
                </tr>
                <!-- <tr>
                    <td>password: </td>
                    <td>
                        <input type="text" name="fullname" value="<?php echo $title; ?>">
                    </td>
                </tr> -->
                
                <tr>
                    <td colspan="2">
                        <!-- //delete colspan="2" in need -->
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update User" class="btn-secondary">
                    </td>
                </tr>




            </table>

        </form>
        <!-- Update User Form End -->

        <!-- Update funtion work -->
        <?php 

//Check whether the submit Button is Clicked or Not
if(isset($_POST['submit']))
{
    // echo "clicked";

    // 1. Get the value from form
    $id = $row['id'];
    $fullname = $row['fullname'];
    $username = $row['username'];
    $email = $row['email'];
    $phoneno = $row['phoneno'];
    
    

    //2. Update the Database
                $sql3 = "UPDATE tbl_user SET
                fullname='$fullname',
                username='$username',
                email=$email,
                phoneno='$phoneno'
                WHERE id=$id
                    ";
            //Execute the Query
            $res3 = mysqli_query($conn, $sql3);
    
    //4. Redirect to Manage Category with Message

        //Check whether executed or not

        if($res3==true)
        {
            //Food Updated
            $_SESSION['update'] = "<div class='success'>User Updated Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-user.php');
        }
        else
        {
            //Failed to update user
            $_SESSION['update'] = "<div class='error'>Failed to Update user.</div>";
            header('location:'.SITEURL.'admin/manage-user.php');
        }


    
    


}


?>

    </div>
</div>





<!-- Footer Section Starts -->
<?php include('partials/footer.php'); ?>