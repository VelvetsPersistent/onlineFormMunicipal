<?php include ('partials/menu.php'); ?>

<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>MANAGE Forms</h1>

        <br /><br />
        <?php 
            if(isset($_SESSION['add'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['add'];    //Displaying Session Message
              unset($_SESSION['add']); //Removing Session Message
                
            }
            if(isset($_SESSION['remove'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['remove'];    //Displaying Session Message
              unset($_SESSION['remove']); //Removing Session Message
                
            }
            if(isset($_SESSION['delete'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['delete'];    //Displaying Session Message
              unset($_SESSION['delete']); //Removing Session Message
                
            }
            if(isset($_SESSION['no-form-found'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['no-form-found'];    //Displaying Session Message
              unset($_SESSION['no-form-found']); //Removing Session Message
                
            }
            if(isset($_SESSION['update'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['update'];    //Displaying Session Message
              unset($_SESSION['update']); //Removing Session Message
                
            }
            if(isset($_SESSION['upload'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['upload'];    //Displaying Session Message
              unset($_SESSION['upload']); //Removing Session Message
                
            }
            if(isset($_SESSION['failed-remove'])) // Checking Whether the Session is Set or Not
            {
              echo $_SESSION['failed-remove'];    //Displaying Session Message
              unset($_SESSION['failed-remove']); //Removing Session Message
                
            }
        ?>
        <br /><br />
        <!-- Button to add Form -->
        <a href="<?php echo SITEURL; ?>admin/add-form.php" class="btn-primary">Add Forms</a>

        <br /><br />

        <table class="tbl-full">
            <tr class="block-separator">
            
                <th>S.N.</th>
                <th>Title</th>
                <th>Objective</th>
                <th>Featured</th>
                <th>Actions</th>
                <th>Responses</th>
            </tr>

            <?php 

                //Query to get all categories from database
                $sql = "SELECT * FROM tbl_forms";

                //execute query
                $res = mysqli_query($conn, $sql);

                //count rows
                $count = mysqli_num_rows($res);

                //create serial number variable and assign value as 1
                $sn=1;

                //check whether we have data in database or not
                if($count>0)
                {
                    //we have data in database
                    //get the data and display
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $form_id = $row['id'];
                        $form_name = $row['title'];
                        // $Objective = $row['objective'];
                        // $featured = $row['featured'];
                        // $active = $row['active'];
                        // $response = $row['response'];

                ?>
            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $form_name; ?></td>

                <td>
                    <?php 
                    // echo $image_name; 
                    
                    
                    ?>
                </td>

                <!-- <td><?php echo $featured; ?></td>
                <td><?php echo $active; ?></td> -->
                <!-- <td>
                    <a href="<?php echo SITEURL; ?>admin/update-form.php?id=<?php echo $id; ?>"
                        class="btn-secondary">Update Form</a>
                    <a href="<?php echo SITEURL; ?>admin/delete-form.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>"
                        class="btn-danger">Delete Form</a>
                </td> -->

            </tr>
            <?php




                    }
                }
                else
                {
                    //we do not have data
                    //we will display the message inside table
            ?>
            <tr>
                <td colspan="6">
                    <div class="error">No Form Added.</div>
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