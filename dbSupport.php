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
            $query[31] = "INSERT INTO product VALUES('pl17','Fern Plant',299,'Plant','https://m.media-amazon.com/images/I/81FXKaUlSIL.jpg');";
            $query[32] = "INSERT INTO product VALUES('pl18','Yucca',299,'Plant','https://www.plantsguru.com/image/cache/foliage-plants/yucca%20variegated-800x800.jpg');";
            $query[33] = "INSERT INTO product VALUES('pl19','Aspidistra Elatior',499,'Plant','https://www.plantsguru.com/image/cache/Geo%20Bags/Aspidistra-Cast-Iron-Plant-800x800.jpg');";
            $query[34] = "INSERT INTO product VALUES('pl20','Bella Palm',221,'Plant','https://i.etsystatic.com/23697056/r/il/4894b3/2541050909/il_fullxfull.2541050909_2mc8.jpg');";
            $query[35] = "INSERT INTO product VALUES('pl21','Jade Plant',200,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-gifts-symbol-of-friendship-jade-plant-in-handi-pot-16969364668556_600x600_e4c14369-534c-4154-b09f-287434b9b820.jpg?v=1639233311');";
           
            $query[36] = "INSERT INTO product VALUES('ac7','Garden Toolkit (11 pieces)',4100,'Accessories','https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRdC_zGoe37fP7Ms3c59dQt2T-T4gBIrfS6L_-ga8S5dcC4dZZqwK3oALP-zyL0lPas2CG7YTMQDUqFjdyi-mPhZ_KGpjv-RbnjfF2kj1MM_YmdU487d_1zNQ&usqp=CAE');";
            $query[37] = "INSERT INTO product VALUES('ac8','Coir Pole (2ft)',199,'Accessories','https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSRqET0nE5o6UDQ7kAyYN6xAdXTPGJYERqQbk1HppDy2IPsyEN-3mO2iYD500X8mWcpEapzxJBF0fYHY30CWYzLqUQEALfH3o8maDmaxhGWoCOd_yIRIUsACg&usqp=CAE');";
            $query[38] = "INSERT INTO product VALUES('ac9','Desi Khurpi or Khurpa',279,'Accessories','https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcShbF6XkJ1CrGypm6AIqF_p1Y28hK84s5bqUCZNyXuxH-gcKVQKDGSlRqbC2G3uTc9xbzZIznRENFzMMjHqnv08DKNVCIAavScwiTdOTYqrBYbrUya7RYUl&usqp=CAE');";
            $query[39] = "INSERT INTO product VALUES('ac10','Garden Tool Set (6 pieces)',999,'Accessories','https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSJg5V5Gmxnv9sj1thMoR_v_7utBH3ICAGl2YbbV0kKVza_DpGl8y1l0BdvzHPnmYF41Bpp1B0rcG-Usd7kuPAaoFbWkwNJ5OjTDRFxmLtMuEe10h9whwS4&usqp=CAE');";
            $query[40] = "INSERT INTO product VALUES('ac11','Gaiti/Kudaal',620,'Accessories','https://m.media-amazon.com/images/I/51jOn6z5xQL._SL1000_.jpg');";
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
           
            $query[66] = "INSERT INTO product VALUES('pl22','Azalea',499,'Plant','https://www.myplantmytaste.com/wp-content/uploads/2020/09/azalea-plant.jpg');";
            $query[67] = "INSERT INTO product VALUES('pl23','Hibiscus',399,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-plants-hibiscus-gudhal-flower-hybrid-any-color-plant-16968930951308_600x.jpg?v=1634221721');";
            $query[68] = "INSERT INTO product VALUES('pl24','Dahlia',199,'Plant','https://cdn.shopify.com/s/files/1/0555/8363/7660/files/Urban-plants-Dahlia-plants-flower-plants.jpg?v=1646701659');";
            $query[69] = "INSERT INTO product VALUES('pl25','Marigold',299,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-g-african-marigold-yellow-plant_512x512.jpg?v=1634994003');";
            $query[70] = "INSERT INTO product VALUES('pl26','Night Blooming Jasmine',349,'Plant','https://garden.ballatha.com/image/cache/catalog/Garden/Plants/JASMINE%20PLANTS/nurserylive-raat-ki-rani-raat-rani-night-blooming-jasmine-plant_520x520-520x520.jpg');";
            $query[71] = "INSERT INTO product VALUES('pl27','Portulaca, 10 O Clock (Pink)',199,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-g-portulaca-oleracea-10-O-clock-pink-plant.jpg?v=1634226669');";
            $query[72] = "INSERT INTO product VALUES('pl28','Betel Leaf Plant (Magai Paan) (Piper betle)',249,'Plant','https://ashokavanam.com/uploads/product/photo/134/Betel-Leaf-Maghai-Paan-Peppyflora-Product-01-a-moz_400x400.jpeg');";
            $query[73] = "INSERT INTO product VALUES('pl29','Button Rose',299,'Plant','https://m.media-amazon.com/images/I/81vFJ0o-QQL._SL1500_.jpg');";
            $query[74] = "INSERT INTO product VALUES('pl30','Syngonium Green',199,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-g-syngonium-green-plant-1.jpg?v=1635748764');";
            $query[75] = "INSERT INTO product VALUES('pl31','Tulip',890,'Plant','https://cdn.shopify.com/s/files/1/2690/0106/products/DSCF4358_600x.jpg?v=1638597819');";
            $query[76] = "INSERT INTO product VALUES('pl32','Schefflera Variegated Plant',479,'Plant','https://www.nationbloom.com/img/202105250222201.jpg');";
            $query[77] = "INSERT INTO product VALUES('pl33','Lemon Grass',180,'Plant','https://m.media-amazon.com/images/I/51MGszA4NEL._SL1024_.jpg');";
            $query[78] = "INSERT INTO product VALUES('pl34','Rubber Plant',499,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-g-rubber-tree-rubber-plant-ficus-elastica-black-prince-burgundy-plant.jpg?v=1634227719');";
            $query[79] = "INSERT INTO product VALUES('pl35','Kalanchoe Pumila Silver Grey',249,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-kalanchoe-pumila-silver-grey-plant.jpg?v=1634222875');";
            $query[80] = "INSERT INTO product VALUES('pl36','Sunflower',199,'Plant','https://unbeleafable.ph/wp-content/uploads/2021/01/Untitled-design-1.png');";
            $query[81] = "INSERT INTO product VALUES('pl37','Croton Plant',399,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-g-croton-plant-codiaeum-variegatum-captain-kidd-plant.jpg?v=1636463636');";
            $query[82] = "INSERT INTO product VALUES('pl38','Lantana Camara Plant',349,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-plants-lantana-camara-any-color-plant-16968992784524.jpg?v=1634226997');";
            $query[83] = "INSERT INTO product VALUES('pl39','Asparagus Meyeri',299,'Plant','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-g-asparagus-meyeri-plant.jpg?v=1636458595');";
            $query[84] = "INSERT INTO product VALUES('pl40','Dwarf Pink Ixora',370,'Plant','https://cdn.shopify.com/s/files/1/0284/2450/products/Dwarf_Pink_Ixora_800x.jpg?v=1591538918');";
            $query[85] = "INSERT INTO product VALUES('pl41','Bonsai',1099,'Plant','https://empire-s3-production.bobvila.com/articles/wp-content/uploads/2021/05/types_of_bonsai_trees_3.jpg');";
            $query[86] = "INSERT INTO product VALUES('pl42','Alworthia Black Gem',499,'Plant','https://m.media-amazon.com/images/I/41xFh4iJuML._SL1024_.jpg');";

            $query[87] = "INSERT INTO product VALUES('po22','3 Inch (8 cm) Square Glass Vase',149,'Pot','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-planters-3-inch-8-cm-square-glass-vase-16968468037772.jpg?v=1634207606');";
            $query[88] = "INSERT INTO product VALUES('po23','Bonsai Square Ceramic Pot',499,'Pot','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-planters-5-1-inch-13-cm-bonsai-square-ceramic-pot-brown-16968496283788_700x700.jpg?v=1634209920');";
            $query[89] = "INSERT INTO product VALUES('po24','Polka Railing Oval (Pack of 5)',999,'Pot','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-g-12-inch-30-cm-polka-railing-oval-metal-planter-pack.jpg?v=1664268478');";
            $query[90] = "INSERT INTO product VALUES('po25','Cylindrical Glass Pot (Pack of 3)',999,'Pot','https://m.media-amazon.com/images/I/71gKwkrbiAL._AC_SL1500_.jpg');";
            $query[91] = "INSERT INTO product VALUES('po26','Handi Shape Round Ceramic Pot (Pack of 5)',509,'Pot','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-3-inch-handi-shape-round-ceramic-pots-pack-of-five.jpg?v=1634208197');";
            $query[92] = "INSERT INTO product VALUES('po27','Elephant Shape Pot (Set of 2)',599,'Pot','https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-planters-3-7-inch-9-cm-elephant-shape-marble-finish-ceramic-pot-white-16968461451404_512x512.jpg?v=1634207908');";
            $query[93] = "INSERT INTO product VALUES('po28','Face Planters',799,'Pot','https://i.pinimg.com/736x/25/4b/f4/254bf4670138401f6c2259a5060f36dc.jpg');";


          
            $query[94] = "INSERT INTO product VALUES('ac22','Plant Stand for Balcony',740,'Accessories','https://sc04.alicdn.com/kf/Heb92e32bfa684ba784408399c5a0437dX.jpg');";
            $query[95] = "INSERT INTO product VALUES('ac23','Tall Plant Stand',2999,'Accessories','https://m.media-amazon.com/images/I/61rx8u8YNML._AC_SL1001_.jpg');";

           
           $query[96] = "CREATE TABLE cart
            (
            id varchar(100),
            products varchar(1000)
            );";

            $query[97] = "CREATE TABLE customer
    (
        name varchar(40),
        mobile varchar(10) PRIMARY KEY,
        email varchar(20),
        address longtext,
        pincode varchar(6)
    );";

        $query[98] = "CREATE TABLE contactus
        (
            user VARCHAR(40),
            email VARCHAR(50),
            mobile VARCHAR(10),
            comment longtext
        );
        ";

            #execution
            for ($i = 0; $i <= 98; $i++) 
            {
                mysqli_query($con, $query[$i]);
            }
            print ("DATABASE AND TABLE CREATED HIHIHIHIHIHI");
            sleep(3);
            print ("header executed after creating database;");
            //header('location:index.php');
        }   #print("out of all code!");     #print("Flag: ".$flag);
?>