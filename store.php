<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store - GreenLeaf</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"><link rel="stylesheet" type="text/css" href="./CSS/store.css"/>
</head>
<body>

<?php

    $activeCat = $_GET['category'];
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "greenleaf";
    $con = mysqli_connect($host, $user, $pass, $db);
    if (isset($_GET['productId'])) {
        $productId = $_GET['productId'];
        // echo $productId;
        if (isset($_COOKIE['userId'])) {
            $data = mysqli_query($con, "SELECT products from cart where id = '$_COOKIE[userId]'");
            // echo ($_COOKIE['userId']);
            if ($data->num_rows === 0) {
                // $prod = (object) array ($productId => );
                $prod = json_encode(array($productId => 1));
                mysqli_query($con, "INSERT INTO cart (id,products) values ('$_COOKIE[userId]', '$prod');");
            }
            else {
                while($row = $data->fetch_assoc()) {
                    $allData = get_object_vars(json_decode($row['products']));
                    // echo ();
                    if (isset($allData[$productId])) {
                        $allData[$productId] += 1;
                        $prod = json_encode($allData);
                        mysqli_query($con, "UPDATE cart set products = '$prod' where id = '$_COOKIE[userId]'");
                    } else {
                        // $newData = array($productId => 1);
                        // $allData.array_merge($newData);
                        $allData = (json_decode($row['products']));
                        $allData->$productId = 1;
                        // print_r($allData);
                        $prod = json_encode($allData);
                        mysqli_query($con, "UPDATE cart set products = '$prod' where id = '$_COOKIE[userId]'");
                    }
                }
            }
        }
        header("Location: store.php?category=$activeCat");
    }
    $storeData = [];
    if(!$con)
    {
        echo "Connection failed!";
    }
        else
    {
        $query =  $activeCat != 'all' ? "SELECT * from product  where Category='$activeCat'": ' SELECT * from product  ';
        $result = mysqli_query($con,$query);
        
    }



?>

<script>
    const uid = function(){
    return Date.now().toString(36) + Math.random().toString(36).substr(2);
    }
    window.onload = () => {
        // console.log(, "UID IS COMING")
        if (!localStorage.getItem('userId'))
        {
            const id = uid();
            localStorage.setItem('userId', id);
            function setCookie(name,value,exp_days) {
                var d = new Date();
                d.setTime(d.getTime() + (exp_days*24*60*60*1000));
                var expires = "expires=" + d.toGMTString();
                document.cookie = name + "=" + value + ";" + expires + ";path=/";
            }
            setCookie('userId',id,500);
            window.location.reload();
        } 
    }
    function onClick ($value) {
        if ($value)
        $url = "store.php?category=" + $value;
        else 
        $url = "store.php?category=all";
        window.location.href = $url;
    }

    addToCart = (id) => {
        let data = JSON.parse(localStorage.getItem('cart')) || {};
        if (!data[id]) {
            data[id] = {
                id: id,
                qty:1   
            }
        } else {
            data[id].qty += 1
        }
        const newData = JSON.stringify(data);
        console.log(newData, 'data added')
        localStorage.setItem('cart', newData);
        window.location.href = "store.php?productId=" + id + "&category="+ '<?= $activeCat ?>';
        // alert('Producted added in the cart');
}
</script>

<?php include 'menu.php'; ?>

<div style="padding-top: 100px; background-color: #ADE792;" class="categoryContainer">
    <span onclick="onClick();" <?php if ($activeCat === "all") echo 'class="active"' ?>>All</span>
    <span onclick="onClick('Plant');" <?php if ($activeCat === "Plant") echo 'class="active"' ?> >Plants</span>
    <span onclick="onClick('Pot');" <?php if ($activeCat === "Pot") echo 'class="active"' ?>>Pots</span>
    <span onclick="onClick('Accessories');" <?php if ($activeCat === "Accessories") echo 'class="active"' ?>>Accessories</span>
</div>

<div class="store">
        <?php 
            $array = array([]);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $name = $row['P_Name'];
                    $price = $row['Price'];
                    $image = $row['Image'];
                    $id = $row['P_Id'];
                    echo "
                        <div class='box'>
                            <div class='imageContainer'>
                                <img align='center' src='$image' alt=''/>
                            </div>      
                            <div class='contentContainer'>
                                <span class='title'>$name</span>
                                <span class='priceContainer'>$price</span>
                                <button class='AddToCartButton' onclick={addToCart('$id')}>Add To Cart</button>
                            </div>
                        </div>
                ";   
                }
            }
        ?>
</div>

        </body>
        </html>