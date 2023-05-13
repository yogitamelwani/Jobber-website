<!DOCTYPE html>
<html>
    <head>
    <title>Jobber-Account</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="astyle.css">
        <link rel="stylesheet" href="password.css">
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
                    <li><span><a href="profile.php">Profile</a></span></li>
                    <li><span class="active"><a href="password.php">Password</a></span></li>
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
                    <div class="content_heading">Change Password</div> 
                    
                </div>
                <hr width="95%" style="border: 1px solid #dce0e6;">
                <div class="info">
                
                    <div class="details">
                        <form class="form">
                            <label>Enter current password:</label>
                            <input type="password" name="password">
                            <label>Enter new password:</label>
                            <input type="password" name="password">
                            <label>Confirm new password:</label>
                            <input type="password" name="password">
                            <input type="reset" value="Cancel">
                            <input type="submit" value="Save">
                        </form>
                        
                    </div>
                </div>
            </div>





        </div>
    </body>
</html>