<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST Shipping</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./CSS/cart.css" />
</head>
<body>
<?php
include 'DBconfig.php';
include 'menu.php';

if($_REQUEST['return']=="send")    //when data comes back from cartInfo.php
{
    $name = array();
    $email = array();
    $mobile = array();
    $pincode = array();
    $address = array();

    $mobile = $_REQUEST['mobile'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $pincode = $_REQUEST['pincode'];
}
?>
<div class='shipping-details'>
<div class='content-wrapper'>

    <div class='top'>
        <span>Shipping Details</span>
        <!-- <button name=''>Save</button>  -->
    </div>
    <div>
        <!-- Pushing data to cartInfo.php -->
        <form action='cartInfo.php' method='post' class='form-container'>
                        <input placeholder='Enter Mobile Number' name='mobile' type='text' maxlength='10' minlength='10' value='<?php echo @$mobile?>' onfocus="this.value=''"/>
                        <button class='btn btn-success' type='submit' name='cButton' value='check' style="color: white; font-weight: bold;">CHECK</button> 
                        <input placeholder='Enter Name' name='name' type='text' value='<?php echo @$name?>' onfocus="this.value=''"/>
                        <input placeholder='Enter Email' name='email' type='email' value='<?php echo @$email?>' onfocus="this.value=''"/>
                        <input placeholder='Enter Pincode' name='pincode' type='text' maxlength='6' value='<?php echo @$pincode ?>' onfocus="this.value=''"/>
                        <textarea placeholder=' Enter Address' name='address' onfocus="this.value=''"><?php echo @$address ?></textarea>
                        <button class='btn btn-success' type='submit' name='cButton' value='save' style="color: white; font-weight: bold;">SAVE</button>
        </form>
    </div>
</div>
</div>


</body>
</html>