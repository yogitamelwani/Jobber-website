<?php 
    ob_start();         
    session_start();       
    require('..\connection.php');
    $email=$_SESSION['email'];
    $joinquery=mysqli_query($con,"SELECT tasks.id as tid, customer.fname as fname,customer.lname as lname, tasks.place as place, services.name as services ,customer.image as img, tasks.time as ttime, tasks.date as tdate
    FROM (((tasks
    INNER JOIN customer ON tasks.customer = customer.id)
    INNER JOIN tasker ON tasks.tasker = tasker.id)
    INNER JOIN services ON tasks.service= services.id) where tasker.email='$email' and tasks.status='pending';");
    
    $tasker=mysqli_query($con, "Select fname from tasker where email='$email'");
    $name=mysqli_fetch_assoc($tasker);
    $name=$name['fname'];
    
?>

<!DOCTYPE html>
<html>
    <head><title>Jobber-Dashboard</title>
        <link rel="stylesheet" href="dashboard.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>


        <div class="topnav">
        <a class="image" href="../home.php" ><img src="..\images\logo.png" height=50px></a>
            <a  href="profile.php">Profile</a>
            <a class="active" href="dashboard.php">Dashboard</a>
            <a href="business.php">Business</a>
            <a href="mounting.php">Mounting</a>
        </div>

    

        <div class="head">
            
            <span> Hi, <?php echo $name?>.<br> Here's what's going on today!</span>
            
        </div>


        <div class="invitations">
                <span class="heading">SAME DAY INVITATIONS</span>
                <div> 
                    <table class="ibody">
                        <tr>
                            <th>Name</th>
                            <th>Place</th>
                            <th>Task</th>
                            <th>Status</th>
                        </tr>
                        
                        <?php while($row=mysqli_fetch_assoc($joinquery)) { 
                                
                        ?>
                        <tr>
                            <td><?php echo $row['fname']." ".$row['lname']?></td>
                            <td><?php echo $row['place'] ?></td>
                            <td><?php echo $row['services'] ?></td>
                            <td>
                                <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=".$row['tid']; ?>">
                                    <input type="submit" name="submit" class="btn" value="Accept">
                                </form>
                            </td>
                        </tr>
                        <?php } 
                        $joinquery=mysqli_query($con,"SELECT tasks.id, customer.id, services.id, tasker.id, customer.fname as fname,customer.lname as lname, tasks.place as place, services.name as services ,customer.image as img, tasks.time as ttime, tasks.date as tdate
                        FROM (((tasks
                        INNER JOIN customer ON tasks.customer = customer.id)
                        INNER JOIN tasker ON tasks.tasker = tasker.id)
                        INNER JOIN services ON tasks.service= services.id) where tasker.email='$email' and tasks.status='accepted';");
                        
                        ?>

                    </table>
                </div>
        </div>
        
        <div class="invitations" style="margin-top: 10rem;">
            <span class="heading" style="padding-left: 1rem;">TODAY'S SCHEDULED TASKS</span>
            
            <table class="ibody" style="width:80%; margin:2rem 1rem 2rem 5rem;">
            <?php while($row=mysqli_fetch_assoc($joinquery)) { 
                                
                                ?>
                <tr>
                <td><?php echo $row['services'] ?></td>
                <td><?php echo $row['ttime']." in ".$row['place']." on ".$row['tdate'] ?></td>
                
                <td><img src="../images\<?php echo $row['img'] ?>" style=" width: 50px; height: 50px; border-radius: 50%;"></td>
                <tr>
                <?php } ?>
            </table>
           
            
        </div>


        <?php
            if(isset($_POST['submit'])){
                $str=$_SERVER['QUERY_STRING'];
                $id=substr($str,3);
                $query=mysqli_query($con,"update tasks set status='accepted' where id=$id");
                if($query){
                    header("Location: dashboard.php");
                    exit();
                }
            }
        ?>


        
    </body>
</html>