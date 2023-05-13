<?php require('connection.php');?>
<!DOCTYPE html>
<html>
    <head>
    <title>Jobber</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="book task.css">
    </head>
    <body>
        <div class="topnav">
        <a class="image" href="home.php" ><img src="images\logo.png" height=50px></a>
            <a class="active" href="book task.php">Book a Task</a>
            <a href="my task.php">My Tasks</a>
            <a href="account\profile.php">Account</a>
        </div>





        <div class="img">
            <div class="box">
                <span class="box_heading">Book Your Next Task</span>
                
                <?php 
                    $query=mysqli_query($con,"Select name from services");
                    while($result=mysqli_fetch_array($query))     {           
                ?>
                <div class="btn"><a href="<?php echo "product.php?name=".$result['name']?>"><?php echo $result['name']  ?></a></div>
                <?php } ?>
                
            </div>
        </div>


    </body>
</html>