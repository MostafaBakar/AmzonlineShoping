<?php
    require_once '../../controler/db.php';
    $db = new db;
	$db->connect();
if(isset($_POST['name']) && isset($_POST['search'])){
	$name = $_POST['name'];
	$user = $db->query("SELECT * FROM user WHERE name = '$name'; ");
}
if(isset($_POST['name']) && isset($_POST['up'])){
	$name = $_POST['name'];
	$db->insert("UPDATE user SET type = 1 WHERE name = '$name';");
}
?>
<html lang="en">
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
	<link rel="icon" type="image/x-icon" href="images/z.ico">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>
<body>

	<div class="contact1">

		<div class="container-contact1">
<!-- 			
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div> -->

			<form class="contact1-form validate-form" action="" method="post">
				<span class="contact1-form-title">
					Upgrade TO Seller
				</span>

				
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<label for="">Name</label>
					<input class="input1" type="text" name="name" placeholder="Name" value="<?php if(isset($_POST['search'])) echo $user[0]['name']; ?>">
					<!-- <span class="shadow-input1"></span> -->
					<div class="search-btn">
						<input type="submit" name="search" class="search-form-btn" value="search">
							<span>
								
								<!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->
							</span>
					</input>
					</div>
				</div>

				

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<label for="">Email</label>
					<input class="input1" type="text" name="email" value="<?php if(isset($_POST['search'])) echo $user[0]['email']; ?>" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<label for="">ID      </label>
					<input class="input1" type="text" name="id" placeholder="ID" value="<?php if(isset($_POST['name'])) echo $user[0]['UserID']; ?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<label for="">Phone</label>
					<input class="input1" name="phone" placeholder="phone" value="<?php if(isset($_POST['name'])) echo $user[0]['mobile']; ?>">
					<span class="shadow-input1"></span>
				</div>

				<div class="ubgrade-btn">
					<input type="submit" class="ubgrade-form-btn" name="up" value="Upgrade">
						<span>
							
							<!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->
						</span>
</input>
				</div>
			</form>
		</div>
	</div>




	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

	<script src="js/main.js"></script>

</body>
</html>
