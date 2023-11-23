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
    <title>Admin Dashboard</title>
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
    <a href="">Admin Dashboard</a>

<div class="logout">
    <a href="logout.php" class="btn btn-primary">Log Out</a>
</div>


</header>


<aside>

<ul>
    
    <li>
        <a href="">Approve Student</a>
    </li>
    <li>
        <a href="">View Student</a>
    </li>
    
    <li>
        <a href="">Add Course</a>
    </li>
    <li>
        <a href="">View Course</a>
    </li>
    <li>
        <a href="">Payment Status</a>
    </li>
</ul>
</aside>

<div class="content">
    <h1>Welcome to Admin Dashboard</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta commodi quasi porro veniam libero iste voluptas tempora optio! Laudantium neque corporis aliquid corrupti sunt saepe reiciendis eum quos ullam minus.</p>
    
</div>


</body>
</html>