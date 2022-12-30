<?php
$host = "localhost";
$user = "root";
$pass = "";
#$db = "greenleaf";
$flag = 0;

$con = mysqli_connect($host, $user, $pass);
if (!$con)  #if connection failed
{
    print "Connection failed!";
} 
else    #if connection established
{
    $checkQuery1 = mysqli_query($con, "SHOW DATABASES;");
    if (mysqli_num_rows($checkQuery1) > 0) {
        while ($row = mysqli_fetch_assoc($checkQuery1)) 
        {
            $testDB =  $row["Database"];
            if ($testDB == "greenleaf")  #database found
            {
                #print("Here I got GL");
                $flag = 1;      #database found
                //echo $flag;
            } 
        }  #print("i am in IF block;");       # while end
    }  #print("i am in 1st else block;");
}   #print ("i am out!");
#-----------------------------------------------------------------------
#-----------------------------------------------------------------------
     if($flag == 1)  #database found
        {
            print ('Database Found. Connecting...');
                //sleep(5);
                print ("header execution");
                #header('location:index.php');
                //                 #go back to index code;
        }
        else if($flag == 0)  #database not found
        {
            #print ("I AM INSIDE FLAG 2");
            #database creation
            $query = array();
            $query[0] = "CREATE DATABASE greenleaf;";
            $query[1] = "USE greenleaf;";

            #TABLE PRODUCT
            $query[2] = "CREATE TABLE product 
                (
                    P_Id VARCHAR(5) PRIMARY KEY,    #pl1 means plant 1, po1 means pot 1, ac1 means accessory 1
                    P_Name VARCHAR(50),
                    Price DECIMAL(8,2),
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
           
            $query[21] = "INSERT INTO product VALUES('pl7','Snake Plant',100,'Plant','https://plantila.in/wp-content/uploads/2022/10/snake-plant.jpeg');";
            $query[22] = "INSERT INTO product VALUES('pl8','Peace Lily',200,'Plant','https://ugmainweb.s3.ap-south-1.amazonaws.com/wp-content/uploads/2020/09/02093258/peace-lily-zoomed-3-1.webp');";
            $query[23] = "INSERT INTO product VALUES('pl9','Bougainvillea',250,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-g-bougainvillea-pink-plant.jpg?v=1634214812');";
            $query[24] = "INSERT INTO product VALUES('pl10','Ivy Golden Pothos',215,'Plant','https://peppyflora.com/wp-content/uploads/2020/10/Devils-Ivy-Golden-Pothos-Epipremnum-Aureum-Peppyflora-Product-01-a-moz.jpg');";
            $query[25] = "INSERT INTO product VALUES('pl11','Aglaonema Cutlass',936,'Plant','https://cdn.shopify.com/s/files/1/1706/1307/products/Aglaonema-Cutlass-Chinese-Evergreen-24cm.jpg?v=1626208340');";
            $query[26] = "INSERT INTO product VALUES('pl12','Cactus',32,'Plant','https://media.istockphoto.com/id/694801740/photo/cactus-in-pot-on-white-background.jpg?s=612x612&w=0&k=20&c=vrRV2yep3EjLdvRDrzGH4-RHd6iNRtBWykeQLWZMAOY=');";
            $query[27] = "INSERT INTO product VALUES('pl13','Spider Plant',240,'Plant','https://m.media-amazon.com/images/I/61KlPTnBbzL._SL1000_.jpg');";
            $query[28] = "INSERT INTO product VALUES('pl14','Bird of Paradise',1393,'Plant','https://plantila.in/wp-content/uploads/2022/10/bird-of-paradise.webp');";
            $query[29] = "INSERT INTO product VALUES('pl15','Philodendron',926,'Plant','https://www.bhg.com/thmb/1KVFqE27wZJfhH4C-71n912dLp0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/brasil-philodendron-209ea27f-4f973ad7d0fa4e34b458b6f522168927.jpg');";
            $query[30] = "INSERT INTO product VALUES('pl16','ZZ Plant',540,'Plant','https://cdn.shopify.com/s/files/1/0482/2568/1571/products/PKP04025-Copy_1800x1800.jpg?v=1647425752');";
            $query[31] = "INSERT INTO product VALUES('pl17','Firm Plant',299,'Plant','https://m.media-amazon.com/images/I/81FXKaUlSIL.jpg');";
            $query[32] = "INSERT INTO product VALUES('pl18','Yucca',299,'Plant','https://www.plantsguru.com/image/cache/foliage-plants/yucca%20variegated-800x800.jpg');";
            $query[33] = "INSERT INTO product VALUES('pl19','Aspidistra Elatior',499,'Plant','https://www.plantsguru.com/image/cache/Geo%20Bags/Aspidistra-Cast-Iron-Plant-800x800.jpg');";
            $query[34] = "INSERT INTO product VALUES('pl20','Bella Palm',221,'Plant','https://i.etsystatic.com/23697056/r/il/4894b3/2541050909/il_fullxfull.2541050909_2mc8.jpg');";
            $query[35] = "INSERT INTO product VALUES('pl21','Jade Plant',200,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-gifts-symbol-of-friendship-jade-plant-in-handi-pot-16969364668556_600x600_e4c14369-534c-4154-b09f-287434b9b820.jpg?v=1639233311');";
           
            $query[36] = "INSERT INTO product VALUES('ac7','Garden Toolkit (11 pieces)',4100,'Accessories','https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRdC_zGoe37fP7Ms3c59dQt2T-T4gBIrfS6L_-ga8S5dcC4dZZqwK3oALP-zyL0lPas2CG7YTMQDUqFjdyi-mPhZ_KGpjv-RbnjfF2kj1MM_YmdU487d_1zNQ&usqp=CAE');";
            $query[37] = "INSERT INTO product VALUES('ac8','Coir Pole (2ft)',199,'Accessories','https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSRqET0nE5o6UDQ7kAyYN6xAdXTPGJYERqQbk1HppDy2IPsyEN-3mO2iYD500X8mWcpEapzxJBF0fYHY30CWYzLqUQEALfH3o8maDmaxhGWoCOd_yIRIUsACg&usqp=CAE');";
            $query[38] = "INSERT INTO product VALUES('ac9','Desi Khurpi or Khurpa',279,'Accessories','https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcShbF6XkJ1CrGypm6AIqF_p1Y28hK84s5bqUCZNyXuxH-gcKVQKDGSlRqbC2G3uTc9xbzZIznRENFzMMjHqnv08DKNVCIAavScwiTdOTYqrBYbrUya7RYUl&usqp=CAE');";
            $query[39] = "INSERT INTO product VALUES('ac10','Garden Tool Set (6 pieces)',999,'Accessories','https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSJg5V5Gmxnv9sj1thMoR_v_7utBH3ICAGl2YbbV0kKVza_DpGl8y1l0BdvzHPnmYF41Bpp1B0rcG-Usd7kuPAaoFbWkwNJ5OjTDRFxmLtMuEe10h9whwS4&usqp=CAE');";
            $query[40] = "INSERT INTO product VALUES('ac11','Gaiti/Kudaal',620,'Accessories','https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSCrdFfXNpaSpNvEqZbJxYCL2Ne_PqXCkObvur-oHXUHG8sWhrJXn1nU8WO_3zexFlV2TsJsEmJVh9iTFHVIMxf67G8TOjFcs93-8WIr-Nm7atKld6XSQuc&usqp=CAE');";
            $query[41] = "INSERT INTO product VALUES('ac12','Stylish Watering Can',384,'Accessories','https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQRrUkrqmMYgqesKds0MF_ssya1QcbiSUFlzT-6kGE02zMGdVTyUgfpa1xu4Lzjm6YB799OGOBko-CWNz1aN7pCrOwQ_L-lchd33EvSBFU&usqp=CAE');";
            $query[42] = "INSERT INTO product VALUES('ac13','Digging Fork',727,'Accessories','https://www.nationbloom.com/img/202112100207361.jpg');";
            $query[43] = "INSERT INTO product VALUES('ac14','Printed Gardening Tools',1049,'Accessories','https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTuxqjmQ3i242Wkrgj7nQGa3dO0hA7FRsV6pE_QYWVlD9pCcz3O_7YGcO1SXTcH_99B-o9ftTskgtRSrlNT6B8tZoX4BAmd_B-dEvKsOmE-CV-Uvwl0ezzbCA&usqp=CAE');";
            $query[44] = "INSERT INTO product VALUES('ac15','Pruning Secateur',199,'Accessories','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-gardening-tools-pruning-secateur-with-grip-no-mmi-61-gardening-tool-16969227862156.jpg?v=1634226912');";
            $query[45] = "INSERT INTO product VALUES('ac16','82 pcs Garden Tool Set',3346,'Accessories','https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcT37S0qbvh03HRHFnWWSx72S8I2gi_Rs6de5lklcKXKo96YUXY5YqAd7yvYfxrV1LHm75JHYUcSDlCujt5vyHOCHS6Zafb0SQ&usqp=CAE');";
            $query[46] = "INSERT INTO product VALUES('ac17','Coir Mulch Mat',699,'Accessories','https://m.media-amazon.com/images/I/51KKDv8XYXL.jpg');";
            $query[47] = "INSERT INTO product VALUES('ac18','Leaf Rake',355,'Accessories','https://5.imimg.com/data5/TQ/BG/MY-10171564/falcon-premium-plastic-leaf-rake-500x500.jpg');";
            $query[48] = "INSERT INTO product VALUES('ac19','Metal Birdhouse',299,'Accessories','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-gardening-accessories-round-metal-birdhouse-red-16969271836812.jpg?v=1634227686');";
            $query[49] = "INSERT INTO product VALUES('ac20','Green Artificial Grass',299,'Accessories','https://cdn.shopify.com/s/files/1/0517/7792/9402/products/276f4d_97e14f6082a74b0eba26159b81f5f2a4_7Emv2_1024x.jpg?v=1612846234');";
            $query[50] = "INSERT INTO product VALUES('ac21','Pressure Sprayer (2L)',290,'Accessories','https://5.imimg.com/data5/SELLER/Default/2020/8/JW/GK/LD/2514166/0645-water-sprayer-hand-held-pump-pressure-garden-sprayer-2-l-1000x1000.jpg');";

            $query[51] = "INSERT INTO product VALUES('po7','Auto-Drainage Platic Pots',1324,'Pot','https://m.media-amazon.com/images/I/71yH0EGgjgL._AC_SX679_.jpg');";
            $query[52] = "INSERT INTO product VALUES('po8','Succlent Plant Pots',1152,'Pot','https://m.media-amazon.com/images/I/71zqkM7hIfL._AC_SX679_.jpg');";
            $query[53] = "INSERT INTO product VALUES('po9','Beaded Ceramic Planter',1158,'Pot','https://m.media-amazon.com/images/I/71PDS2VIDrL._AC_SX679_.jpg');";
            $query[54] = "INSERT INTO product VALUES('po10','Oakrain Mid Century Planters',5999,'Pot','https://m.media-amazon.com/images/I/81FPffPWo0L._AC_SX679_.jpg');";
            $query[55] = "INSERT INTO product VALUES('po11','Decorative Garden Planters',1323,'Pot','https://m.media-amazon.com/images/I/71R3Al8kkrL._AC_SX679_.jpg');";
            $query[56] = "INSERT INTO product VALUES('po12','Multicolor Flower Pots',499,'Pot','https://images-na.ssl-images-amazon.com/images/I/71J5mntIRRL.jpg');";
            $query[57] = "INSERT INTO product VALUES('po13','Panda Ceramic Pot',599,'Pot','https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTCweSW9yK4vgEAmXooiG0xeiFF-rc5HQ_inDUAi2dPoKDyD--LNCqY84LFETPPX-5jIYB0odlkPtoXmnFpB6mTVgOTlvF2RQbl3uj3THQ&usqp=CAE');";
            $query[58] = "INSERT INTO product VALUES('po14','CorsicaEden Square Ceramic Pots',439,'Pot','https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSjWyjpVGF5hbaVgd16LF9Qx_Lv85L8N7gpPu1ifnH8Uai7sFdfyuuSxR8sXpsmEVKG1CtTs-WWKZ8lC5-CMwEu-SU-UbhwK_TwshUd_a6ZmtZwPYFQFG_6nA&usqp=CAE');";
            $query[59] = "INSERT INTO product VALUES('po15','White Solid Planters',499,'Pot','https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSkglHRAjDfCw8XWetRBTtPC6jRTwINkw-oo5_oB8f1sjlT3u9kaCFKwJU7VhfG6SaIXkLsmOUVG21RcalyESeqeTd23PMdWQVdoWLhi7LCjd98QdKNDW1qIA&usqp=CAE');";
            $query[60] = "INSERT INTO product VALUES('po16','Century Plastic Pot',325,'Pot','https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSPEQmXrzbGJvzmHA9enhM59QUABgw8lD_-xP72H18ajqNl-YPiFem3bY_usBOT4UUGdDDG5vLCE6IMIvMPa-ywFgVX-ruC083dLoMWo_HkexQUZgqOLClRwUM&usqp=CAE');";
            $query[61] = "INSERT INTO product VALUES('po17','Boat Planters',499,'Pot','https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcS0rHu2oqlCQIwsAsFQV1i0zlsOtLHWL6nezPR05uesHdCATSL4Fc95iUMV2Qn0KbY9kBd3XdotMVHF67eKpWuyzs5QOY5nFRPUSPzTAMM&usqp=CAE');";
            $query[62] = "INSERT INTO product VALUES('po18','Grey Melamine Planter',329,'Pot','https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQpomRAeRfbg7mfRdg0mL06DI0mdM4q64dkZrkrILzIqGvXL-OCq4CL9S3JGbF3eB2uAgRc25nnZxSDN0TQiQm7eRCVQ_6TXqsJKi7qCPLIWpoyVwYY1D5Sbg&usqp=CAE');";
            $query[63] = "INSERT INTO product VALUES('po19','Small Bubbled Planter',999,'Pot','https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQl8wo5Lyl84oGGk8G8hExQvewIPyo_pSSaHCPLGULbgQ6Y7j1JifOfxXGh-olNRioMMQttsvEfEU28dsVbX-H7xTgWtW2AX5CJBQaTI6-AcWce822ibR7EUdRm&usqp=CAE');";
            $query[64] = "INSERT INTO product VALUES('po20','Honeycomb Ceramic Planter',269,'Pot','https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQxDBK_jhm6hMOcYTc4te2R89Iw2QiZKpXURYwsDA98qR2zc262ZKLonxpsBZPrnmw4oIgqunRv2K13ZByzYsn7DDWcIrDbNM-IxqkkVhlQBZc4Ma00FXUrQg&usqp=CAE');";
            $query[65] = "INSERT INTO product VALUES('po21','Nestasia Ceramic Planter',490,'Pot','https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQA60HKNydmU2o9sHoMzmD03ZvdqSw2Qbtz2Mtu5vTfROa_QffGo2IW9JVb3_N24N7TwfAwGvlBEAwt33sO8aVPL77kbNOTaeuONUFkZZr-&usqp=CAE');";
           
           
           $query[66] = "CREATE TABLE cart
            (
            id varchar(100),
            products varchar(1000)
            );";

            $query[67] = "CREATE TABLE customer
    (
        name varchar(40),
        mobile varchar(10) PRIMARY KEY,
        email varchar(20),
        address longtext,
        pincode varchar(6)
    );";

        $query[68] = "CREATE TABLE contactus
        (
            user VARCHAR(40),
            email VARCHAR(50),
            mobile VARCHAR(10),
            comment longtext
        );
        ";

            #execution
            for ($i = 0; $i <= 68; $i++) 
            {
                mysqli_query($con, $query[$i]);
            }
            print ("DATABASE AND TABLE CREATED HIHIHIHIHIHI");
            sleep(3);
            print ("header executed after creating database;");
            //header('location:index.php');
        }   #print("out of all code!");     #print("Flag: ".$flag);
?>