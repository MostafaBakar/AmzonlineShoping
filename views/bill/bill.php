<?php
require_once "../../controler/db.php";

// require('../../phpMailer/includes/Exception.php');
// require('../../phpMailer/includes/PHPMailer.php');
// require('../../phpMailer/includes/SMTP.php');
// require('../../models/user.php');

global $dis;
session_start();
$id = $_SESSION['id'];
$db = new db;
if($db->connect())
	$user  = $db->query("SELECT * FROM user WHERE userID = $id ;");
	$res = $db->query("SELECT * FROM cart WHERE userID = '$id'");
	$proID = $res[0]['productID'];
	$pro = $db->query("SELECT * FROM product WHERE productID = '$proID'");
	$total = 0;
	if(isset($_POST['confirm'])){
		if(!isset($dis))
			$maz20 = 1;
		else
			$maz20 = 0;
		for($i = 0; $i <count($res); $i++){	
			$proID = $res[$i]['productID'];
			$q = $res[$i]['quantity'];
			//$price = $db->query("SELECT price FROM product WHERE productID = '$proID'");
			//$p = $price[0]['price'];
			$quer = "INSERT INTO `buy` (`productID`, `quantity`, `discount`) VALUES ('$proID', '$q', '$maz20');";
			$db->insert($quer);
			// echo $quer;
		}

		// $email = $user[0]['email'];
		// $subject = $_POST['subject'];
		// $name = $_POST['name'];
		// $msgg = $_POST['message'];
		// $user = new user;
		// $user->send($email, $subject, $name, $msgg);

	}
?>
<div class="container">
<div class="row gutters">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card">
				<div class="card-body p-0">
					<div class="invoice-container">
						<div class="invoice-header">
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="custom-actions-btns mb-5">
										<a href="#" class="btn btn-primary">
											<i class="icon-download"></i> Download
										</a>
										<a href="#" class="btn btn-secondary">
											<i class="icon-printer"></i> Print
										</a>
									</div>
								</div>
							</div>
							<!-- Row end -->
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
									<b style="text-align:center ;" class="invoice-logo">
										Recite
                                    </b>

								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
								</div>
							</div>
							<!-- Row end -->
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
									<div class="invoice-details">
										<address>
											<?php  echo 'user id : #' . $id . '</br>'
											 . 'user name : ' . $user[0]['name'] . '</br>'
											 .'E-mail :'. $user[0]['email'] . '</br>'
											 .'Address :'. $user[0]['address'] . '</br>'
											 .'mobile :'. $user[0]['mobile'] . '</br>';

											?>
										</address>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
									<div class="invoice-details">
										<div class="invoice-num">
											<div>Invoice - #<?php echo random_int(100,10000)  ?></div>
											<div><?php echo date("D d-M-Y")  ?></div>
										</div>
									</div>													
								</div>
							</div>
							<!-- Row end -->
						</div>
						<div class="invoice-body">
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="table-responsive">
										<table class="table custom-table m-3">
											<thead>
												<tr>
													<th>Items</th>
													<th>Product ID</th>
													<th>Quantity</th>
													<th>Sub Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<?php
														for($i = 0; $i<count($res); $i++){
															$proID = $res[$i]['productID'];
															$pro = $db->query("SELECT * FROM product WHERE productID = '$proID'");
													?>
													<td>
														<?php  echo $pro[0]['name'];   ?>
														<p class="m-0 text-muted">
															<?php  echo $pro[0]['description'];   ?>
														</p>
													</td>
													<td>#<?php  echo $pro[0]['productID'];   ?></td>
													<td><?php 
													$q = $db->query("SELECT quantity FROM cart WHERE productID =  $proID and userID = $id ");
													$qut = $q[0]['quantity'];
													echo $qut;
													?></td>
													<td>$<?php 
														echo $qut * $pro[0]['price']; 
														$total += $qut *  $pro[0]['price'];
														?></td>
												</tr>
												<?php
														}
												?>
												<tr>
													<td>&nbsp;</td>
													<td colspan="2">
														<p>
															Subtotal<br>

														</p>
													</td>			
													<td>
														<p>
															<?php  echo $total . "$"; ?><br>

														</p>
													</td>
												</tr>
											</tbody>
											
										</table>
									</div>
								</div>
							</div>
							<p style="display: inline;">
								<br> <br>
							promo code: <form style="display: inline;" method="post"> <input name="promo">   </input> 
															 <button>GO</button>  <br>
															 </form>
						</p>
						<h5 style="color: red;"><strongo><?php
						if(isset($_POST['promo'])){
							if($_POST['promo'] == "AMZ20"){
								$dis = $total*0.20;
								echo '<h5 ><strong>discount -20% =  '.$dis .'</strong></h5>';
							}else{								
								echo "there is no promo code";
							}
						}
						?></strong></h5>
						<h3 class="text-success"><strong>Grand Total :  <?php  echo $total - $dis;  ?> $</strong></h3>
							<!-- Row end -->
						</div>
						<form style="text-align: center;" class="bc" method="post">
							<input style=" width: 300px" name="confirm" value="confirm" type="submit" class="conf"></input>
						</form>
						<div class="invoice-footer">
							Thank you for your Business.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
body{margin-top:20px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.bc{
	font-size: 1em;
    text-decoration: none;
    background-color: var(--main-color);
    color: #000;
    padding: 10px;
    border-radius: 5px;
}
.conf{
	font-size: 1em;
    text-decoration: none;
    background-color: var(--main-color);
    color: #000;
    padding: 10px;
    border-radius: 5px;
}
.invoice-container {
    padding: 1rem;
}
.invoice-container .invoice-header .invoice-logo {
    margin: 0.8rem 0 0 0;
    display: inline-block;
    font-size: 3.6rem;
    font-weight: 700;
    color: #2e323c;
	text-align: center;
}
.invoice-container .invoice-header .invoice-logo img {
    max-width: 130px;
}
.invoice-container .invoice-header address {
    font-size: 0.8rem;
    color: #9fa8b9;
    margin: 0;
}
.invoice-container .invoice-details {
    margin: 1rem 0 0 0;
    padding: 1rem;
    line-height: 180%;
    background: #f5f6fa;
}
.invoice-container .invoice-details .invoice-num {
    text-align: left;
    font-size: 0.8rem;
}
.invoice-container .invoice-body {
    padding: 1rem 0 0 0;
}
.invoice-container .invoice-footer {
    text-align: center;
    font-size: 0.7rem;
    margin: 5px 0 0 0;
}

.invoice-status {
    text-align: center;
    padding: 1rem;
    background: #ffffff;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    margin-bottom: 1rem;
}
.invoice-status h2.status {
    margin: 0 0 0.8rem 0;
}
.invoice-status h5.status-title {
    margin: 0 0 0.8rem 0;
    color: #9fa8b9;
}
.invoice-status p.status-type {
    margin: 0.5rem 0 0 0;
    padding: 0;
    line-height: 150%;
}
.invoice-status i {
    font-size: 1.5rem;
    margin: 0 0 1rem 0;
    display: inline-block;
    padding: 1rem;
    background: #f5f6fa;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
}
.invoice-status .badge {
    text-transform: uppercase;
}

@media (max-width: 767px) {
    .invoice-container {
        padding: 1rem;
    }
}


.custom-table {
    border: 1px solid #e0e3ec;
}
.custom-table thead {
    background: #007ae1;
}
.custom-table thead th {
    border: 0;
    color: #ffffff;
}
.custom-table > tbody tr:hover {
    background: #fafafa;
}
.custom-table > tbody tr:nth-of-type(even) {
    background-color: #ffffff;
}
.custom-table > tbody td {
    border: 1px solid #e6e9f0;
}


.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

.text-success {
    color: #00bb42 !important;
}

.text-muted {
    color: #9fa8b9 !important;
}

.custom-actions-btns {
    margin: auto;
    display: flex;
    justify-content: flex-end;
}

.custom-actions-btns .btn {
    margin: .3rem 0 .3rem .3rem;
}
</style>