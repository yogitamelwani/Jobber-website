
<?php
ob_start();
require("..\connection.php");
session_start();
$id=$_SESSION['tid'];
$query=mysqli_query($con,"select fname,lname,image from tasker where id=$id  ");
$fetch=mysqli_fetch_assoc($query);
$tasker=$fetch['fname']." ".$fetch['lname'];
$image=$fetch['image'];
$id=$_SESSION['sid'];
$query=mysqli_query($con,"select name from services where id=$id  ");
$fetch=mysqli_fetch_assoc($query);
$service=$fetch['name'];

?>
<html>
    <head><title>Jobber-Booking</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="confirm.css">
    </head>
    <body>
        <div class="hbox">
        <center><a class="image" href="../home.php"  ><img style="margin-top:2rem;" src="..\images\logo.png" height=80px></a></center>
            <div class="heading">
                <div>
                    <span class="num active">1</span>
                    <hr width=150px style=" height:2px;border-width:0;color:green;background-color:rgb(10, 153, 10);">
                    
                </div>
                
                <div>
                    <hr width=150px style=" height:2px;border-width:0;color:green;background-color:rgb(10, 153, 10);">
                    <span class="num active">2</span>
                    <hr width=150px style=" height:2px;border-width:0;color:gray;background-color:rgb(10, 153, 10);">
                    
                </div>
                <div>
                    <hr width=150px style=" height:2px;border-width:0;color:gray;background-color:rgb(10, 153, 10);">
                    <span class="num  active">3</span>
                    <hr width=150px style=" height:2px;border-width:0;color:gray;background-color:rgb(10, 153, 10);">
                    
                </div>
                <div>
                    <hr width=150px style=" height:2px;border-width:0;color:gray;background-color:rgb(10, 153, 10);">
                    <span class="num active">4</span>
                    
                    
                </div>
            </div>

            <div class="lheading">
                <div class=" let "><center>Describe Your Task</center></div>
                <div class=" let "><center>Browse Taskers and Prices</center></div>
                <div class=" let "><center>Choose Time and Date</center></div>
                <div class=" let sactive"><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspConfirm Details</center></div>
            </div>

            <hr style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
            
            <div class=headlet><center> Thank you for the payment! Please re-check your details.</center></div>
            
        </div>
        

        <div class="box">

            <div class="row">
                
                <img src="..\images\<?php echo $image ?>" style="border-radius:50%" height=200px width=200px>
                <div class="col">
                <label class="service" ><?php echo $service ?></label>
                <span class="boxname"><?php echo $tasker ?></span>
                </div>
            </div>
            
            <div class="row">
                <div class="boxlet">
                    <span><?php echo "ON ".$_SESSION['selectedDate']."/".$_SESSION['month']."/".$_SESSION['year']." AT ".$_SESSION['time'] ?></span>
                    <span><?php echo $_SESSION['place'].", ". $_SESSION['city'].", ". $_SESSION['pincode'] ?></span>
                    <span><?php echo $_SESSION['hrs'] ?></span>
                    <span><?php echo $_SESSION['vehicle'] ?></span>
                    
                </div>

                
                <div class="boxlet2">
                    <span style="margin-left:8rem; font-weight:600;">Price Details</span>
                    <div><div>
                        <span>Hourly Rate </span>
                        <span>Trust and Support Fee </span>
                        <span style="font-weight:600">Total Rate</span>
                    </div>
                    <div>
                        <span class="pr"><?php echo "Rs.".$_SESSION['price']."/hr" ?></span>
                        <span class="pr">Rs.20/hr</span>
                        <span class="pr" style="font-weight:600"><?php echo "Rs.".((int)$_SESSION['price']+20)."/hr" ?></span>
                    </div></div>
                </div>
            </div>
                <br><br>
                <span class="boxdes" style="margin-left:3rem">You may see a temporary hold on your payment method in the amount of your Tasker’s hourly rate of <?php echo "Rs.".((int)$_SESSION['price']+20)."\-" ?> You can cancel at any time. Tasks cancelled less than 24 hours before the start time may be billed a cancellation fee of one hour. Tasks have a one-hour minimum. Please follow all public health regulations in your area. Learn more.<br>
                </span>


        </div>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input type="submit" name="submit" value="Confirm">
        </form>
        
        <?php
        if(isset($_POST['submit']))
            {
               
                $cid=$_SESSION['cid'];
                $sid=$_SESSION['sid'];
                $place=$_SESSION['place'].", ".$_SESSION['city'].", ".$_SESSION['pincode'];
                $hrs=$_SESSION['hrs'];
                $vehicle=$_SESSION['vehicle'];
                $details=$_SESSION['details'];
                $tid=$_SESSION['tid'];
                $time=$_SESSION['time'];
                $name=$_SESSION['name'];
                $amount=$_SESSION['price'];
                $date=$_SESSION['selectedDate']."/".$_SESSION['month']."/".$_SESSION['year'];
                $email=$_SESSION['email'];
                $query=mysqli_query($con,"insert into tasks(date,service,customer,tasker,place,time,hrs,vehicle,details,amount) values('$date',$sid,$cid,$tid,'$place','$time','$hrs','$vehicle','$details','$amount')");
                if($query){
                    session_destroy();
                    session_start();
                    $_SESSION['email']=$email;
                    echo $_SESSION['email'];
                    if(isset($_SESSION['email']))
                    {
                        header("Location: ..\my task.php");
                        exit();  
                    }
                }
                else
                echo "something went wrong";              
            }
        ?>

    </body>
</html>