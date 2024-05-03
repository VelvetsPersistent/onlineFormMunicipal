<?php include ('partials/menu.php'); ?>

<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>MANAGE Users</h1>

        <br /><br />
        <br /><br />


        <!-- Button to add Food -->

        <a href="<?php echo SITEURL; ?>admin/add-user.php" class="btn-primary">Add Users</a>

        <br /><br />

        <?php 
            if(isset($_SESSION['add'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['add'];    //Displaying Session Message
              unset($_SESSION['add']); //Removing Session Message
                
            }
            if(isset($_SESSION['delete'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['delete'];    //Displaying Session Message
              unset($_SESSION['delete']); //Removing Session Message
                
            }
            if(isset($_SESSION['remove'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['remove'];    //Displaying Session Message
              unset($_SESSION['remove']); //Removing Session Message
                
            }
            if(isset($_SESSION['unauthorize'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['unauthorize'];    //Displaying Session Message
              unset($_SESSION['unauthorize']); //Removing Session Message
                
            }
            if(isset($_SESSION['upload'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['upload'];    //Displaying Session Message
              unset($_SESSION['upload']); //Removing Session Message
                
            }
            if(isset($_SESSION['remove-failed'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['remove-failed'];    //Displaying Session Message
              unset($_SESSION['remove-failed']); //Removing Session Message
                
            }
            if(isset($_SESSION['update'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['update'];    //Displaying Session Message
              unset($_SESSION['update']); //Removing Session Message
                
            }
            
        ?>

        <table class="tbl-full">
            <tr class="block-separator">
                <th>S.N.</th>
                <th>Full Name</th>
                <th>Username</th>
                <!-- <th>Photo</th> -->
                <th>Email</th>
                <th>Phone No.</th>
                <th>Actions</th>
            </tr>

            <?php 

                //Query to get all user from database
                $sql = "SELECT * FROM tbl_user";

                //execute query
                $res = mysqli_query($conn, $sql);

                //count rows
                $count = mysqli_num_rows($res);

                //create serial number variable and assign value as 1
                $sn=1;

                //check whether we have data in database or not, user check
                if($count>0)
                {
                    //we have Food in database
                    //get the user from database and display
                    while($row=mysqli_fetch_assoc($res))
                    {   
                        // get values for individual column
                        $id = $row['id'];
                        $fullname = $row['fullname'];
                        $username = $row['username'];
                        $email = $row['email'];
                        $phoneno = $row['phoneno'];
                        // $active = $row['active'];

            ?>
            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $fullname; ?></td>
                <td><?php echo $username; ?></td>
                <!-- <td>
                    photo
                </td> -->
                <td><?php echo $email; ?></td>
                <td><?php echo $phoneno; ?></td>
                
                <td>
                    <a href="<?php echo SITEURL; ?>admin/update-user.php?id=<?php echo $id; ?>"
                        class="btn-secondary">Update</a>
                    <a href="<?php echo SITEURL; ?>admin/delete-user.php?id=<?php echo $id; ?>"
                        class="btn-danger">Delete</a>
                </td>

            </tr>
            <?php
                    }
                }
                else
                {
                    //we do not have user
                    //we will display the message inside table
            ?>
            <tr>
                <td colspan="7">
                    <div class="error">User Not Added Yet.</div>
                </td>
            </tr>


            <?php
            
                


            
                }
            
        ?>




        </table>
    </div>
</div>
<!-- Main Content Section Ends -->

<!-- Footer Section Starts -->
<?php include('partials/footer.php'); ?>