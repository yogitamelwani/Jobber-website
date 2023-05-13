
    <?php 
    ob_start();
    include('auth_session.php');
    $email=$_SESSION['email'];

require('..\connection.php');
$str= $_SERVER['QUERY_STRING'];
$name = substr($str,5);
$name= str_replace("%20"," ",$name);
?>

<html>
    <head><title>Jobber-Booking</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="dets.css">
    </head>
    <body>
        <div class="hbox">
        <center><a class="image" href="../home.php"  ><img style="margin-top:2rem;" src="..\images\logo.png" height=80px></a></center>
            <div class="heading">
                <div>
                    <span class="num active">1</span>
                    <hr width=140px style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
                    
                </div>
                
                <div>
                    <hr width=140px style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
                    <span class="num">2</span>
                    <hr width=150px style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
                    
                </div>
                <div>
                    <hr width=140px style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
                    <span class="num">3</span>
                    <hr width=140px style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
                    
                </div>
                <div>
                    <hr width=140px style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
                    <span class="num">4</span>
                    
                    
                </div>
            </div>

            <div class="lheading">
                <div class=" let sactive"><center>Describe Your Task</center></div>
                <div class=" let "><center>Browse Taskers and Prices</center></div>
                <div class=" let "><center>Choose Time and Date</center></div>
                <div class=" let "><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspConfirm Details</center></div>
            </div>

            <hr style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
            
            <div class=headlet><center>Tell us about your task. We use these details to show Taskers in your area who fit your needs.</center></div>
            
        </div>


        <label class="service" ><?php echo $name; ?></label>
        <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'].'?name='.$name ?>">
        <div class="box">
            <label class="boxlet">Your Task Location:</label>
            <input type="text" name="place" required>
        </div>
        <label class="boxheading">TASK OPTIONS</label>
        <div class="box">
        
        <label class="boxlet" >How big is your task?</label>
        <label class="container">Small - Est. 1hr
        <input type="radio" checked="checked" name="hrs" value="Small - Est. 1hr">
        <span class="checkmark"></span>
        </label>
        <label class="container">Medium - Est. 2hrs
        <input type="radio" name="hrs" value="Medium - Est. 2hrs">
        <span class="checkmark"></span>
        </label>
        <label class="container">Large - Est. 3hrs
        <input type="radio" name="hrs" value="Large - Est. 3hrs">
        <span class="checkmark"></span>
        </label>

        <br><br>

        <label class="boxlet" >Vehicle Requirements</label>
        <label class="container">Vehicle not needed for the task
        <input type="radio" checked="checked" name="vehicle" value="Vehicle not needed for the task">
        <span class="checkmark"></span>
        </label>
        <label class="container">Task requires a car
        <input type="radio" name="vehicle" value="Task requires a car">
        <span class="checkmark"></span>
        </label>
        <label class="container">Task requires a truck
        <input type="radio" name="vehicle" value="Task requires a truck">
        <span class="checkmark"></span>
        </label>

        
        </div>
        <label class="boxheading">TELL US THE DETAILS OF YOUR TASK</label>
        <div class="box">
        <span class="let">Start the conversation and tell your Tasker what you need done. This helps us show you only qualified and available Taskers for the job. Don't worry, you can edit this later.</span>
        <br><textarea rows=15 cols=100 name="details" placeholder="Provide a summary of what you need done for your Tasker. Be sure to include details like the size of your space, any equipment/tools needed, and how to get in." required></textarea>
        <br><span class="let">If you need two or more Taskers, please post additional tasks for each Tasker needed.</span>
        </div>

        <input type="submit" name="submit" value="See Taskers and Price">
        </form>


        <?php

            if(isset($_POST['submit']))
            {
                session_start();
                $customer=mysqli_query($con,"select id from customer where email='$email' ");
                $cid=mysqli_fetch_assoc($customer);
                $_SESSION['cid']=$cid['id'];
                $str= $_SERVER['QUERY_STRING'];
                $name = substr($str,5);
                $name= str_replace("%20"," ",$name);
                $service=mysqli_query($con,"select id from services where name='$name' ");
                $sid=mysqli_fetch_assoc($service);
                $_SESSION['sid']=$sid['id'];
                $_SESSION['place']=$_POST['place'];
                $_SESSION['hrs']=$_POST['hrs'];
                $_SESSION['vehicle']=$_POST['vehicle'];
                $_SESSION['details']=$_POST['details'];
                header("Location: browse.php");
                exit();
            }
        ?>
    </body>
</html>