<?php
include('../Header/index.php');
require_once '../../controler/db.php';
require_once '../../models/production.php';
$db = new db;
$pro = new production;
if($db->connect()){
    $query = "select * from product where categoryID = 1 ";
    $elec = $db->query($query);
    $query = "select * from product where categoryID = 2 ";
    $fashion = $db->query($query);
    $query = "select * from product where categoryID = 3 ";
    $home = $db->query($query);
    $query = "select * from product where categoryID = 4 ";
    $beauty = $db->query($query);
    $query = "select * from product where categoryID = 5 ";
    $sports = $db->query($query);
    $query = "select * from product where categoryID = 6 ";
    $super = $db->query($query);

}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../Header/style.css">
    <link rel="stylesheet" href="../Header/mediaQuery.css">
    <link rel="stylesheet" href="mediaQuery.css">
    <link rel="stylesheet" href="../Footer/mediaQuery.css">
    <link rel="stylesheet" href="../Footer/style.css">
    <link rel="icon" type="image/x-icon" href="ImageIcons/z.ico">
    <title>AMZ Online Shopping</title>
</head>

<body>

    <section class="main">
        <div>
            <img class="mySlides" src="Images/img1.jpg">
            <img class="mySlides" src="Images/img2.jpg">
            <img class="mySlides" src="Images/img3.jpg">
            <img class="mySlides" src="Images/img4.jpg">
            <img class="mySlides" src="Images/img5.jpg">
        </div>
    </section>

    <section class="electronics" id="electronics">

        <h2 class="title">Electronics</h2>

        <div class="content">

            <?php
                for($i = 0; $i < count($elec) ; $i++){
                ?>
                            <a style="text-decoration: none ;" href="http://localhost/MaZ/views/product/product.php?id=<?php echo $elec[$i]['productID'] ?>">
                            <div class="card">
                                <div class="image">
                                    <img src="<?php  echo $elec[$i]['img'] ?>" />
                                </div>
                                <div class="info" id="pro">
                                    <p id="pro"><?php echo $elec[$i]['name']  ?></p>
                                </div>
                            </div></a>
                <?php
                }
            ?>

        </div>

    </section>

    <section class="fashion" id="fashion">

        <h2 class="title">Fashion</h2>

        <div class="content">

            <div class="card">
                <div class="image">
                    <img src="Images/Fashion/men.jpg" />
                </div>
                <div class="info">
                    <p>Men's Fashion</p>
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Fashion/women.jpg" />
                </div>
                <div class="info">
                    <p>Women's Fasion</p>
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Fashion/boysAndGirls.jpg" />
                </div>
                <div class="info">
                    <p>Boys and Girls</p>
                </div>
            </div>

            <?php
                for($i = 0; $i < count($fashion) ; $i++){
                ?>
                            <a style="text-decoration: none ;" href="http://localhost/MaZ/views/product/product.php?id=<?php echo $fashion[$i]['productID'] ?>"><div class="card">
                                <div class="image">
                                    <img src="<?php  echo $fashion[$i]['img'] ?>" />
                                </div>
                                <div class="info">
                                    <p><?php echo $fashion[$i]['name']  ?></p>
                                </div>
                            </div></a>
                <?php
                }
            ?>

        </div>

    </section>

    <section class="beauty-deals">

        <h2 class="title">Beauty Deals -<span> Up to 65% off</span></h2>

        <div class="content">

            <div class="card">
                <div class="image">
                    <img src="Images/Beauty Deals/(1).jpg" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Beauty Deals/(2).jpg" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Beauty Deals/(3).jpg" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Beauty Deals/(4).jpg" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Beauty Deals/(5).jpg" />
                </div>
            </div>

        </div>

    </section>

    <section class="home-kitchen" id="home-kitchen">

        <img class="title-img" src="Images/Home & Kitchen/home.png" />

        <div class="content">

            <div class="card">
                <div class="image">
                    <img src="Images/Home & Kitchen/home(1).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Home & Kitchen/home(2).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Home & Kitchen/home(3).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Home & Kitchen/home(4).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Home & Kitchen/home(5).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Home & Kitchen/home(6).png" />
                </div>
            </div>

            <?php
                for($i = 0; $i < count($home) ; $i++){
                ?>
                            <a style="text-decoration: none ;" href="http://localhost/MaZ/views/product/product.php?id=<?php echo $home[$i]['productID'] ?>"><div class="card">
                                <div class="image">
                                    <img src="<?php  echo $home[$i]['img'] ?>" />
                                </div>
                                <div class="info">
                                    <p><?php echo $home[$i]['name']  ?></p>
                                </div>
                            </div></a>
                <?php
                }
            ?>

        </div>

        <img class="title-img" src="Images/Home & Kitchen/dishes.png" />

        <div class="content">

            <div class="card">
                <div class="image">
                    <img src="Images/Home & Kitchen/dishs.png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Home & Kitchen/water.png" />
                </div>
            </div>

        </div>

    </section>

    <section class="beauty-health" id="beauty-health">

            <h2 class="title">Beauty & Health</h2>

            <img style="width: 100%; padding: 50px 0;" src="Images/Beauty & health/beauty-health.png">

            <div class="content">

            <div class="card">
                <div class="image">
                    <img src="Images/Beauty & Health/Category(1).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Beauty & Health/Category(2).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Beauty & Health/Category(3).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Beauty & Health/Category(4).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Beauty & Health/Category(5).png" />
                </div>
            </div>

                <?php
                    for($i = 0; $i < count($beauty) ; $i++){
                    ?>
                                <a style="text-decoration: none ;" href="http://localhost/MaZ/views/product/product.php?id=<?php echo $beauty[$i]['productID'] ?>"><div class="card">
                                    <div class="image">
                                        <img src="<?php  echo $beauty[$i]['img'] ?>" />
                                    </div>
                                    <div class="info">
                                        <p><?php echo $beauty[$i]['name']  ?></p>
                                    </div>
                                </div></a>
                    <?php
                    }
                ?>

            </div>

            <h2 style="font-weight: 500; color: var(--white); margin: 50px 0;" class="title">Makeup must-haves</h2>

        <div class="content">

            <div style="width: 45em;" class="card">
                <div class="image">
                    <img src="Images/Beauty & Health/set(1).png" />
                </div>
            </div>

            <div style="width: 45em;" class="card">
                <div class="image">
                    <img src="Images/Beauty & Health/set(2).png" />
                </div>
            </div>

        </div>

        <div class="content">

            <div style="width: 40em;" class="card">
                <div class="image">
                    <img src="Images/Beauty & Health/men.png" />
                </div>
            </div>

            <div style="width: 40em;" class="card">
                <div class="image">
                    <img src="Images/Beauty & Health/women.png" />
                </div>
            </div>

        </div>

    </section>

    <section class="sports-fitness" id="sports-fitness">

        <img style="width: 100%;" src="Images/Sports & Fitness/sports-fitness(1).gif">

        <h2 class="title">Sports & Fitness</h2>

        <div class="content">

        <div class="card">
                <div class="image">
                    <img src="Images/Sports & Fitness/sports(1).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Sports & Fitness/sports(2).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Sports & Fitness/sports(3).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Sports & Fitness/sports(4).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Sports & Fitness/sports(5).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Sports & Fitness/sports(6).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Sports & Fitness/sports(7).png" />
                </div>
            </div>

            <?php
                for($i = 0; $i < count($sports) ; $i++){
                ?>
                            <a style="text-decoration: none ;" href="http://localhost/MaZ/views/product/product.php?id=<?php echo $sports[$i]['productID'] ?>"><div class="card">
                                <div class="image">
                                    <img src="<?php  echo $sports[$i]['img'] ?>" />
                                </div>
                                <div class="info">
                                    <p><?php echo $sports[$i]['name']  ?></p>
                                </div>
                            </div></a>
                <?php
                }
            ?>
            
        </div>

    </section>


    <section class="supermarket" id="supermarket">
        <div>
            <img class="mySlidess" src="Images/Supermarket/Supermarket(1).gif">
            <img class="mySlidess" src="Images/Supermarket/Supermarket(1).png">
            <img class="mySlidess" src="Images/Supermarket/Supermarket(2).png">
            <img class="mySlidess" src="Images/Supermarket/Supermarket(3).png">
            <img class="mySlidess" src="Images/Supermarket/Supermarket(4).png">
        </div>

        <h2 class="title">Grocery picks</h2>

        <div class="content">

            <?php
                for($i = 0; $i < count($super) ; $i++){
                ?>
                            <a style="text-decoration: none ;" href="http://localhost/MaZ/views/product/product.php?id=<?php echo $super[$i]['productID'] ?>"><div class="card">
                                <div class="image">
                                    <img src="<?php  echo $super[$i]['img'] ?>" />
                                </div>
                                <div class="info">
                                    <p><?php echo $super[$i]['name']  ?></p>
                                </div>
                            </div></a>
                <?php
                }
            ?>

            <div class="card">
                <div class="image">
                    <img src="Images/Supermarket/modules(1).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Supermarket/modules(2).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Supermarket/modules(3).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Supermarket/modules(4).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Supermarket/modules(5).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Supermarket/modules(6).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Supermarket/modules(7).png" />
                </div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="Images/Supermarket/modules(8).png" />
                </div>
            </div>

        </div>

        <h2 class="title">New arrivals</h2>

        <div class="content">

            <div style="width: auto;" class="card">
                <div class="image">
                    <img src="Images/Supermarket/Drinks(1).png" />
                </div>
            </div>

            <div style="width: auto;" class="card">
                <div class="image">
                    <img src="Images/Supermarket/Drinks(2).png" />
                </div>
            </div>

        </div>

    </section>

    <script>

        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var y = document.getElementsByClassName("mySlidess");
            for (i = 0; i < x.length, i < y.length; i++) {
                x[i].style.display = "none";
                y[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) { slideIndex = 1 }
            if (slideIndex > y.length) { slideIndex = 1 }
            x[slideIndex - 1].style.display = "flex";
            y[slideIndex - 1].style.display = "flex";
            setTimeout(carousel, 2500);
        }

    </script>

</body>

</html>
<?php
include('../Footer/index.html');
?>
