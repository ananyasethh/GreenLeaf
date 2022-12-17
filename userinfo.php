<?php 
    $con=mysqli_connect('localhost','root');
    
    if($con)
    {
        echo "Connection established successfully!";
    }
    else
    {
        echo "Connection not established!";
    }
?>