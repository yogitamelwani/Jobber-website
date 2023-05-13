<?php             
    require('connection.php');
    $query="Select name, price_start, price_end, img1 from services";
    $result=mysqli_query($con,$query);
    $cnt=0;    
?>

<!doctype html>
<html>
    <head>
        <title>Jobber-Become a Tasker</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="tasker1.css">
    </head>
    <body>
        <div class="topnav">
            <a class="image" href="home.php" ><img src="images\logo.png" height=50px></a>
            <a  href="home.php">Home</a>
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
            <a class="active" href="tasker1.php">Become a Tasker</a>
        </div>


        
        <div class="des">
        <div class="des_img"><img src="images\2.jpg" ></div>
        <div class="description">
            <span class="heading">Earn money your way</span>
            <span>
                <p>See how much you can make tasking </p>
                <form class="form" action="tasker\create account.php">
                    <label>Select your area</label>
                    <select name="area">
                        <option value="viman nagar">Viman Nagar</option>
                        <option value="kalyani nagar">Kalyani Nagar</option>
                        <option value="koregaon park">Koregaon Park</option>
                        <option value="camp">Camp</option>
                        <option value="wadgaonsheri">Wadgaonsheri</option>
                    </select>
                        
                    <label>Choose a category</label>
                    <select name="category">
                        <?php 
                            $chk=mysqli_query($con,"select * from services  ");
                            while($row=mysqli_fetch_array($chk))
                            {  
                        ?>
                        <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                        <?php }?>
                        
                    </select>

                    <div class="amount">
                        <span class="amt"> Rs. 300</span>
                        <span class="amt_txt"> per hour</span>
                    </div>

                    <input type="submit" value="Get Started" >

                </form>
                <p>Already have an account? <a href="tasker\login.php">Log in</a> </p>
                
            </span>
        </div>
        
        </div>


    </body>
</html>