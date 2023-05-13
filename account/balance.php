<!DOCTYPE html>
<html>
    <head>
    <title>Jobber-Account</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="astyle.css">
        <link rel="stylesheet" href="balance.css">
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
                    <li><span ><a  href="profile.php">Profile</a></span></li>
                    <li><span><a href="password.php">Password</a></span></li>
                    <li><span><a href="notification.php">Notifications</a></span></li>
                    <li><span ><a href="billing.php">Billing info</a></span></li>
                    <li><span><a href="cancel.php">Cancel a Task</a></span></li>
                    <li><span class="active"><a href="balance.php">Account Balance</a></span></li>
                    <li><span><a href="transaction.php">Transactions</a></span></li>
                    <li><span><a href="deactivate.php">Deactivate</a></span></li>
                </ul>
            </div>



            <div class="content">
                <div class="head">
                    <div class="content_heading">Account Balance</div> 
                    
                </div>
                <hr width="95%" style="border: 1px solid #dce0e6;">
                <div class="info">
                    
                    <div class="details">
                        <span class="bold">Available account Balance: Rs.1000</span>
                        <span>*Account balances are automatically applied when a task is completed.</span>
                        <span>Enter a redemption code:</span>
                        <input type="text" name="password">
                        <div> <a class="btn button1">Apply</a> </div>
                    </div>
                </div>
            </div>





        </div>
    </body>
</html>