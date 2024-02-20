<?php
include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>My First Database</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
    <form class="myform" action="input01.php" method="POST">
        <!-- Move the form opening tag here -->

        Photography Club
        <label><br>Name: <br></label>
        <input type="text" name="name" class="inputvalues" placeholder="Enter Member's Name" required/><br>

        <label><br>Photography Mark: <br></label>
        <input type="text" name="photo_marks" class="inputvalues" placeholder="Enter photo marks" required/><br>
        <input type="submit" name="submit_btn" id="signup_btn" value="Enter">
    </form> <!-- Close the form tag here -->

    <?php
    if(isset($_POST['submit_btn']))
    {
        $name=$_POST['name'];
        $photo_marks=$_POST['photo_marks'];

        $query="insert into club_member values ('', '$name', '$photo_marks')";
        $query_run= mysqli_query($con, $query);

        if($query_run){
            echo '<script type="text/javascript">alert("Mark registered. Enter text number")</script>';
        }
        else{
            echo '<script type="text/javascript">alert("Error!")</script>';
        }
    }
    ?>
</body>
</html>