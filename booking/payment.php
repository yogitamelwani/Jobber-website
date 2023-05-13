<?php 
ob_start();
require("..\connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">																																	<meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Jobber-Booking</title>
    <style>
     

        * {
            box-sizing: border-box;
            font-size:1.2rem;
        }

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
            opacity: 0.85;
        }

        .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 2rem;
        }

        .btn {
            background-color:rgb(10, 153, 10);
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 1.6rem;
            font-family:timesnewroman;
        }

        .btn:hover {
            background-color: darkgreen;
            color:white;
            box-shadow: 0.2px 0.2px;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }
            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body >
    <center><a class="image" href="../home.php"  ><img style="margin-top:2rem;" src="..\images\logo2.png" height=80px></a></center>
    <center><h1 style="font-size:3rem; margin-top:10px; font-weight:600;">Payment Form</h1></center>
    <div class="row">
        <div class="col-75">
            <div class="container">
                <?php
                    $id=$_SESSION['cid'];
                    $query=mysqli_query($con,"select * from customer where id=$id");
                    $row=mysqli_fetch_assoc($query);
                ?>
                <form class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="name" value="<?php echo $row['fname']." ".$row['lname']?>" required>
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" value="<?php echo $row['email']?>" required>
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="place" value="<?php echo $_SESSION['place']?>" required>
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" value="<?php echo $row['city']?>" required>

                            <div class="row">
                                <div class="col-50">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" value="<?php echo $row['phone']?>" required>
                                </div>
                                <div class="col-50">
                                    <label for="pincode">Pin Code</label>
                                    <input type="text" id="pincode" name="pincode" value="<?php echo $row['pincode']?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2018" required>
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352" required>
                                </div>
                            </div>
                        </div>

                    </div><br>
                    <input type="submit" name="submit"  value="Confirm Payment" class="btn">
                </form>
            </div>
        </div>
    
        </div>
    </div>

    <?php 
            if(isset($_POST['submit']))
            {
                session_start();
                $_SESSION['name']=$_POST['name'];
                $_SESSION['place']=$_POST['place'];
                $_SESSION['city']=$_POST['city'];
                $_SESSION['pincode']=$_POST['pincode'];
                header("Location: confirm.php");
                exit();                
            }
        ?>
   
</body>
</html>
