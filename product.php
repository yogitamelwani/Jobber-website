<!DOCTYPE html>
<html>
    <head><title>Jobber-Product</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="product.css">
    </head>
    <body>


    <?php 

        require('connection.php');
        $str= $_SERVER['QUERY_STRING'];
        $name = substr($str,5);
        $name= str_replace("%20"," ",$name);
        $result=mysqli_query($con,"select * from services where name='$name'; ");
        $row=mysqli_fetch_assoc($result);
    ?>
      




        <div class="img">
            <div class="iimg"><img src="<?php echo "images\\".$row['img2'] ?>" width=1520px height=900px ></div>
            <div class="box">
                <span class="box_heading"><?php echo $row['name'] ?></span>
                <span class="box_text"><?php echo $row['short_desc'] ?></span>
                <div class="btn"><a href="booking\details.php?name=<?php echo $name ?>">Book now</a></div>
            </div>
        </div>



        <span class="heading"><?php echo $row['name_desc'] ?></span>
        <div class="des">
        <div class="description">
            
            <span>
                <p><?php echo $row['long_desc'] ?> </p>
            </span>
        </div>
        <div class="des_img"><img src="<?php echo "images\\".$row['img3'] ?>" ></div>
        </div>


            


        <div class="works">
            <span class="dheading">How it works</span>
            <div class="row">
                <div class="col">
                    <img src="images\how-it-works-step-1.png"><br>
                    <span class="col_heading">Describe Your Task</span>
                    <span>
                        <p>Tell us what you need done, when and where it works for you.</p>
                    </span>
                </div>
                <div class="col">
                    <img src="images\how-it-works-step-2.png"><br>
                    <span class="col_heading">Choose Your Tasker</span>
                    <span>
                        <p>Browse trusted Taskers by skills, reviews, and price. Chat with them to confirm details.</p>
                    </span>
                </div>
                <div class="col">
                    <img src="images\how-it-works-step-3.png"><br>
                    <span class="col_heading">Get It Done!</span>
                    <span>
                        <p>Your Tasker arrives and gets the job done. Pay securely and leave a review.</p>
                    </span>
                </div>
            </div>
        </div>




    </body>
</html>