<?php
// include('../Header/index.php');
require_once('../../models/production.php');
require_once('../../controler/db.php');
session_start();
$url = $_SERVER['REQUEST_URI'];
substr($url,34) ;
$id = substr($url,34) ;
$db = new db;
$pro = new production;
if($db->connect()){
$query = "SELECT * FROM product where productID = '$id'; ";
$res = $db->query($query);
}

if(isset($_POST['qut']) && (isset($_POST['cart']))){
     $pro->addCard($_SESSION['id'],$res[0]['productID'],$_POST['qut']);
} 
if((isset($_POST['wish']))){
    $pro->addWish($_SESSION['id'],$res[0]['productID']);
} 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/product page.css"> -->
    <link rel="icon" href="../Online-Shopping/imgs/Tap Icon.ico" >
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Product Page</title>
</head>
<body>

    <div class="imge">
        <div class="img0">
            <img id="img1" class="img1" src="<?php echo $res[0]['img']  ?>" alt="" width="400px" height="300px">
            <!-- <img id="img2" class="img2" src="<?php echo $res[0]['img']  ?>" alt="" width="200px" height="200px">
        </div>
        <div class="img0">
            <img class="img3" id="img3" src="<?php echo $res[0]['img']  ?>" alt="" width="200px" height="200px">
            <img class="img4" id="img4" src="<?php echo $res[0]['img']  ?>" alt="" width="200px" height="200px">
            
        </div> -->
        
        
    </div>
    <div class="discription">
        <div class="title">
            <p id="p1"><?php echo $res[0]['name']  ?></p>
        </div>
        <p class="rate1" id="p2">20,234 ratings:</p>
        <div class="rate">
            <div class="rate2">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span id="s6" class="fa fa-star" ></span>
            </div>
            <!-- <div class="rate3">
                <label for="rate4" id="p3">Send Your Rate:</label>
                <div class="rate6">
                <form action="#" method="post"> 
                    <button name="s" value="1" style="background-color: rgba(244,247,254,255); border: none; "><span id="s1"  class="fa fa-star checked1"></span></button>
                    <button name="s" value="2" style="background-color: rgba(244,247,254,255); border: none; "><span id="s2" class="fa fa-star checked1"></span></button>
                    <button name="s" value="3" style="background-color: rgba(244,247,254,255); border: none; "><span id="s3" class="fa fa-star checked1"></span></button>
                    <button name="s" value="4" style="background-color: rgba(244,247,254,255); border: none; "><span id="s4" class="fa fa-star checked1"></span></button>
                    <button name="s" value="5" style="background-color: rgba(244,247,254,255); border: none; "><span id="s5" class="fa fa-star checked1" ></span></button>
                </form>
                </div>
        </div> -->
        <div class="dis">
            <div class="discription1">
                <div class="dis1">
                    <p>Discription</p>
                </div>
                <div class="dis2">
                    <p id="p4"><?php
                    echo 'brand: ' . $res[0]['brand'] . '</br>';
                    echo $res[0]['description'];   ?> </p>
                </div>
                <p class="share1">Share this product:</p>
                <div class="share">
                    <a href="https://facebock.com" class="fa fa-facebook"></a>
                    <a href="https://web.whatsapp.com/" class="fa fa-whatsapp"></a>
                    <a href="https://twitter.com/" class="fa fa-twitter"></a>
                    <a href="https://instagram.com/" class="fa fa-instagram"></a>
                    <a href="https://linkedin.com/" class="fa fa-linkedin"></a>
                    <a href="https://snapchat.com/" class="fa fa-snapchat-ghost"></a>
                </div>
                
        </div>
        </div>
    </div>
    <!-- <div class="button8">
        <button class="button5" id="button5">DARK MODE</button>
    </div> -->
    <div class="rightside" id="rs">
        <div class="price">
            <p class="price1">BUY NOW WITH  <?php echo $res[0]['price'] ; ?> $.</p>
            <p class="price2">Price: $ <?php echo $res[0]['price'] ; ?>.</p>
            <p class="price3">AmazonGlobal Shipping: $ 504.23.</p> 
            <p class="price4">Estimated Import Fees Deposit: $ 2,089.40.</p>
            <p class="price5">Total: $ <?php echo $res[0]['price'] +  504.23 + 2,089.40; ?>.</p>
            <div class="avi">
            <?php if($res[0]['quantity']>0){
                    echo '<p>Avilable In Stock.</p>';
                }else{ 
                    echo '<p style="color:brown;">Out Of Stock.</p>';
                } ?>
            </div>
            <div class="del">
                <img class="delimg" src="https://m.media-amazon.com/images/S/sash/kIT-Lj9i1Bch8yi.png" alt="" height="15px" width="15px" >
                <p class="delp1">Delivery in <span class="eg">Egypt.</span> </p>
                <p class="delp2">you can change after confirm bill</p>
            </div>
            <div class="del">
                <img class="delimg" src="https://images-na.ssl-images-amazon.com/images/G/01/x-locale/checkout/truespc/secured-ssl._CB485936932_.png" alt="" height="15px" width="15px" >
                <p class="sec">Your Transaction Secured.  </p>
            </div>
            <div class="eme">
                <img class="emeimg" src="../Online-Shopping/imgs/1626a1f88b61117a2794e7432eb560e8.png" alt="" height="30px" width="30px" >
                <p class="sec">Please,Select <span class="eg">Quantity</span>  Before Buy.  </p>
            </div>
            <div class="quantity">
                <label for="quantity">Qut:</label>
                <form action="#" method="post">
                    <input name="qut" class="qut" type="number" id="quantity" min="1" ></input>
                
            </div>
            <div class="color">
                <p class="color1">color:</p>
                <div class="colors">
                    <button class="color2"></button>
                    <button class="color3"></button>
                    <button class="color4"></button>
                    <button class="color5"></button>
                </div>
            </div>
            <div class="buttons">
                <div class="buy">
                    <a href="../bill/bill.php"><p>BUY NOW</p></a>
                </div>
                <div class="addc">
                    <button name="cart" type="submit"><p>Add To Cart</p></button>
                    
                </div>
                <div class="addw">
                <button name="wish" type="submit"><p>Add To Wish-List</p></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="byewith" id="byewith">
        <p class="byewithp1">BYE IT WITH </p>
        <div class="img">
            <div class="img5" id="img5">
                <img class="byewithimg1" src="" alt="" width="200px" height="200px">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                <p class="view1">ADD TO CART</p>
            </div>
            <div class="img6" id="img6">
                <img class="byewithimg1" src="" alt="" width="200px" height="200px">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                <p class="view1" >ADD TO CART</p>
            </div>
            <div class="img7" id="img7">
                <img class="byewithimg1" src="" alt="" width="200px" height="200px">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                <p class="view1">ADD TO CART</p>
            </div>
            <div class="img8" id="img8">
                <img class="byewithimg1" src="" alt="" width="200px" height="200px">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                <p class="view1">ADD TO CART</p>
            </div>
    </div> -->
    

    <div class="similer">
        <p class="byewithp2">EXPLOR ANOTHER ITEMS </p>
        <div class="img">
        <div class="img100" id="img9" >
            <?php
                $cat = $res[0]['categoryID'];
                $query = "select * from product where categoryID = $cat ";
                $product = $db->query($query);
                for($i=0; $i<count($product);$i++){

            ?>
            </div>
            <div class="img5" id="img9" >
                <img class="byewithimg1" src="<?php echo $product[$i]['img']  ?>" alt="" width="200px" height="200px">
                <a href="http://localhost/MaZ/views/product/product.php?id=<?php echo $product[$i]['productID'] ?>">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p></a>
                <a style="text-decoration:none ;" href="http://localhost/MaZ/views/product/product.php?id=<?php echo $product[$i]['productID'] ?>"><p class="view1">VIEW ITEM</p></a>
            </div>
            <?php   
                }
            ?>
                </div>
            </div>
    
<!-- <div class="abdo" id="abdo">
<div class="sos">
    <div class="row">
        <div class="column1" id="column1">
            <img src="<?php echo $res[0]['img']  ?>" width="100px" height="100px" alt=""  onclick="myFunction(this);" width >
        </div>
        <div class="column2"  id="column2">
            <img src="<?php echo $res[0]['img']  ?>" width="100px" height="100px" alt=""  onclick="myFunction(this);" width >
        </div>
        <div class="column3"  id="column3">
            <img src="" width="100px" height="100px" alt=""  onclick="myFunction(this);" width >
        </div>
        <div class="column4"  id="column4">
            <img src="" width="100px" height="100px" alt=""  onclick="myFunction(this);" width >
        </div>
    </div>
</div>
<div class="container">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <img class="zoom" id="expandedImg" style="width:300px">
        <div id="imgtext"></div>
</div> -->
</div>
    
<script src="main.js"></script>

    <style>
        /* ---------- Our font ---------- */
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');



/* ---------- About the page ---------- */
*{

    font-family: 'Poppins', sans-serif;
    text-transform: capitalize;
    list-style: none;
}


.html{
    scroll-behavior: smooth;
}

body{
    /* background-color: rgba(244,247,254,255); */
    overflow-x: hidden;
    max-height: 800px;
}

.all{
    background-color: rgba(244,247,254,255);
}

/*.navbar{
    position: sticky;
    top: 0px;
    background-color: red;
    overflow: hidden;
    height: fit-content;
}*/

.navbar1{
    background-color: transparent;
    overflow: hidden;
    height: fit-content;
    border: 2px solid #0060F0;
    border-radius: 20px;
    background-color: white;
    color: #0060F0;
    position: sticky;
    top: 0px;
}

.link{
    color: black;
}

.logo{
    width: 25px;
    background-color: transparent;
    position: relative;
    right: 25px;
    height: 50px;
}
.clear{
    clear: both;
}

.logo,
.link,
.button1,
.button2{
    text-decoration: none;
    list-style: none;
    display: inline;
    float: left;
    width: calc(100%/9);
    position: relative;
}

.logo :link,
.link :link,
.button1 :link,
.button2 :link{
    text-decoration: none;
}

.button1,
.button2{
    background-color: transparent;
    border: 2px solid #0060F0 ;
    border-radius: 20px;
    width: 80px;
    height: 22px;
    color: #0060F0;
    font-size: 18px;
}

li a {
    color: #0060F0;
}

li a:hover{
    background-color: transparent;
    text-decoration: underline;
}

.link{
    position: relative;
    left: 15%;
    top: 5px;
}

.button1{
    text-align: center;
    position: relative;
    left: 300px;
    top: 15px;
}

.button2{
    text-align: center;
    position: relative;
    left: 310px;
    top: 15px;;
}

.navbar2{
    background-color: transparent;
    overflow: hidden;
    height: fit-content;
    border: 2px solid #0060F0;
    border-radius: 20px;
    color: #0060F0;
    background-color: white;
    position: sticky;
    top: 0px;
}

.cat1 :link,
.cat2 :link,
.cat3 :link,
.cat4 :link,
.cat5 :link,
.cat6 :link,
.cat7 :link,
.cat8 :link{
    text-decoration: none;
}

.cat1 ,
.cat2 ,
.cat3 ,
.cat4 ,
.cat5 ,
.cat6 ,
.cat7 ,
.cat8 {
    text-decoration: none;
    list-style: none;
    display: inline;
    float: left;
    width: calc(100%/12);
    /*background-color: bisque;*/
    font-size: 20px;
}

.search{
    box-decoration-break: clone;
    width: 400px;
    height: 30px;
    border: 1px solid #0060F0;
    border-radius: 15px;
}

.search1{
    position: relative;
    top: 5px;
}

.search1.hover{
    border: 1px solid #0060F0;
}
/*end of navbar*/





.imge{
    position: relative;
    top: 50px;
    /*right: 500px;*/
}

.img0{
    position: relative;
    top: 100px;
}

.img1,
.img2,
.img3,
.img4{
    position: relative;
    top: 0px;
    left: 30px;
}

.title{
    font-size: 35px;
    width: 500px;
    border-radius: 30px;
    color: black;
    position: relative;
    left: 30%;
    bottom: 350px;
    text-align: center;
}

.rate{
    font-size: 15px;
    position: relative;
    left: 32%;
    bottom: 370px;
}

.rate1{
    position: relative;
    left: 32%;
    bottom: 350px;
    color: #118AB2;
    font-size: 15px;

}

.checked {
    color: #118AB2;
}

.discription1{
    width: 500px;
    position: relative;
}

.dis1{
    font-size: 20px;
    font-weight: bold;
    background-color: #118AB2;
    text-align: center;
    border: 1px solid #118AB2 ;
    color: white;
    border-radius: 30px;
}

.dis{
    position: relative;
    top: 20px; 
}

.dis2{
    font-size: 15px;
    
}

.fa {
    padding: 20px;
    font-size: 20px;
    width: 20px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
}

.fa:hover {
    opacity: 0.5;
    transform: scale(0.9);
}

.fa-facebook {
    background: #3B5998;
    color: white;
}

.fa-twitter {
    background: #55ACEE;
    color: white;
}

.fa-instagram {
    background: rgb(237,41,60);
    color: white;
}

.fa-linkedin {
    background: #007bb5;
    color: white;
}

.fa-snapchat-ghost {
    background: #fffc00;
    color: white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
    background: #00aff0;
    color: white;
}

.fa-whatsapp {
    background: rgb(50,185,26);
    color: white;
}

.img1,
.img2,
.img3,
.img4,
.img5,
.img6,
.img7,
.img8{
    border: 1px solid #118AB2;
    border-radius: 15px;
}

.view0:hover{
    transform: scale(1.03);
    text-decoration: underline;
    color: #118AB2;
}

.button5 {
    background-color: #000000;
    border: none;
    border-radius: 50%;
    color: white;
    padding: 20px;
    text-align: center;
    width: 90px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    position: relative;
    left: 91%;
    bottom: 1000px;
    cursor: pointer;
}

.rightside{
    position: relative;
    left: 73%;
    bottom: 850px;
    width: 370px;
    border: #118AB2 1px solid;
    border-radius: 30px;
    padding: 14px;
}

.price1{
    color: #118AB2;
    text-align: center;
}

.price2,
.price3,
.price4,
.price5{
    color: black;
    font-size: 10px;
}

.avi{
    /*text-decoration: line-through;
    text-decoration-color: black;                                      impotrant*/                                   
    color: rgb(12, 118, 12);
    font-size: 15px;

}

.del,
.sec,
.eme{
    width: 180px;
    height: 40px;
}

.delp1{
    position: relative;
    left: 22px;
    bottom: 37px;
    font-size: 14px;
}

.delp2{
    position: relative;
    bottom: 50px;
    left: 20px;
    font-size: 10px;
}


.eg{
    text-decoration: underline;
    font-size: 17px;
    font-weight: bold;
    color: #118AB2;
}

.sec{
    position: relative;
    bottom: 33px;
    left: 30px;
    font-size: 14px;
}

.buttons{
    position: relative;
    top: 10px;
}

.colors{
    position: relative;
    left: 50px;
    bottom: 38px;
    cursor: pointer;
}

.color2{
    background-color: red;
    border: none;
    border-radius: 50%;
    color: red;
    width: 15px;
    height: 15px;
    display: inline-block;
}

.color3{
    background-color: black;
    border: none;
    border-radius: 50%;
    color: red;
    width: 15px;
    height: 15px;
    display: inline-block;
}

.color4{
    background-color: green;
    border: none;
    border-radius: 50%;
    color: red;
    width: 15px;
    height: 15px;
    display: inline-block;
}

.color5{
    background-color: blue;
    border: none;
    border-radius: 50%;
    color: red;
    width: 15px;
    height: 15px;
    display: inline-block;
}

.buy{
    position: relative;
    bottom: 20px;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
    border: 1px solid #118AB2;
    border-radius: 15px;
    text-align: center;
    background-color: #118AB2;
    color: white;
}

a{
    color: white;
    text-decoration: none;
}

.buy:hover{
    background-color: rgb(7, 218, 137);
    color: white;
    border:1px solid mediumspringgreen;
    transform: scale(0.9);
}

.addc,
.addw{
    width: 170px;
    font-weight: bold;
    font-size: 12px;
    cursor: pointer;
    border: 1px solid rgba(255,164,28);
    border-radius: 10px;
    text-align: center;
    background-color: rgba(255,164,28);
}

.addc:hover{
    background-color: rgb(7, 218, 137);
    color: #118AB2;
    border:1px solid rgb(7, 218, 137);
    transform: scale(0.9);
}

.addw:hover{
    background-color: rgb(7, 218, 137);
    color: #118AB2;
    border:1px solid rgb(7, 218, 137);
    transform: scale(0.9);
}

.addw{
    position: relative;
    left: 195px;
    bottom: 45px;
}

.addc{
    position: relative;
    top: 10px;
}

.eme{
    position: relative;
    bottom: 15px;
}

.emeimg{
    position: relative;
    top: 25px;
    right: 7px;
}

.quantity{
    position: relative;
    left: 30px;
    top: 10px;
    font-size: 15px;
}

.qut{
    color: #118AB2;
    border: 1px solid #118AB2;
    border-radius: 10px;
    text-align: center;
}

.rate4{
    font-size: small;
    color: rgba(117,178,189);
}

.rate5{
    color: darkred;
    border: 1px solid darkred;
    border-radius: 10px;
    text-align: center;
}

.byewith{
    height: 500px;
    position: relative;
    bottom: 900px;
    
}



.byewithp1{
    position: relative;
    bottom: 50px;
    text-align: center;
    font-size: 25px;
    background-color: #118AB2;
    border: 5px solid #118AB2;
    border-radius: 15px;
    color: white;
}

.byewithp2{
    position: relative;
    bottom: 180px;
    text-align: center;
    font-size: 25px;
    background-color: #118AB2;
    border: 5px solid #118AB2;
    border-radius: 15px;
    color: white;
}

.byewithimg1{
    margin-right:  80px;
    margin-left:  80px;
    position: relative;
    top: 15px;
    
}

.img5,
.img6,
.img7,
.img8{
    width: fit-content;
    background-color: white;
}



.img5{
    position: relative;
    
    bottom: 200px;
}

.img6{
    position: relative;
    left: 25%;
    bottom: 530px;
}

.img7{
    position: relative;
    left: 50%;
    bottom: 1010px;
    
}

.img8{
    position: relative;
    left: 75%;
    bottom: 1490px ;
}

.view0{
    width: 250px;
    position: relative;
    left: 10px;
    color: rgb(100, 99, 99);
    cursor: pointer;
}

.view1{
    background-color: rgba(255,164,28);
    border: 5px solid rgba(255,164,28);
    border-radius: 15px;
    cursor: pointer;
    text-align: center;
    width: 150px;
    position: relative;
    left: 100px;
}

.view1:hover{
    background-color: transparent;
    color: white;
    border: 5px solid #118AB2;
    border-color: #118AB2;
    background-color: #118AB2;
    transform:scale(0.9);
}

.similer{
    height: 500px;
    position: relative;
    bottom: 650px;
}

.end{
    position: relative;
    bottom:  1150px;
}

.column1:hover{
    background-color:#118AB2;
    transform: scale(0.8);
}

.column2:hover{
    background-color:#118AB2;
    transform: scale(0.8);
}

.column3:hover{
    background-color:#118AB2;
    transform: scale(0.8);
}

.column4:hover{
    background-color:#118AB2;
    transform: scale(0.8);
}

.column1 {
    float: left;
    padding: 10px;
    cursor: pointer;
    position: relative;
    right: 5px;
    border: #118AB2 1px solid;
    border-radius: 15px;
    height: 100px;
    width: 100px;
}

.column2 {
    float: left;
    padding: 10px;
    cursor: pointer;
    position: relative;
    top: 125px;
    right: 127px;
    border: #118AB2 1px solid;
    border-radius: 15px;
    height: 100px;
    width: 100px;

}

.column3 {
    float: left;
    padding: 10px;
    cursor: pointer;
    position: relative;
    top: 250px;
    right:250px;
    border: #118AB2 1px solid;
    border-radius: 15px;
}

.column4 {
    float: left;
    padding: 10px;
    cursor: pointer;
    position: relative;
    border: #118AB2 1px solid;
    border-radius: 15px;
    top: 380px;
    right: 372px;
}

.container{
    position: relative;
    right:350px;
    top :50px
    
}

.abdo{
    height: 550px;
    width: 900px;
    position: relative;
    bottom: 5550px;
}

.share1{
    font-weight: bold;
    font-size: 20px;
    position: relative;
    top: 50px;
    color: #007bb5;
}

.share{
    position: relative;
    top: 30px;
    padding-top: 20px;
}


    </style>
</body>
</html>

