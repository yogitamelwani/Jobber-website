<!DOCTYPE html>
<html>
    <head>
    <title>Jobber-Signup</title>
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
        <div class="box">
            <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']?>"> 
                <center><img src="images\logo2.png" height=80px></center>
                <div><input type="text" name="fname" placeholder="First Name"></div>
                <div><input type="text" name="lname" placeholder="Last Name" ></div>
                <div><input type="text" name="email" placeholder="Email Address" required></div>
                <div><input type="password" name="password" placeholder="Password" required></div>
                <div><input type="text" name="pin" placeholder="pin code" required></div><br>
                <span><p> By clicking below and creating an account, I agree to the <a>Terms of Service</a> and <a>Privacy Policy</a>.<p></span>
                <div><input type="submit" name="submit" value="Create Account">
                    <span><p> Already have an account? <a href="login.php">Login</a>.<p></span> 
                </div>
            </form>
            <?php
                if(isset($_POST['submit']))
                {
                    require('connection.php');
                    $fname=$_POST['fname'];
                    $lname=$_POST['lname'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $pin=$_POST['pin'];
                    $date= date("Y-m-d H:i:s");
                    $query=mysqli_query($con,"insert into customer(fname,lname,email,password,pincode,date) values('$fname','$lname','$email','$password','$pin','$date')");
                    if($query)
                    {
                        header("Location: login.php");
                    }
                }
            ?>
        </div>
    </body>
</html>
