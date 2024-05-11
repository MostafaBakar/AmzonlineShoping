<?php
require_once "../../controler/db.php";
$db = new db;
$total = 0;
$dis = 0;
$elec = 0;
$fash = 0;
$home = 0;
$sport = 0;
$beauty = 0;
$super = 0;
if($db->connect()){
    $res = $db->query("SELECT * FROM buy");
    for($i = 0 ; $i< count($res); $i++){
        $id = $res[$i]['productID'];
        $pro = $db->query("SELECT * FROM product WHERE productID = $id");
        $total += ( $pro[0]['price'] * $res[$i]['quantity']);
        if($res[$i]['discount'] == 1){
            $dis += $pro[0]['price']*0.20;
        }
        if($pro[0]['categoryID'] == 1){
            $elec += $pro[0]['price'];
        }
        if($pro[0]['categoryID'] == 2){
            $fash += $pro[0]['price'];
        }
        if($pro[0]['categoryID'] == 3){
            $home += $pro[0]['price'];
        }
        if($pro[0]['categoryID'] == 4){
            $beauty += $pro[0]['price'];
        }
        if($pro[0]['categoryID'] == 5){
            $sport += $pro[0]['price'];
        }
        if($pro[0]['categoryID'] == 6){
            $super += $pro[0]['price'];
        }
        $count = $db->query("SELECT count(*) FROM buy WHERE productID = $id");

    }          
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaQuery.css">
    <link rel="icon" type="image/x-icon" href="ImageIcons/z.ico">
    <title>AMZ Admin Page</title>
</head>

<body>


    <section class="electronics" id="electronics">

        <h2 class="title">Statistics</h2>

        <div class="content">
            <div class="card">
                <div class="info">
                    <p>Sales before discount</p>
                    <p class="price"><?php echo $total  ?>$</p>
                </div>
                <div class="info" style="color: red;">
                    <p>total discount</p>
                    <p class="price"><?php echo $dis  ?>$</p>
                </div>
                <div class="info">
                    <p>Sales after discount</p>
                    <p class="price"><?php echo $total - $dis  ?>$</p>
                </div>
            </div>
        </div>

        <h2 class="title">Categories Statistics</h2>

        <div class="content">
            <div class="card">
                <div class="info">
                    <div class="cat">
                        <img src="ImageIcons/Mobiles.jpg">
                        <p>Electronics</p>
                    </div>
                    <p class="price"> <?php echo $elec  ?> $ </p>
                </div>
                <div class="info">
                    <div class="cat">
                        <img src="ImageIcons/Fashion.jpg">
                        <p>Fashion</p>
                    </div>
                    <p class="price"> <?php echo $fash  ?>$</p>
                </div>
                <div class="info">
                    <div class="cat">
                        <img src="ImageIcons/Home.jpg">
                        <p>Home & Kitchen</p>
                    </div>
                    <p class="price"> <?php echo $fash  ?>$</p>
                </div>
                <div class="info">
                    <div class="cat">
                        <img src="ImageIcons/Sports.jpg">
                        <p>Sports & Fitness</p>
                    </div>
                    <p class="price"> <?php echo $sport  ?>$</p>
                </div>
                <div class="info">
                    <div class="cat">
                        <img src="ImageIcons/Beauty.jpg">
                        <p>Beauty & Health</p>
                    </div>
                    <p class="price"> <?php echo $beauty  ?>$</p>
                </div>
                <div class="info">
                    <div class="cat">
                        <img src="ImageIcons/Supermarket.jpg">
                        <p>Supermarket</p>
                    </div>
                    <p class="price"> <?php echo $super  ?>$</p>
                </div>
            </div>
        </div>
<!--        
        <h2 class="title">products Statistics</h2>

        <div class="content">
        <div class="card">
                <div class="info">
                    <div class="cat">
                        <img src="ImageIcons/Mobiles.jpg">
                        <p>product name</p>
                    </div>
                    <div class="cat">
                        <img src="ImageIcons/Mobiles.jpg">
                        <p>seller name</p>
                    </div>
                    <p class="price">payment times</p>
                </div>       
            </div>
            <div class="card">
            <div class="info">
            <?php
           // $ids = $db->query("SELECT DISTINCT productID FROM buy");
           // $coun;
            //for($i = 0 ; $i< count($ids); $i++){
                //$id = $ids[$i]['productID'];
                //$coun = $db->query("SELECT productID,count(*) as coun FROM buy WHERE productID = $id");
                //print_r($coun);
                //echo count($ids);
           // }
            //echo $coun[1]['productID'];
            //for($i = 0 ; $i<count($coun); $i++ ){
                //echo count($ids);
                //echo count($coun);
                //$id = $coun[0]['productID'];
                //$pro = $db->query("SELECT * FROM product WHERE productID = $id");
                //print_r($pro);
            ?>

                    <div class="cat">
                        <p><?php //echo $pro[0]['name'] ?></p>
                    </div>
                    <div class="cat">
                        <p><?php /**
                            $sellerID = $pro[0]['sellerID'];
                            $s = $db->query("SELECT name FROM user WHERE userID = $sellerID");
                            echo $s[0]['name'];
                        */?></p>
                    </div>
                    <p class="price"></**?php echo $coun[0]['coun'] ?></p>
                </div>       
            </div>
            <?php
            //}
            ?> -->
        </div>


    </section>
    
    <section class="buttons">
        <a class="link" href="../upgrade/index.php">User Upgrade</a>
    </section>

</body>

</html>
