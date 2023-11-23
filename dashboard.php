<?php
    include 'dbconnection.php';

    session_start();

    if(!isset($_SESSION['login_user'])){
        header("location:login.php?err=2");
        die(); 
    }

    $logged_user = $_SESSION['login_user'];
    $usrid = $_SESSION["login_usrid"];
?>




<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="admin.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<header class="header">
    <a href="">Student Dashboard</a>

<div class="logout">
    <a href="logout.php" class="btn btn-primary">Log Out</a>
</div>


</header>


<aside>

<ul>
    <li>
        <a href="">My Courses</a>
    </li>
    <li>
        <a href="">My Documents</a>
    </li>
    <li>
        <a href="">My payment Status</a>
    </li>
    
    
</ul>
</aside>



<body>
    <div class="content">
        <h2>Welcome <?php echo $logged_user; ?></h2>

        <?php
            $sql = "SELECT * FROM form WHERE usrid='$usrid'";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
               echo $user = $row['name'];
                $ema = $row['email'];
            }


            mysqli_close($conn);
        ?>
    </div>
    






</body>
</html>

