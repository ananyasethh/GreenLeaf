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
    $querypush = mysqli_query($con, $query);

    /*if($querypush)     #if not eshtablished
    {
        echo '<script> alert("Comment is sent to our database!"); </script>';
    }
    else
    {
        echo '<script> alert("ERROR!"); </script>';
    }*/
    }
    #mysqli_query($con, $query);
    header('location:index.php');
?>