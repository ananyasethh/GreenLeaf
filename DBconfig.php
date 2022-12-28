<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $db = "greenleaf";

    $con = mysqli_connect($host,$username,$pass,$db);
    if($con){

    }
    else{
        die("Database did not connect due to error".mysqli_connect_error());
    }
?>