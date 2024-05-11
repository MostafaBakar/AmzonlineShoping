<?php
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
    <link rel="stylesheet" href="css/product page.css">
    <link rel="icon" href="../Online-Shopping/imgs/Tap Icon.ico" >
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Product Page</title>
</head>
<body>
                                                                                <!-- start of navbar -->

    <div class="navbar">
        <!-- <div class="navbar1" >
            <ul>
                <li class="logo"><a href="#"><img src="../Online-Shopping/imgs/AMZ New Logo.png" alt="" width="100px" height="60px"></a></li> -->
                <!-- <li class="link"><a href="#"><img src="../Online-Shopping/imgs/home-button.png" alt="" width="40px" height="40px"></a></li>   -->
                <!-- <li class="link" id="link"><a href="#"><img src="../Online-Shopping/imgs/contact-us.png" alt="" width="40px" height="40px"></a></li>
                <li class="link" id="link"><a href="file:///C:/My_Work/Online-Shopping/about%20us.html"><img src="../Online-Shopping/imgs/about-us.png" alt="" width="40px" height="40px"></a></li>
                <li class="link" id="link"><a href="#"><img src="../Online-Shopping/imgs/wish-list.png" alt="" width="40px" height="40px"></a></li>
                <li class="link" id="link"><a href="#"><img src="../Online-Shopping/imgs/shopping-cart.png" alt="" width="40px" height="40px"></a></li>
                <li class="link" id="link"><a href="#"><img src="../Online-Shopping/imgs/profile-user.png" alt="" width="40px" height="40px"></a></li>
                <li class="button1"><a href="#">Login</a></li>
                <li class="button2"><a href="#">Sign Up</a></li>
                <div class="clear"><p></p></div>
            </ul>
        </div>
        <p></p>
        <div class="navbar2">
            <ul>
                <li class="cat1"><a href="#">cat</a></li>
                <li class="cat2"><a href="#">cat</a></li>
                <li class="cat3"><a href="#">cat</a></li>
                <li class="cat4"><a href="#">cat</a></li>
                <li class="cat5"><a href="#">cat</a></li>
                <li class="cat6"><a href="#">cat</a></li>
                <li class="cat7"><a href="#">cat</a></li>
                <li class="cat8"><a href="#">cat</a></li>
                <input class="search" id="search1" type="search">
                <label placeholder="Search for any thing" for="search" for="search1" class="search1" ><img src="../Online-Shopping/imgs/search.png" alt="" width="20" height="20"></label>
            </ul>
        </div>
    </div> -->
    <!-- end of navbar -->

    <div class="imge">
        <div class="img0">
            <img id="img1" class="img1" src="https://m.media-amazon.com/images/I/710QdRZmrhL._AC_SX466_.jpg" alt="" width="400px" height="400px">
            <!-- <img id="img2" class="img2" src="https://www.bhphotovideo.com/images/images2500x2500/beats_by_dr_dre_900_00198_01_studio_wireless_headphones_matte_1016367.jpg" alt="" width="200px" height="200px">
        </div>
        <div class="img0">
            <img class="img3" id="img3" src="https://www.bhphotovideo.com/images/images2500x2500/beats_by_dr_dre_900_00198_01_studio_wireless_headphones_matte_1016367.jpg" alt="" width="200px" height="200px">
            <img class="img4" id="img4" src="https://www.bhphotovideo.com/images/images2500x2500/beats_by_dr_dre_900_00198_01_studio_wireless_headphones_matte_1016367.jpg" alt="" width="200px" height="200px"> -->
        </div>
        
        
    </div>
    <div class="discription">
        <div class="title">
            <p class="p1" id="p1">LAPTOP DELL</p>
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
                    <span id="s1"  class="fa fa-star checked1"></span>
                    <span id="s2" class="fa fa-star checked1"></span>
                    <span id="s3" class="fa fa-star checked1"></span>
                    <span id="s4" class="fa fa-star checked1"></span>
                    <span id="s5" class="fa fa-star" ></span>
            </div> -->
        </div>
        <div class="dis">
            <div class="discription1">
                <div class="dis1">
                    <p>Discription:</p>
                </div>
                <div class="dis2">
                    <p id="p4">Newest Dell </p>
                    <p id="p5">High Speed RAM And Enormous Space </p>
                    <!-- <p id="p6">Processor:Intel Celeron N4020 Dual-Core Processor (4MB Cache, Base Frequency at 1.1 GHz, Up to 2.8GHz)</p>
                    <p id="p7">Tech Specs:802.11ac 1x1 WiFi and Bluetooth, 1 x SD Card Reader, 1 x USB 2.0, 1 x Wedge-shaped lock slot, 1 x Power, 1 x HDMI 1.4b, 2 x USB 3.1 Gen 1, 1 x Headphone & Microphone Audio Jack</p>
                    <p id="p8">Operating System:Windows 10 Home-The Windows 10 Home operating system offers built-in security and app like Mail, Calendar, Photo, Microsoft Edge, and more to help keep you safe and productive (Free Upgrade to Windows 11)</p> -->
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
            <p class="price1">BUY NOW WITH  5,243.27 EGP.</p>
            <p class="price2">Price: EGP 2,649.65.</p>
            <p class="price3">AmazonGlobal Shipping: EGP 504.23.</p> 
            <p class="price4">Estimated Import Fees Deposit: EGP 2,089.40.</p>
            <p class="price5">Total: EGP 5,243.27.</p>
            <div class="avi">
                <p>Avilable In Stock.</p>
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
                <input class="qut" type="number" id="quantity" name="quantity" min="1" >
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
                  <a href=""><p>BUY NOW</p></a> 
                </div>
                <div class="addc">
                    <a href=""><p>Add To Cart</p></a>
                </div>
                <div class="addw">
                    <a href=""><p>Add To Wish-List</p></a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="byewith" id="byewith">
        <p class="byewithp1">BYE IT WITH </p>
        <div class="img">
            <div class="img5" id="img5">
                <img class="byewithimg1" src="https://m.media-amazon.com/images/I/61qALmGqKGL._AC_SX679_.jpg" alt="" width="200px" height="200px">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                <p class="view1">ADD TO CART</p>
            </div>
            <div class="img6" id="img6">
                <img class="byewithimg1" src="https://m.media-amazon.com/images/I/61pUul1oDlL._AC_SX679_.jpg" alt="" width="200px" height="200px">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                <p class="view1" >ADD TO CART</p>
            </div>
            <div class="img7" id="img7">
                <img class="byewithimg1" src="https://m.media-amazon.com/images/I/71RYYGUoZTL._AC_SX679_.jpg" alt="" width="200px" height="200px">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                <p class="view1">ADD TO CART</p>
            </div>
            <div class="img8" id="img8">
                <img class="byewithimg1" src="https://m.media-amazon.com/images/I/71TBiexJ+tL._AC_SX679_.jpg" alt="" width="200px" height="200px">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                <p class="view1">ADD TO CART</p>
            </div>
    </div> -->
    

    <div class="similer">
        <p class="byewithp2">EXPLOR ANOTHER ITEMS </p>
        <div class="img">
            <div class="img5" id="img9">
                <img class="byewithimg1" src="https://m.media-amazon.com/images/I/71RD3vsjIYL._AC_SX679_.jpg" alt="" width="200px" height="200px">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                <p class="view1">VIEW ITEM</p>
            </div>
            <div class="img6" id="img10">
                <img class="byewithimg1" src="https://m.media-amazon.com/images/I/618Qw03SJSS._AC_SX679_.jpg" alt="" width="200px" height="200px">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                <p class="view1" >VIEW ITEM</p>
            </div>
            <div class="img7" id="img11">
                <img class="byewithimg1" src="https://m.media-amazon.com/images/I/61WUFGXg4LL._AC_SX679_.jpg" alt="" width="200px" height="200px">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                <p class="view1">VIEW ITEM</p>
            </div>
            <div class="img8" id="img12">
                <img class="byewithimg1" src="https://images-na.ssl-images-amazon.com/images/I/71Vay8DEKVS.__AC_SY300_SX300_QL70_FMwebp_.jpg" alt="" width="200px" height="200px">
                <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                <p class="view1">VIEW ITEM</p>
            </div>
            <div class="end">
                <div class="img5" id="img13">
                    <img class="byewithimg1" src="https://m.media-amazon.com/images/I/712yl2wTDbL._AC_SX679_.jpg" alt="" width="200px" height="200px">
                    <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                    <p class="view1">VIEW ITEM</p>
                </div>
                <div class="img6" id="img14">
                    <img class="byewithimg1" src="https://m.media-amazon.com/images/I/7120GgUKj3L._AC_SX522_.jpg" alt="" width="200px" height="200px">
                    <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                    <p class="view1" >VIEW ITEM</p>
                </div>
                <div class="img7" id="img15">
                    <img class="byewithimg1" src="https://m.media-amazon.com/images/I/71c2Tqw04qL._AC_SX569_.jpg" alt="" width="200px" height="200px">
                    <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                    <p class="view1">VIEW ITEM</p>
                </div>
                <div class="img8" id="img16">
                    <img class="byewithimg1" src="https://m.media-amazon.com/images/I/61XbtVEuC5L._AC_SX679_.jpg" alt="" width="200px" height="200px">
                    <p class="view0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iure odit suscipit odio fugiat et, doloremque ipsum non hic quo saepe esse laborum fugit dignissimos facilis veritatis, mollitia nesciunt repellendus.</p>
                    <p class="view1">VIEW ITEM</p>
                </div>
            </div>
    </div>
    
<!-- <div class="abdo" id="abdo">
<div class="sos">
    <div class="row">
        <div class="column1" id="column1">
            <img src="https://m.media-amazon.com/images/I/710QdRZmrhL._AC_SX466_.jpg" width="100px" height="100px" alt=""  onclick="myFunction(this);" width >
        </div>
        <div class="column2"  id="column2">
            <img src="https://m.media-amazon.com/images/I/714SIvRmuDL._AC_SX466_.jpg" width="100px" height="100px" alt=""  onclick="myFunction(this);" width >
        </div>
        <div class="column3"  id="column3">
            <img src="https://m.media-amazon.com/images/I/71wNd5gf-LL._AC_SX466_.jpg" width="100px" height="100px" alt=""  onclick="myFunction(this);" width >
        </div>
        <div class="column4"  id="column4">
            <img src="https://m.media-amazon.com/images/I/51KCS7dSV-L._AC_SX466_.jpg" width="100px" height="100px" alt=""  onclick="myFunction(this);" width >
        </div>
    </div>
</div>
<div class="container">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <img class="zoom" id="expandedImg" style="width:300px">
        <div id="imgtext"></div>
</div>
</div> -->
    
<script src="main.js"></script>
</body>
</html>

