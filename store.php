<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./CSS/store.css"/>


<?php
    $activeCat = $_GET['category'];
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "greenleaf";
    $storeData = [];
    $con = mysqli_connect($host, $user, $pass, $db);
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
    function onClick ($value) {
        if ($value)
        $url = "store.php?category=" + $value;
        else 
        $url = "store.php?category=all";
        window.location.href = $url;
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
                                <button class='AddToCartButton'>Add To Cart</button>
                            </div>
                        </div>
                ";   
                }
            }
        ?>
</div>
<footer>
  <p style="color: #367E18" class="p-3 bg-light text-center">@GreenLeaf 2022</p>
</footer>