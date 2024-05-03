<?php include ('partials/menu.php'); ?>

<!-- Main Content Section Starts -->
<div class="main-content" >
    <div class="wrapper">
        <h1>MANAGE Response</h1>



        <br /><br />

        <?php 
            if(isset($_SESSION['update'])) // Checking Whether the Session is Set or Not
            {
            echo $_SESSION['update'];    //Displaying Session Message
            unset($_SESSION['update']); //Removing Session Message

            if(isset($_SESSION['delete']))
            {
              echo $_SESSION['delete'];    //Displaying Session Message
              unset($_SESSION['delete']); //Removing Session Message
                
            }
                
            }

        ?>
        <br />
        <div style="overflow-x: auto;">
            <table class="tbl-full">
            <tr class="block-separator">
            <!-- Block 1 -->
            <th>S.N.</th>
            <th>Username</th>
            <th>Status</th>
           
            
            
            <th>Actions</th>
        </tr>

                <?php 

                    //Get all the Forms from database
                    $sql = "SELECT * FROM form_1 ORDER BY id DESC"; //Display the latest Form 
                    //execute Query
                    $res = mysqli_query($conn, $sql);
                    //Count the rows
                    $count = mysqli_num_rows($res);

                    $sn = 1;

                    if($count>0)
                    {
                        //Form Available
                        while($row=mysqli_fetch_assoc($res))
                        {
                            //Get all the Form details
                            $id=$row['id'];
                            $username=$row['username'];
                            $status=$row['status'];
                            


                            ?>
                                    <tr>
                                        <td><?php echo $sn++; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td>
                                        <?php
                                        //Arrived , On Review, Approved, Rejected
                                        if($status == "") {
                                            $status = "Arrived";
                                        }
                                        if($status=="Arrived")
                                        {
                                            echo "<label style ='color: blue;'>$status</label>";
                                        }
                                        else if($status=="On Review")
                                        {
                                            echo "<label style ='color: orange;'>$status</label>";
                                        }
                                        else if($status=="Approved")
                                        {
                                            echo "<label style ='color: green;'>$status</label>";
                                        }
                                        else if($status=="Rejected")
                                        {
                                            echo "<label style ='color: red;'>$status</label>";
                                        }
                                    
                                        
                                        
                                        ?></td>
                                        
                                        

                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-response.php?id=<?php echo $id; ?>" class="btn-secondary">Update Response</a>
                                            
                                        </td>

                                    </tr>

                            <?php
                        }
                    }
                    else
                    {
                        //Form not available
                        echo"<tr><td colspan='12' class='error'>Form not Available.</td></tr>";
                    }
                
                ?>





            </table>
        </div>
    </div>
</div>
<!-- Main Content Section Ends -->

<!-- Footer Section Starts -->
<?php include('partials/footer.php'); ?>

