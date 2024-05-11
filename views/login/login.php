<?php
require_once '../../controler/db.php';
$welcome = "Welcome";
session_start();
if(isset($_POST['name']) && isset($_POST['pass']) && !empty($_POST['name']) && !empty($_POST['pass'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $db = new db;
    if($db->connect()){
        $query = "select * from user where name = '$name' and password = '$pass' ";
        $res = $db->query($query);
        if($res){
            $_SESSION["id"] = $res[0]["UserID"];
            $_SESSION["name"] = $res[0]["name"];
           if($res[0]["type"] == 0){
                header("location: ../Admin/index.php");
            }else if ($res[0]["type"] == 1){
                header("location: ../sellers/seller.php");
            }else{
                header("location: ../Home/index.php");
            }
        }else
            $welcome = "wrong user name or  password" ;
            $color = "red";
    }else
        echo "sorry, connection error"; 
}

?>

<html>
    <head>
        <title>Login Form Design</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
        <style>

            /* ---------- Our font ---------- */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


            body
            {
            margin: 0;
            padding: 0;
            background-image:url(m.jpg);
            background-repeat: no-repeat;
            background-size: cover; 
            height: 420px;
            background-attachment: scroll;
            /* background-position: center; */
            font-family: 'Poppins', sans-serif;
            }
            .loginbox
            {
            width: auto;
            height: auto;
            background: rgba(0, 0 , 0 , .5);
            color:#fff;
            top:50%;
            left:50%;
            position:absolute;
            transform:translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px; 
            }
            .marioum
            {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
            }
            h1
            {
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
            }
            .loginbox p
            {
                margin: 0;
                padding: 0 0 20px;
                font-weight: bold;
            }
            .loginbox input
            {
            width: 100%;
            margin-bottom: 20px;
            }
            .loginbox input[type="text"],input[type="password"]
            {
            border:none;
            border-bottom:1px solid #fff;
            background:transparent;
            outline: none;
            height: 40px;
            color:#fff ;
            font-size: 16px;
            }
            .loginbox input[type="submit"]
            {
            border: none;
            outline: none;
            height: 40px;
            background:cornflowerblue;
            color:#fff;
            font-size: 18px;
            border-radius: 20px;
            }
            .loginbox input[type="submit"]:hover
            {
                cursor: pointer;
                background:beige;
                color: blue;
            }
            .loginbox a
            {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: white;
            }
            .loginbox a:hover
            {
            color:darkgray;

            }

        </style>
        
    </head>
    <body>
            <div class="loginbox">
                <img src="marioum.jpeg" class="marioum">
                <h1 style = "color : <?php echo htmlspecialchars($color); ?>"><?php echo htmlspecialchars($welcome); ?></h1>
                <form action = "login.php" method = "POST">
                    <p style = "color : <?php echo htmlspecialchars($color); ?>">Username</p>
                    <input type="text" name="name" placeholder="Enter Username">
                    <p style = "color : <?php echo htmlspecialchars($color); ?>">Password</p>
                    <input type="password" name="pass" placeholder="Enter Password">
                    <input type="submit" name="" value="Login">
                    <a href="#">Lost Your Password</a><br>
                    <a href="../reg/reg.php">Don’t have an account</a>
                </form>
            </div>

    </body>

</html>