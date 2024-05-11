<?php
include('../Header/index.php');
require_once '../../controler/db.php';
require_once('../../models/production.php');
session_start();
$id = $_SESSION['id'];
$db = new db;
$product = new production;
if($db->connect()){
    $res = $db->query("SELECT * FROM cart WHERE userID = '$id'");
    $proID = $res[0]['productID'];
    $pro = $db->query("SELECT * FROM product WHERE productID = '$proID'");
}
if(isset($_POST['content'])){
    $product->removeCard($id, $_POST['content']);
}
$total = 0;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../Header/style.css">
<link rel="stylesheet" href="../Header/mediaQuery.css">
<link rel="stylesheet" href="../Footer/mediaQuery.css">
<link rel="stylesheet" href="../Footer/style.css">

    <title>Document</title>
</head>

<body>
    
    <div class="content1">

        <div class="card1">
            <div class="info1">
                <p>SHOPPING CART</p>
            </div>

        </div>

    </div>
    <div class="content">
        <table>
            <tr>
                <th class="pp">Product</th>

                <th>Quantity</th>
                <th>Subtotal</th>

            </tr>
            
            <?php
                for($i = 0; $i<count($res); $i++){
                    $proID = $res[$i]['productID'];
            ?>
            <tr>
                <td>
                    <div class="product-info">
                        <img class="photo" src="<?php 
                        $img = $db->query("SELECT img FROM product WHERE productID = '$proID'");
                        echo $img[0]['img'];
                        
                        
                        ?>" alt="">
                        <div>
                            <p class="product-name">
                            <?php
                            $pro = $db->query("SELECT * FROM product WHERE productID = '$proID'");
                            echo $pro[0]['name']
                             
                            ?></p>
                            <small>price: <?php  echo $pro[0]['price']?> $ </small>
                            <br>
                            <form action="" method="post">
                            <button type="submit"  name="content" value="<?php echo $pro[0]['productID'] ?>"> Remove </button>
                            </form>
                        </div>
                    </div>
                </td>
                <td>
                    <input name="q" id="myInput" type="submit" value="<?php 
                $q = $db->query("SELECT quantity FROM cart WHERE productID =  $proID and userID = $id ");
                $qut = $q[0]['quantity'];
                echo $qut;
                ?>" min="1"></td>
                <td><small>$<?php 
                echo $qut * $pro[0]['price']; 
                $total += $qut *  $pro[0]['price'];
                ?> </small> </form></td>

            </tr>
            <?php
                }
            ?>


            </tr>
        </table>


    </div>

    </div>
    <div class="content2">

        <div class="card2">

            <div class="pragraph2">
                <p>SUBTOTAL: $<?php  echo $total ?> </p>
            </div>

            <div class="info2">
                <a href="../bill/bill.php">Proceed to check</a>
            </div>

        </div>

    </div>
</body>
</html>

<?php
include('../Footer/index.html');


?>