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

    mysqli_select_db($con,'greenleaf');
    $user=$_POST['user'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $comments=$_POST['comments'];

    $query= "insert into userinfodata (user,email,mobile,comment) values ('$user', '$email', '$mobile', '$comments')";
    mysqli_query($con, $query);
?>