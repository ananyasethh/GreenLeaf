<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting....</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    include 'DBconfig.php';
    //include 'menu_cart.php';
    if ($_REQUEST['cButton'] == "check")      //if check button is pressed
    {
        $name = array();
        $email = array();
        $mobile = array();
        $pincode = array();
        $address = array();

        $mobile = $_REQUEST['mobile'];
        $query = "SELECT * FROM customer WHERE mobile = '$mobile';";
        $exe = mysqli_query($con, $query);
        if (mysqli_num_rows($exe) > 0) {
            while ($row = mysqli_fetch_assoc($exe)) {
                $name = $row['name'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $pincode = $row['pincode'];
                $address = $row['address'];
            }
        } else {
            $name = "Name Not Found! Fill and Save!";
            $email = "Email Not Found! Fill and Save!";
            //$mobile = "";
            $address = " Address Not Found! Fill and Save";
            $pincode = "Pincode Not Found! Fill and Save";
        }
        // print ("I pressed ".$name);
        // print ("I pressed ".$email);
        // print ("I pressed ".$mobile);
        // print ("I pressed ".$pincode);
        // print ("I pressed ".$address);

        echo "
            <form id='form1' action='cart.php' method='post'>
            <input type='submit' value='send' name='return'/>
            <input type='hidden' name='name' id='hidden_username' value='$name' /><br>
            <input type='hidden' name='email' id='hidden_username' value='$email' /><br>
            <input type='hidden' name='mobile' id='hidden_username' value='$mobile' /><br>
            <input type='hidden' name='address' id='hidden_username' value='$address' /><br>
            <input type='hidden' name='pincode' id='hidden_username' value='$pincode' />
            
            </form>
            ";

        //echo "You pressed check button.";
    }   //end of if mobile found
    ?>

    <script>
        document.querySelector("form").addEventListener("submit", function(evt) {
            //evt.preventDefault();
            //document.getElementById("form1").submit();
        });

        // Just call the .click method of the button
        document.querySelector("input[type='submit']").click();
    </script>


    <!-- if save button is pressed -->
    <?php
    if ($_REQUEST['cButton'] == "save")   //if save button is pressed
    {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $mobile = $_REQUEST['mobile'];
        $pincode = $_REQUEST['pincode'];
        $address = $_REQUEST['address'];
        //echo $name;
        $query = "INSERT INTO customer (name, mobile, email, address, pincode) values ('$name','$mobile','$email','$address','$pincode');";
        $exe = mysqli_query($con, $query);
        //header('location:cart.php');
        if (!$exe) {
            die("Problem occured!");
        } else {
            header('location:cart.php');
        }
        //echo "You pressed save button.";
    }

    ?>

</body>

</html>