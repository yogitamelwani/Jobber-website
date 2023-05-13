<?php
ob_start();
require("..\connection.php");
session_start();
?>
<html>
    <head><title>Jobber-Booking</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="date.css">
        <link href="calendar.css" type="text/css" rel="stylesheet" />
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
                    <span class="num active">3</span>
                    <hr width=150px style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
                    
                </div>
                <div>
                    <hr width=150px style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
                    <span class="num">4</span>
                    
                    
                </div>
            </div>

            <div class="lheading">
                <div class=" let "><center>Describe Your Task</center></div>
                <div class=" let "><center>Browse Taskers and Prices</center></div>
                <div class=" let sactive"><center>Choose Time and Date</center></div>
                <div class=" let "><center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspConfirm Details</center></div>
            </div>

            <hr style=" height:2px;border-width:0;color:gray;background-color:#b1b1b1;">
            
            <div class=headlet><center>Choose your task date and start time</center></div>
            
        </div>
        <br><br>

        <?php 
            $id=$_SESSION['tid'];
            $query=mysqli_query($con,"select * from tasker where id=$id");
            $row=mysqli_fetch_assoc($query);
            $time=explode(",",$row['w_hours']);
        ?>      

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="bbox">
            <div style="padding:1rem;">
                <div class="bhead">
                <img src="..\images\<?php echo $row['image'] ?>" style="border-radius:50%" height=100px width=100px>
                <span style="text-align:center; margin-top: 2rem;"><?php echo $row['fname']." ".$row['lname']."'s Availability" ?></span>
                </div>

                <div class="time">
                    <label>Select a time</label>
                    <select name="time">
                        <?php foreach($time as $key)
                        {
                        echo "<option value=".$key.">".$key."</option>";
                        }
                        ?>
                    </select>
                </div>

                
                <input type="submit" name="submit" value="Select and Continue">
                
                <span class="boxdes">You can chat to adjust task details or change start time after confirming.</span>

            </div>
            <div>
            <?php
                    include 'calendar.php';
                    $calendar = new Calendar();
                    echo $calendar->show();
                    $queries = array();
                    parse_str($_SERVER['QUERY_STRING'], $queries);
                    foreach($queries as $key => $value){
                        $_SESSION[$key]=$value;
                    }
            ?>
            </div>
            
            
        </div>
        
        </form>

        <?php 
            if(isset($_POST['submit']))
            {
         
                $_SESSION['time']=$_POST['time'];
                
                header("Location: payment.php");
                exit();                
            }
        ?>

    </body>
</html>