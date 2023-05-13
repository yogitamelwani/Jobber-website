<?php  
                
    session_start();       
    require('..\connection.php');
    $email=$_SESSION['email'];
    $chk=mysqli_query($con,"select * from tasker where email='$email';");
    $row=mysqli_fetch_array($chk);
                
?>
<!DOCTYPE html>
<html>
    <head><title>Jobber-Profile</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="profile.css">
    </head>
    <body>
        <div class="topnav">
        <a class="image" href="../home.php" ><img src="..\images\logo.png" height=50px></a>
            <a  class="active" href="profile.php">Profile</a>
            <a  href="dashboard.php">Dashboard</a>
            <a href="business.php">Business</a>
            <a  href="mounting.php">Mounting</a>
        </div>

        <div class="head">MY PROFILE</div>
        <div class="row">
        <div class="col">
        <div class="intro">
            <div>
            <img src="../images\<?php echo $row['image']?>" height="80" width="80" style="border-radius:4%;"></div>
            <div class="body"><span class="bold"><?php echo $row['fname']. " ".$row['lname']; ?></span>
            <span>Elite Tasker</span>
            <span>4.8 (139 reviews)</span>
            <span>259 overall tasks</span></div>
        </div>

        <div class="about">

            <span class="bold">About me</span>
            <span><?php echo $row['about']?></span>
            <hr width="90%" style="margin:1rem">
            
            <span>Working in Vimannagar</span>
            <span>ID verified</span>
            <span>Tasker since 2020</span>
            <hr width="90%" style="margin:1rem">

            <span class="bold">Skills and Experience</span>
            <span><?php echo $row['experience']?></span>

        </div></div>
        <div class="col">
            <span class="headin"> MY SKILLS </span>
        <div class="skills">
            <?php $skills=explode(",", $row['skills']);
                foreach($skills as $key){
            
                      echo "<span>".$key."</span>";
                }
            ?>
            
        </div>
        </div>
        <div class="col2">
            <div class="chead">
                    <div class="headin">Account</div> 
                    
                    <div> <a class=" btn button1" href="../home.php">Logout</a> </div>
            </div>
            <hr width="90%">
            <div class="days">
            <?php 
            
            $a=array("MON","TUE","WED","THU","FRI","SAT","SUN");
            $b=explode(",",$row['w_days']);
            
             

            
            
            ?>
                <div class="bold">Your Working days</div>
                <div class="drow">
               <?php foreach($a as $day){
            if(in_array($day,$b))
            {
                echo "<span class='active'>".$day."</span>";
            }
            else
            {
                echo "<span >".$day."</span>";
            }

             } ?>
                  
                </div><br><br>


                <?php 
            
            $h1=array("8AM","9AM","10AM","11AM");
            $h2=array("12PM","3PM","4PM","6PM","7PM");
            $x=explode(",",$row['w_hours']);
            
             

            
            
            ?>
                <div class="bold">Preferable working hours</div>
                <div class="dcol">
                    <div class="drow">
                    <?php foreach($h1 as $hour){
            if(in_array($hour,$x))
            {
                echo "<span class='active'>".$hour."</span>";
            }
            else
            {
                echo "<span >".$hour."</span>";
            }

             } ?>
                       <!-- <span>8AM</span>
                        <span>9AM</span>
                        <span class="active">10AM</span>
                        <span>11AM</span>-->
                        </div>
                    <div class="drow">
                    <?php foreach($h2 as $hour){
            if(in_array($hour,$x))
            {
                echo "<span class='active'>".$hour."</span>";
            }
            else
            {
                echo "<span >".$hour."</span>";
            }

             } ?>
                        <!--<span>12PM</span>
                    
                        <span class="active">3PM</span>
                        <span class="active">4PM</span>
                        <span>6PM</span>
                        <span>7PM</span> -->
                    </div>
                </div>
            </div>
            <div> <a class=" btn button2" href="edit.php">Edit Profile</a> </div>
        </div>
    </body>
</html>