
<?php  
                
                session_start();       
                require('..\connection.php');
                $email=$_SESSION['email'];
                $chk=mysqli_query($con,"select * from customer where email='$email';");
                $row=mysqli_fetch_array($chk);
                
            ?>
<!DOCTYPE html>
<html>
    <head>
    <title>Jobber-Account</title>
    
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="astyle.css">
        <link rel="stylesheet" href="profile.css">
    </head>
    <body>
        <div class="topnav">
        <a class="image" href="../home.php" ><img src="..\images\logo.png" height=50px></a>
            <a href="../book task.php">Book a Task</a>
            <a href="../my task.php">My Tasks</a>
            <a class="active" href="profile.php">Account</a>
        </div>

        <div class="heading">
            Your Account
        </div>



        <div class="container">



            <div class="lists">
                <ul>
                    <li><span class="active"><a  href="profile.php">Profile</a></span></li>
                    <li><span><a href="password.php">Password</a></span></li>
                    <li><span><a href="notification.php">Notifications</a></span></li>
                    <li><span><a href="billing.php">Billing info</a></span></li>
                    <li><span><a href="cancel.php">Cancel a Task</a></span></li>
                    <li><span><a href="balance.php">Account Balance</a></span></li>
                    <li><span><a href="transaction.php">Transactions</a></span></li>
                    <li><span><a href="deactivate.php">Deactivate</a></span></li>
                </ul>
            </div>

            


            <div class="content">
                <div class="head">
                    <div class="content_heading">Account</div> 
                    <div> <a class=" btn button1" href="edit.php">Edit</a> </div>
                </div>
                <hr width="95%" style="border: 1px solid #dce0e6;">
                <div class="info">
                    <div class="img"><img src="../images/<?php echo $row['image'] ?>"></div>
                    <div class="details">
                        <span><?php echo $row['fname']. " ". $row['lname']; ?></span>
                        <span><?php echo $row['email']; ?></span>
                        <span><?php echo $row['pincode']; ?></span>
                        <div> <a class="btn button1" href="../logout.php">Log Out</a> </div>
                    </div>
                </div>
            </div>


            <?php  ?>


        </div>
    </body>
</html>