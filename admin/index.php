<?php include ('partials/menu.php'); ?>

<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>DASHBOARD</h1>
</br>

        <?php 
            if(isset($_SESSION['login']))
            {
              echo $_SESSION['login'];    //Displaying Session Message
              unset($_SESSION['login']); //Removing Session Message
                
            }
            ?>
            </br>

        <div class="col-4 text-center">

            <?php 
                //SQL Query
                $sql = "SELECT * FROM tbl_forms";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count rows
                $count = mysqli_num_rows($res);
            
            ?>


            <h1><?php echo $count; ?></h1>
            <br />
            Forms
        </div>

        <div class="col-4 text-center">
        <?php 
                //SQL Query
                $sql2 = "SELECT * FROM tbl_user";
                //Execute Query
                $res2 = mysqli_query($conn, $sql2);
                //Count rows
                $count2 = mysqli_num_rows($res2);
            
            ?>
            <h1><?php echo $count2; ?></h1>
            <br />
            Users
        </div>

        <div class="col-4 text-center">
        <?php 
                //SQL Query
                // $sql3 = "SELECT * FROM tbl_response";
                $sql3 = "SELECT * FROM form_1";
                //Execute Query
                $res3 = mysqli_query($conn, $sql3);
                //Count rows
                $count3 = mysqli_num_rows($res3);
            
            ?>
            <h1><?php echo $count3; ?></h1>
            <br />
            Total Responses
        </div>

        <div class="col-4 text-center">
            
           
            <?php
                // SQL Query
                $sql4 = "SELECT COUNT(*) FROM form_1 WHERE status = 'Approved'";
                // Execute Query
                $res4 = mysqli_query($conn, $sql4);
                // Fetch the result as an associative array
                $count4 = mysqli_fetch_assoc($res4);
                
            ?>
            <h1><?php echo $count4['COUNT(*)']; ?></h1>

            <br />
            Form Approved
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Main Content Section Ends -->

<?php include('partials/footer.php'); ?>





