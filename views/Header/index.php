<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="stylesheet" href="mediaQuery.css"> -->
    <link rel="icon" type="image/x-icon" href="ImageIcons/z.ico">
    <title>AMZ Online Shopping</title>

    <style>

        /* ---------- Our font ---------- */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');



        /* ---------- About the page ---------- */
        * {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {

            --main-color: #118AB2;
            --dark-color: #073B4C;

            --Crimson: #EF476F;

            --white: #fff;
            --black: #000;

        }

        /* ---------- Navegation bar ---------- */
        header {
            width: 100%;
            padding-top: 5px;
            z-index: 1000;
        }

        /* ---------- Header bar ---------- */
        .header {
            display: flex;
            justify-content: space-between;
            background-color: var(--white);
            padding: 15px 200px;
        }

        /* ---------- Left Side ---------- */
        .header-left {
            display: flex;
        }

        .logo {
            height: 30px;
            width: 95px;
        }

        .search-box {
            padding: 10px;
            margin-left: 25px;
            border: 1px solid var(--main-color);
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            font-size: 0.85em;
            width: 500px;
            height: 30px;
        }

        .search-icon {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            height: 30px;
            width: 30px;
        }

        .search-icon:hover {
            cursor: pointer;
        }

        /* ---------- Right Side ---------- */
        .header-right {
            display: flex;
        }

        .header-right img {
            margin-left: 30px;
            height: 30px;
            width: 30px;
        }

        .logo:hover {
            opacity: 0.75;
            cursor: pointer;
        }

        .header-right img:hover {
            opacity: 0.75;
            cursor: pointer;
        }

        /* ---------- Categories bar ---------- */
        .categories {
            display: flex;
            background-color: var(--main-color);
            padding: 0 200px;
            justify-content: center;
        }

        .categories a {
            color: var(--white);
            padding: 10px 20px;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 1em;
            font-weight: 500;
        }

        .categories a:hover {
            background-color: var(--dark-color);
            color: var(--white);
        }

        @media (max-width:1500px) {
            .header {
                padding: 15px 100px;
            }

            .search-box {
                width: 350px;
            }

            .categories {
                padding: 0 50px;
            }
        }


        @media (max-width:1000px) {
            .header {
                padding: 15px 50px;

            }

            .search-box {
                width: 250px;
            }

            .categories {
                font-size: 0.85em;
            }
        }

        @media (max-width:900px) {

            .categories {
                padding: 0 15px;
            }

            .categories a {
                padding: 10px;
            }

        }


        @media (max-width:800px) {
            .search-box {
                display: none;
            }

            .search-icon {
                display: none;
            }

            .categories {
                font-size: 0.75em;
                padding: 0 5px;
            }

            .categories a {
                padding: 5px;
            }
        }

        @media (max-width:575px) {

            .categories {
                display: none;
            }
        }

        @media (max-width:500px) {
            .header-left {
                display: none;
            }

            .header {
                justify-content: center;
            }

        }


    </style>

</head>

<body>

    <header>

        <div class="header">
            <div class="header-left">
                <img class="logo" src="ImageIcons/AMZ New Logo.png">
                <input class="search-box" type="text" placeholder="What are you looking for?">
                <img class="search-icon" src="ImageIcons/search-reversed.png">
            </div>
            <div class="header-right">
                <a href="../login/login.php" ><img style="margin-left: 0px;" title="Profile" src="ImageIcons/profile-user.png"></a>
                <a href="..//Cart/cart.php" ><img title="Cart" src="ImageIcons/shopping-cart.png"><a>
                <a href="..//wish/wish.php" ><img title="Wish List" src="ImageIcons/wish-list-filled.png"></a>
                <a href="..//contact/index.php" ><img title="Contact Us" src="ImageIcons/contact-us.png"></a>
                <a href="..//About Us/index.html" ><img title="About Us" src="ImageIcons/about-us.png"></a>
            </div>
        </div>

        <div class="categories">
            <a href="#electronics">Electronics</a>
            <a href="#fashion">Fashion</a>
            <a href="#home-kitchen">Home & Kitchen</a>
            <a href="#beauty-health">Beauty & Health</a>
            <a href="#sports-fitness">Sports & Fitness</a>
            <a href="#supermarket">Supermarket</a>
        </div>

    </header>


</body>

</html>