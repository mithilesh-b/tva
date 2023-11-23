<?php
include "dbconnection.php";
?>   

<!DOCTYPE html>
<html lang="en">
    <head>

    <link href="assets/css/style.css" rel="stylesheet">

    <style>
#loginform {
width: 300px;
margin: auto;
padding: 200px;
padding-top: 200px;
border: 1px solid #ccc;
border-radius: 5px;
}

label {
display: inline-block;
width: 100px;
margin-bottom: 10px;
}

input[type="text"], input[type="password"] {
padding: 5px;
width: 100%;
border-radius: 5px;
border: 1px solid #ccc;
box-sizing: border-box;
margin-bottom: 10px;
}

input[type="submit"] {
background-color: #37517e;
color: white;
padding: 10px 20px;
border: none;
border-radius: 5px;
cursor: pointer;
}


</style>

    </head>


    <body>

    <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="">Tech-Verse Academy</h1>
      <nav id="navbar" class="navbar">
        <ul>
          
          
		  <li><a class="nav-link scrollto" href="form.php">signup</a></li>
           </ul>       
      </nav>
    </div>
  </header>

        <div id="loginform">
        <form action="server.php?opcode=3" method="post">
            <p>
                <label> Username: </label>
                 <input type="text" name="txtuname" id = "txtuname"/>
            </p>
            <p>
                <label> Password: </label>
                <input type="password" name="txtupass" id = "txtupass"/>
            </p>
            <p>
                <input type="submit" id="btnlogin" name="btnlogin" value="Login">
            </p>
        </form>

        </div>

        <a href="admin_login.php">Admin Login</a>
    </body>
</html>