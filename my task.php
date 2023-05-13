<?php 
ob_start();
session_start();
require('connection.php');
$email=$_SESSION['email'];
$query=mysqli_query($con,"select id from customer where email='$email'");
$id=mysqli_fetch_assoc($query);
$id=$id['id'];
$query=mysqli_query($con,"select * from tasks where customer=$id");
?>
<!DOCTYPE html>
<html>
    <head><title>Jobber-My Task</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="my task.css">
    </head>
    <body>
        <div class="topnav">
        <a class="image" href="home.php" ><img src="images\logo.png" height=50px></a>
            <a href="book task.php">Book a Task</a>
            <a class="active"href="">My Tasks</a>
            <a href="account\profile.php">Account</a>
        </div>

        <div class="table">

        <table class="tasks">
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Task Name</th>
                <th>Amount</th>
                <th>Action</th>
            </tr>
                <?php 
                    while($row=mysqli_fetch_assoc($query))
                    {
                        $sid=$row['service'];
                        $query2=mysqli_query($con,"Select name from services where id=$sid");
                        $service=mysqli_fetch_assoc($query2);
                        $service=$service['name'];
                ?>
                        <tr>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                            <td><?php echo $service; ?></td>
                            <td><?php echo "Rs.".$row['amount']."/hr"; ?></td>
                            <td>
                                <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=".$row['id']; ?>">
                                    <input type="submit" name="submit" value="Cancel Task">
                                </form>
                            </td>
                        </tr>

                <?php } 
                
                        if(isset($_POST['submit'])){
                            $str=$_SERVER['QUERY_STRING'];
                            $id=substr($str,3);
                            $query=mysqli_query($con,"delete from tasks where id=$id");
                            if($query){
                                header("Location: my task.php");
                                exit();
                            }
                        }
                ?>

        </table>

    </body>
</html>