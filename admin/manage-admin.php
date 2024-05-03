<?php include ('partials/menu.php'); ?>

<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>MANAGE ADMIN</h1>
        <br />

        <?php 
            if(isset($_SESSION['add']))
            {
              echo $_SESSION['add'];    //Displaying Session Message
              unset($_SESSION['add']); //Removing Session Message
                
            }

            if(isset($_SESSION['delete']))
            {
              echo $_SESSION['delete'];    //Displaying Session Message
              unset($_SESSION['delete']); //Removing Session Message
                
            }
            if(isset($_SESSION['update']))
            {
              echo $_SESSION['update'];    //Displaying Session Message
              unset($_SESSION['update']); //Removing Session Message
            }
            if(isset($_SESSION['user-not-found']))
            {
              echo $_SESSION['user-not-found'];    //Displaying Session Message
              unset($_SESSION['user-not-found']); //Removing Session Message
            }
            if(isset($_SESSION['psd-not-match']))
            {
              echo $_SESSION['psd-not-match'];    //Displaying Session Message
              unset($_SESSION['psd-not-match']); //Removing Session Message
            }
            
            if(isset($_SESSION['change-psd']))
            {
              echo $_SESSION['change-psd'];    //Displaying Session Message
              unset($_SESSION['change-psd']); //Removing Session Message
            }
        ?>
        <br /><br /><br />

        <!-- Button to add Admin -->
        <a href="add-admin.php" class="btn-primary">Add Admin</a>

        <br /><br />

        <table class="tbl-full">
            <tr class="block-separator">
                <th>S.N.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>

            <?php 
                //Query to get all Admin
                $sql = "SELECT * FROM tbl_admin";
                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //check whether the query is executed or not
                if($res==TRUE)
                {
                    // Count Rows to check whether we have data in database or not
                    $count = mysqli_num_rows($res); // function to get all the rows in database

                    $sn=1; //create a variable and assign the value 

                    //check the num of rows
                    if($count>0)
                    {
                        //we have data in database
                        while($rows=mysqli_fetch_assoc($res))
                        {
                            //using while loop to get all the data from database
                            //and while liio will run as long as we have data in database

                            //get individual data
                            $id=$rows['id'];
                            $full_name=$rows['full_name'];
                            $username=$rows['username'];

                            //Displays the values in the table
            ?>

            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $full_name; ?></td>
                <td><?php echo $username; ?></td>
                <td>
                    <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>"
                        class="btn-primary">Change Password</a>
                    <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>"
                        class="btn-secondary">Update</a>
                    <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>"
                        class="btn-danger">Delete</a>
                </td>

            </tr>
            <?php


                        }
                    }
                    else
                    {
                        //we do not have data in database      
                    }
                }
            
            ?>



        </table>
    </div>
</div>
<!-- Main Content Section Ends -->

<!-- Footer Section Starts -->
<?php include('partials/footer.php'); ?>