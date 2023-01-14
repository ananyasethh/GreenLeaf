<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting Payment..</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    include 'DBconfig.php';
    include 'menu_cart.php';
    include 'orderid_maker.php';
    $orderid = $orderID;
    // echo $orderid;

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $amount = $_GET['amount'];
        $mobile = $_GET['mobile'];

        $query = array();
        $query[0] = "INSERT INTO orders(orderID, cid, cmobile, amount) VALUES('$orderid','$id','$mobile',$amount);";
        $query[1] = "UPDATE orders INNER JOIN cart ON orders.cid=cart.id SET orders.products = cart.products WHERE orders.orderID='$orderid';";
        $query[2] = "UPDATE orders INNER JOIN customer ON orders.cmobile=customer.mobile SET orders.cname = customer.name WHERE orders.cmobile='$mobile';";
        $query[3] = "DELETE FROM cart WHERE id='$id';";
        for ($i = 0; $i <= 3; $i++) {
            mysqli_query($con, $query[$i]);
        }
        //setcookie("userID", "", time() - 8640500);
    }
    header('location:index.php');

    ?>

</body>