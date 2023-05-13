<?php
ob_start();
require("..\connection.php");
session_start();
$sid=$_SESSION['sid'];
$service=mysqli_query($con,"select price_start from services where id=$sid");
$price=mysqli_fetch_assoc($service);
$_SESSION['price']=$price['price_start'];
?>
<html>
    <head><title>Jobber-Booking</title>
        <link rel="stylesheet" href="..\style.css">
        <link rel="stylesheet" href="browse.css">
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
                    <hr width=150px style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
                    
                </div>
                <div>
                    <hr width=150px style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
                    <span class="num">3</span>
                    <hr width=150px style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
                    
                </div>
                <div>
                    <hr width=150px style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
                    <span class="num">4</span>
                    
                    
                </div>
            </div>

            <div class="lheading">
                <div class=" let "><center>Describe Your Task</center></div>
                <div class=" let sactive"><center>Browse Taskers and Prices</center></div>
                <div class=" let "><center>Choose Time and Date</center></div>
                <div class=" let "><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspConfirm Details</center></div>
            </div>

            <hr style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
            
            <div class=headlet><center> Filter and sort to find your Tasker. Then view their availability to request your date and time.</center></div>
            
        </div>
        <br><br>
        <span class=headlet><center style="background-color: lightseagreen; color:white">Keep your community safe! Please work with your Tasker to follow local health guidance and regulations.</center><span>
       
        <?php
            $query=mysqli_query($con,"Select * from tasker");
            while($row=mysqli_fetch_assoc($query))
            {
        ?>
        <div class="box">
            <div style="padding:2rem;">
                <img src="..\images\<?php echo $row['image'];?>" style="border-radius:50%" height=300px width=300px>
                <a href="" style="text-align:center; margin-top: 2rem;">View profile and reviews</a>
                <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'].'?id='.$row['id']; ?>">
                <input type="submit" name="submit" value="Select and Continue">
                </form>
                <span class="boxdes">You can chat with your Tasker, adjust task details, or change task time after booking.</span>

            </div>
            <div>
                <span class="boxname"><?php echo $row['fname']." ".$row['lname']; ?></span>
                
                <span class="boxlet">Elite Tasker</span>
                <span class="boxlet">4.8 (139 reviews)</span>
                <span class="boxlet">259 overall tasks</span>
                <hr>
                <span class="boxhead">How I can help:</span>
                <span class="boxlet"><?php echo $row['about']; ?></span>
                <a href="" style="margin-left: 1rem;"> Read more </a>
                <span class="boxhead">Yash Agarwal</span>
                <span class="boxlet">Recommendation: 90%</span>
                <span class="boxdes" style="margin-left:1rem">“<?php echo $row['fname']; ?> was on time and prepared. They took care of everything very efficiently. We then transported the couches in her truck which they properly strapped down and secured. Then delivered to our new home and reassembled. I could not be happier with them! I Would recommend them to anyone I know.”<br>
                15th January 2022</span>

            </div>
            <div>
                <span class="boxpr"> <?php echo "Rs.".$_SESSION['price']."/hr" ?></span>
            </div>

        </div>

        <?php 
            } 

            if(isset($_POST['submit']))
            {
                
                $str= $_SERVER['QUERY_STRING'];
                $tid = substr($str,3);
                $_SESSION['tid']=$tid;
                header("Location: date.php");
                exit();                
            }
        ?>

    </body>
</html>