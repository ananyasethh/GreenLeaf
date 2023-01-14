<!DOCTYPE html>
<html>  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - GreenLeaf</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./CSS/cart.css" />
    <link rel="icon" href="images/logo_greenLeaf.ico">
    <script src="https://checkout.razorpay.com/v1/checkout.js"> </script>
</head>

<body>

    <?php include ('menu_cart.php'); ?>
    <?php
                $totalAmount = 0;

include ('DBconfig.php');

    if ($con) {
        $allProductDetails = [];
        if (isset($_GET['productEdit'])) {
            $operation = $_GET['operation'];
            $id = $_GET['id'];
            $data = mysqli_query($con, "SELECT products from cart where id = '$_COOKIE[userId]'");
            
            if ($operation == "add") {
                // mysqli_query($con)
                // print("AAya");
                ($row = $data->fetch_assoc());
                // print_r($data->fetch_assoc());
                $allData = get_object_vars(json_decode($row['products']));
                if (isset($allData[$id])) {
                    $allData[$id] += 1;
                    $prod = json_encode($allData);
                    mysqli_query($con, "UPDATE cart set products = '$prod' where id = '$_COOKIE[userId]'");
                }
            } else {
                ($row = $data->fetch_assoc());
                // print_r($data->fetch_assoc());
                $allData = get_object_vars(json_decode($row['products']));
                if (isset($allData[$id])) {
                    $allData[$id] -= 1;
                    if ($allData[$id] == 0) {
                        unset($allData[$id]);
                    }
                    // if (count($allData) == 0) {
                    //     $allData = [];
                    // }
                    $countOfarr = count($allData);
                    $prod = json_encode($allData);

                    $putData = $prod;
                    if ($putData == "[]") {
                        $putData = "{}";
                    }
                    mysqli_query($con, "UPDATE cart set products = '$putData' where id = '$_COOKIE[userId]'");
                }
            }
            // echo "BYE FRIENDS";

                // echo "<script> window.location.href = 'cart.php' </script> ";

            header("Location: cart.php");
            
            // echo 'window.location = "cart.php";';
        } else if (isset($_COOKIE['userId'])) {
            $data = mysqli_query($con, "SELECT products from cart where id = '$_COOKIE[userId]'");
            // echo ($_COOKIE['userId']);
            {
                while ($row = $data->fetch_assoc()) {

                    $allData = get_object_vars(json_decode($row['products']));
                    // echo (); 
                    if (!$allData)
                        $allData = [];
                    $array = array_keys($allData);

                    //$allProductDetails = [];
                    // $count = count($array);
                    // print_r($allData);
                    for ($i = 0; $i < count($array); $i++) {
                        $product = mysqli_query($con, "SELECT * from product where P_Id = '$array[$i]'");
                        $productData = ($product->fetch_array());
                        $createData = new stdClass();
                        $createData->name = $productData["P_Name"];
                        $createData->id = $productData["P_Id"];
                        $createData->price = $productData["Price"];
                        $createData->image = $productData["Image"];
                        $createData->qty = $allData[$createData->id];
                        $allProductDetails[$i] = ($createData);
                    }

                    // print_r($allProductDetails);
                    // if (isset($allData[$productId])) {
                    //     $allData[$productId] += 1;
                    //     $prod = json_encode($allData);
                    //     mysqli_query($con, "UPDATE cart set products = '$prod' where id = '$_COOKIE[userId]'");
                    // } else {
                    //     // $newData = array($productId => 1);
                    //     // $allData.array_merge($newData);
                    //     $allData = (json_decode($row['products']));
                    //     $allData->$productId = 1;
                    //     // print_r($allData);
                    //     $prod = json_encode($allData);
                    //     mysqli_query($con, "UPDATE cart set products = '$prod' where id = '$_COOKIE[userId]'");
                    // }
                }
            }
        }
    }       

    ?>
    
    <script>
        updateOrder = (id) => {
            console.log(id, "Order id is coming here");
            window.location.href = "cart.php?productEdit=true&operation=add&id=" + id;
        }

        updateOrder1 = (id) => {
            console.log(id, "Order id is coming here");
            window.location.href = "cart.php?productEdit=true&operation=sub&id=" + id;
        }


    </script>



    <div class="cart-container">
        <div class="shipping-details">
            <div class="content-wrapper">
                <div class="top">
                    <span>Shipping Details</span>
                    <!-- <button name="">Save</button>  -->
                </div>
                <div>
                    
                <!-- Pushing data to cartInfo.php -->
                    <form action='cartInfo.php' method='post' class='form-container'>
                       
                    <?php
//include 'DBconfig.php';
//include 'menu.php';

if(isset($_REQUEST['return']) && $_REQUEST['return']=="send")    //when data comes back from cartInfo.php
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
    echo "
                        <input placeholder='Enter Mobile Number' id='mobile' name='mobile' type='text' maxlength='10' minlength='10' value='$mobile' required/>
                        <button class='btn btn-success' type='submit' name='cButton' value='check' style='color: white; font-weight: bold;'>CHECK</button> 
                        <input placeholder='Enter Name' id='name' name='name' type='text' value='$name'/>
                        <input placeholder='Enter Email' id='email' name='email' type='email' value='$email'/>
                        <input placeholder='Enter Pincode' id='pincode' name='pincode' type='text' maxlength='6' value='$pincode'/>
                        <textarea placeholder=' Enter Address' id='address' name='address'>$address</textarea>
                        <button class='btn btn-success' type='submit' name='cButton' value='save' style='color: white; font-weight: bold;'>SAVE</button>

    ";
}
else
{
    echo "
    <input placeholder='Enter Mobile Number' id='mobile' name='mobile' type='text' maxlength='10' minlength='10' required/>
    <button class='btn btn-success' type='submit' name='cButton' value='check' style='color: white; font-weight: bold;'>CHECK</button> 
    <input placeholder='Enter Name' id='name' name='name' type='text'/>
    <input placeholder='Enter Email' id='email' name='email' type='email'/>
    <input placeholder='Enter Pincode' id='pincode' name='pincode' type='text' maxlength='6'/>
    <textarea placeholder=' Enter Address' id='address' name='address'></textarea>
    <button class='btn btn-success' type='submit' name='cButton' value='save' style='color: white; font-weight: bold;'>SAVE</button>
";
}
?>
                    </form>
                </div>
                <!-- <div class="order-instruction">
                    <div class="order-top">
                        <span>Order Instruction</span>
                        <button>Add</button>
                    </div>
                    <input placeholder="Please enter the additional details" />
                </div> -->
            </div>
        </div>
        <div class="cart">

            <div class="orderNow">
                <h5>Order Summary</h5>
                <button class="placeOrder" onclick="placeOrder();">Place Order</button>
            </div>
            <div class="orders-section">
                <?php
                foreach ($allProductDetails as $data) {
                    // print_r($data->name);
                    $total = $data->price * $data->qty;
                    $totalAmount += $total;
                    echo "
                    <div class='order-object'>
                        <img src='$data->image' width='80' height='80'/>
                        <div class='center-object'>
                            <h5> $data->name </h5>
                            <div class='qty'>
                                <button onclick={updateOrder('$data->id');}> + </button>
                                    $data->qty
                                <button onclick={updateOrder1('$data->id');}> - </button>
                            </div>
                        </div>
                    <span> ₹ $total </span>
                    </div>
                ";
                }
                ?>
            </div>
            <div class="totalAmount">
                <h5>Total Amount</h5>
                <h3 name="amount">₹ <?= $totalAmount ?></h3>
            </div>
        </div>
    </div>

    <?php
        $id = $_COOKIE['userId'];
        //print ("$id coming here!");
    ?>

    <script>
        placeOrder = () => {
            console.log("Order is placed", );
            var mobile = document.getElementById("mobile").value;
            // console.log(mobile);
            // return;
            if (!mobile) {
                alert("Please enter all the details!")
            }else{
            var option = {
                key: "rzp_test_1DP5mmOlF5G5ag",
                amount: <?php echo $totalAmount * 100?>,
                name: "GreenLeaf",
                description: "Test Transaction",
                image: "images/logo_greenLeaf.ico",
                handler: function (response) {
                    // //
                    //   $query0 = "INSERT INTO orders(id, cname, cmobile, amount) VALUES ('$id','$name','$mobile',$totalAmount);";
                    //    mysqli_execute_query($con, $query0);
                            //header("location: cartInfo.php");
                        
                    //execute
                    //alert(response.razorpay_payment_id);
                   window.location.href = "paymentSuccess.php?id=" + '<?php echo $id ?>' +"&amount="+'<?php echo $totalAmount ?>' + "&mobile="+ mobile;
                },
                currency: "INR",

            }
            var rzp1 = new Razorpay(option);
            rzp1.open();
        }
    }

     </script>

</body>
</html>