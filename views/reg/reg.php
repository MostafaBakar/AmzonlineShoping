<?php
require_once "../../controler/db.php";
$header = "Create your account. It's free and only takes a minute.";
if(isset($_POST['firstName']) && isset($_POST['pass']) && isset($_POST['lastName']) && isset($_POST['confirm_pass']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])){
    if($_POST['pass'] === $_POST['confirm_pass']){
        $name = $_POST['firstName'] . " "  . $_POST['lastName'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $addr = $_POST['address'];
        $db = new db;
        if($db->connect()){
            $query = "INSERT INTO `user` (`UserID`, `name`, `email`, `mobile`, `password`, `address`, `type`) 
            VALUES (NULL, '$name', '$email', '$mobile', '$pass', '$addr', '2');";
            $db->insert($query);
            echo "added successfuly";
        }
    }else{
        $color = "red";
        $header = "password isn't right";
        echo
        "<script> alert('password isn't same'); </script";
    }
}
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Bootstrap Simple Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</header>



<body>
    <div class="signup-form">
        <form action="#" method="post">
            <h2>Register</h2>
            <p style = "color : <?php echo htmlspecialchars($color); ?>" class="hint-text"><?php echo htmlspecialchars($header); ?></p>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="firstName" placeholder="First Name" required="required">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="lastName" placeholder="Last Name" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input  class="form-control" name="mobile" placeholder="mobile" required="required">
            </div>
            <div class="form-group">
                <input style="height: 100px"  class="form-control" name="address" placeholder="address" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <input style = "border-color : <?php echo htmlspecialchars($color); ?>" type="password" class="form-control" name="confirm_pass" placeholder="Confirm Password" required="required">
            </div>
            <div class="form-group">
                <label class="form-check-label">
                    <input name = "cheak" type="checkbox" required="required"> I accept the
                    <a href="#">Terms of Use</a> &amp;
                    <a href="#">Privacy Policy</a>
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
            </div>
        </form>
        <div class="text-center">Already have an account?
            <a href="../login/login.php">Sign in</a>
        </div>
    </div>
</body>
<style>


  body {
    margin: 0;
    padding: 0;
    background-image:url(last.jpeg);
    background-repeat: no-repeat;
    background-size: cover; 
    height: 420px;
    background-attachment: scroll;
    background-position: center;
    font-family: sans-serif;
        }

        .form-control {
            height: 40px;
            box-shadow: none;
            color: #969fa4;
        }

        .form-control:focus {
            border-color: #c00e9c;
        }

        .form-control,
        .btn {
            border-radius: 3px;
           
        }

        .signup-form {
            width: 450px;
            margin: 0 auto;
            padding: 30px 0;
            font-size: 15px;
        }

        .signup-form h2 {
            color: #636363;
            margin: 0 0 15px;
            position: relative;
            text-align: center;
        }

        .signup-form h2:before,
        .signup-form h2:after {
            content: "";
            height: 2px;
            width: 30%;
            background: #532a2a;
            position: absolute;
            top: 50%;
            z-index: 2;
        }

        .signup-form h2:before {
            left: 0;
        }

        .signup-form h2:after {
            right: 0;
        }

        .signup-form .hint-text {
            color: #999;
            margin-bottom: 30px;
            text-align: center;
        }

        .signup-form form {
            color: #999;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #f2f3f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .signup-form .form-group {
            margin-bottom: 20px;
        }

        .signup-form input[type="checkbox"] {
            margin-top: 3px;
        }

        .signup-form .btn {
            font-size: 16px;
            font-weight: bold;
            min-width: 140px;
            outline: none !important;
        }

        .signup-form .row div:first-child {
            padding-right: 10px;
        }

        .signup-form .row div:last-child {
            padding-left: 10px;
        }

        .signup-form a {
            color: rgb(214, 24, 24);
            text-decoration: underline;
        }

        .signup-form a:hover {
            text-decoration: none;
        }

        .signup-form form a {
            color: rgb(214, 24, 24);
            text-decoration: none;
        }

        .signup-form form a:hover {
            text-decoration: underline;
        }
        .btn-success{
            background-color: green;
        }
    </style>
</html>
