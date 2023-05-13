<!DOCTYPE html>
<html>
    <head>
    <title>Jobber-Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="box">
        <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']?>"> 
                <center><img src="images\logo2.png" height=80px></center>
                <input type="text" name="email" placeholder="Email Address" required>
                <div><input type="password" name="password" placeholder="Password" required></div><br>
                <div><input type="submit" name="submit" value="Login"></div>
                <span><p> Don't have an account? <a href="signup.php">Signup</a>.<p></span>
            </form>
        </div>
        <?php
                if(isset($_POST['submit']))
                {
                    require('connection.php');
                    session_start();
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $query=mysqli_query($con,"select * from customer where email='$email' and password='$password'");
                    
                    $rows = mysqli_num_rows($query);
    
    
                    if ($rows == 1) 
                    {
                        $_SESSION['email'] = $email;
                        // Redirect to user dashboard page
                        header("Location: account\profile.php");
                    } 
                    else 
                    echo "<script> alert('Incorrect email id or password, Try again')</script>";
                }
            ?>
    </body>
</html>
