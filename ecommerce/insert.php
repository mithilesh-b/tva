<?php

include '../dbconnection.php';

if(isset($_POST['submit'])){

   
    $product_name = $_POST['pname'];
    $product_price = $_POST['pprice'];
    $product_image = $_FILES['pimage'];

    // print_r($product_image);

    $image_loc = $_FILES['pimage']['tmp_name'];
    $image_name = $_FILES['pimage']['name'];
    $image_des = "uploadimage/.$image_name";

    move_uploaded_file($image_loc,"uploadimage/.$image_name");

    $product_catagory = $_POST['pages'];

    echo $product_catagory;

//insert product 

mysqli_query($conn,"INSERT INTO `tblproduct`(`pname`, `pprice`, `pimage`, `pcatagory`)
VALUES ('$product_name','$product_price','$image_des','$product_catagory')");
    
}
?>