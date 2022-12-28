<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    #$db = "greenleaf";

    $con = mysqli_connect($host, $user, $pass);
    if(!$con)
    {
        echo "Connection failed!";
    }
    else
    {
        #TABLE PRODUCT
        $query = array();
        $query[0] = "CREATE DATABASE greenleaf;";
        $query[1] = "USE greenleaf;";

        $query[2] = "CREATE TABLE product 
                    (
                        P_Id VARCHAR(3) PRIMARY KEY,    #pl1 means plant 1, po1 means pot 1, ac1 means accessory 1
                        P_Name VARCHAR(50),
                        Price DECIMAL(6,2),
                        Category VARCHAR(12),
                        Image VARCHAR(300)                        
                    );
                ";
        
        $query[3] = "INSERT INTO product VALUES('pl1','Aloe Vera',250,'Plant','https://5.imimg.com/data5/YI/IO/MY-42326116/aloe-vera-house-plants-500x500.jpg');";
        $query[4] = "INSERT INTO product VALUES('pl2','Tulsi',189,'Plant','https://m.media-amazon.com/images/I/41IdclagCdL.jpg');";
        $query[5] = "INSERT INTO product VALUES('pl3','Kadhi Patta Plant',195,'Plant','https://www.lilplants.com/wp-content/uploads/2017/08/Curry-Leaves-1.jpg');";
        $query[6] = "INSERT INTO product VALUES('pl4','Lucky Bamboo',295,'Plant','https://m.media-amazon.com/images/I/61Kr3heRMbL._SX466_.jpg');";
        $query[7] = "INSERT INTO product VALUES('pl5','Money Plant',298,'Plant','https://m.media-amazon.com/images/I/51gSTccNChL._AC_SS450_.jpg');";
        $query[8] = "INSERT INTO product VALUES('pl6','Paneer Cimber Rose',579,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-g-miniature-rose-button-rose-pink-plant_420x.jpg?v=1662365542');";
        $query[9] = "INSERT INTO product VALUES('po1','Golden Metal Plant Pot',1540,'Pot','https://m.media-amazon.com/images/I/81pxaf3-lwL._SX679_.jpg');";
        $query[10] = "INSERT INTO product VALUES('po2','Plastic Flower Pots',659,'Pot','https://m.media-amazon.com/images/I/61OHsI3FUuL._SX679_.jpg');";
        $query[11] = "INSERT INTO product VALUES('po3','Handmade Sabaii Grass Planter',675,'Pot','https://m.media-amazon.com/images/I/9171Or1qSSL._SX679_.jpg');";
        $query[12] = "INSERT INTO product VALUES('po4','Sea Grass Planter Basket',500,'Pot','https://m.media-amazon.com/images/I/71fqdnWc+EL._SX679_.jpg');";
        $query[13] = "INSERT INTO product VALUES('po5','Self Watering Plant Pots',999,'Pot','https://m.media-amazon.com/images/I/71sajkOivvL._SX679_.jpg');";
        $query[14] = "INSERT INTO product VALUES('po6','Smiling Faces Mini Plant Pots',800,'Pot','https://i5.walmartimages.com/asr/22629c0f-a948-44cd-9f64-115479276a54.ca05c3ea7cf74bb44ffac9240e49a4f4.jpeg');";
        $query[15] = "INSERT INTO product VALUES('ac1','Leafy Tales Moss Stick',399,'Accessories','https://m.media-amazon.com/images/I/51fAlu0qtPL._SX300_SY300_QL70_FMwebp_.jpg');";
        $query[16] = "INSERT INTO product VALUES('ac2','Pruning Shears',500,'Accessories','https://m.media-amazon.com/images/I/416oYruiBhS._SY300_SX300_QL70_FMwebp_.jpg');";
        $query[17] = "INSERT INTO product VALUES('ac3','Mini Garden Tools',95,'Accessories','https://m.media-amazon.com/images/I/31Sqgql2R1L._SX300_SY300_QL70_FMwebp_.jpg');";
        $query[18] = "INSERT INTO product VALUES('ac4','Gardening Gloves',149,'Accessories','https://m.media-amazon.com/images/I/51NKKv35JzL._SX679_.jpg');";
        $query[19] = "INSERT INTO product VALUES('ac5','Watering Can',549,'Accessories','https://m.media-amazon.com/images/I/41b56A2OEUS._SX300_SY300_QL70_FMwebp_.jpg');";
        $query[20] = "INSERT INTO product VALUES('ac6','Folding Pruning Saw',349,'Accessories','https://m.media-amazon.com/images/I/71WX564OrNL._SX679_.jpg');";
        
        $query[21] = "CREATE TABLE cart
		(
		  id varchar(100),
		  products varchar(1000)
		);";

        $query[22] = "CREATE TABLE customer
        (
            name varchar(40),
            mobile varchar(10) PRIMARY KEY,
            email varchar(20),
            address longtext,
            pincode varchar(6)
        );";

        #execution
        for($i=0; $i<=22; $i++)
        {
            mysqli_query($con,$query[$i]);
        }
    }
?>