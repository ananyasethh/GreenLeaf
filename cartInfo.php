<?php
    include 'DBconfig.php';

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $pincode = $_REQUEST['pincode'];
    $address = $_REQUEST['address'];
    //echo $name;

    $query = "INSERT INTO customer (name, mobile, email, address, pincode) values ('$name','$mobile','$email','$address','$pincode');";
    $exe = mysqli_query($con, $query);
    if(!$exe){
        die("Problem occured!");
    }
    else{
        header('location:cart.php');
    }

?>