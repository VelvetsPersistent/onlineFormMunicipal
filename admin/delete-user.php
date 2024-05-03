<?php 

                // echo"Delete User Page";

                // // //Include constants.php file here
                include('../connection.php');

                //check whether the id and image_name value is set or not
                if(isset($_GET['id']) AND isset($_GET['image_name'])) // we can use 'AND' or '&&'
                {
                        //Process to  delete
                        // echo "Process to Delete";
                        
                        

                        // delete User from database
                        //Sql Query to Delete Data from Database
                        $sql = "DELETE FROM tbl_user WHERE id=$id";

                        //Execute the Query
                        $res = mysqli_query($conn,$sql);

                        //check whether the data is deleted from database or not
                        if($res==true)
                        {
                                //Set Success Message and Redirect, user Deleted
                                $_SESSION['delete'] = "<div class='success'> User Deleted Successfully. </div>";
                                //Redirect to manage category page
                                header('location:'.SITEURL.'admin/manage-user.php');
                        }
                        else
                        {
                                //Set Fail Message and Redirect
                                //Set Success Message and Redirect
                                $_SESSION['delete'] = "<div class='error'> Failed to Delete User. </div>";
                                //Redirect to manage category page
                                header('location:'.SITEURL.'admin/manage-user.php');
                        }

                        //Redirect to manage category page with message



                }
                else
                {
                        //redirect to manage User page
                        $_SESSION['unauthorize'] = "<div class='error'> Unauthorized Access. </div>";
                        header('location:'.SITEURL.'admin/manage-user.php');
                }

      



?>