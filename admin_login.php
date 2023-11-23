<?php
include "dbconnection.php";
?>   

<!DOCTYPE html>
<html lang="en">
    <head>

    

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

    

        <div id="loginform">
        <form action="server.php?opcode=4" method="post">
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


    </body>
</html>





