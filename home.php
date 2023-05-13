<?php 
            require('connection.php');
            $query="Select name, price_start, price_end, img1 from services";
            $result=mysqli_query($con,$query);
            $cnt=0;            
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Jobber-Home</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="home.css"> 
    </head>


    <body>
        <div class="topnav">
            <a class="image" href="home.php" ><img src="images\logo.png" height=50px></a>
            <a class="active" href="home.php">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Services
                </button>
                <div class="dropdown-content">
                <?php while($arr=mysqli_fetch_assoc($result)){ ?>
                <a href="<?php echo "product.php?name=".$arr['name']?>"><?php echo $arr['name']  ?></a>
                  <?php } ?>  
                </div>
            </div>
            <a href="signup.php">Login/Signup</a>
            <a href="tasker1.php">Become a Tasker</a>
        </div>



        <div class='img'><img src="images\1.jpg" width="100%" height="850px"></div>

        <?php 
            require('connection.php');
            $query="Select name, price_start, price_end, img1 from services";
            $result=mysqli_query($con,$query);
            $cnt=0;
            
        ?>
        
        <div class="projects">
            <div class="heading">Popular projects in your area</div>
            <?php for($i=0;$i<2;$i++) { ?>
            <div class="row">
                <?php for($j=0;$j<4;$j++) { ?>
                <div class="col">
                    <?php $arr=mysqli_fetch_assoc($result); ?>
                    <img src="<?php echo "images\\".$arr['img1'] ?>" width="280px" height="200px">
                    <div class="col_heading"><a href="<?php echo "product.php?name=".$arr['name']?>"><?php echo $arr['name']  ?></a></div>
                    <span>Avg. Project: Rs.<?php echo $arr['price_start']  ?> - Rs.<?php echo $arr['price_end']  ?></span>
                </div>
                <?php $cnt++;
                }
            echo "</div>";
            }
              ?>
                
        </div>


        <div class="intro">
            <div class='sheading'>Everyday life made easier</div>
            <div class='ssheading'>When life gets busy, you don’t have to tackle it alone. Get time back for what you love without breaking the bank.</div>
            <span>
                <ul type='circle'>
                    <li>Choose your Tasker by reviews, skills, and price</li>
                   <li> Schedule when it works for you — as early as today</li>
                    <li>Chat, pay, tip, and review all through one platform</li></span>
        </div>





    </body>
</html>