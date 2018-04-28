<?php 
	session_start();
	include_once 'includes/dbconn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/header.php'; ?>
	<title>Order Confirmation</title>
</head>
<body>
	<div class="content-container">
		<?php include 'includes/nav.php'; ?>
	
		<div class="container-fluid">
			<div class="well confirm-order">
				<div>
					<form action="submited.php">
						<table border="1" class="col-sm-12">
			  				<tr>
			  					<th>Name</th>
			  					<th>Quantity</th>
			  					<th>Total Price</th>
			  				</tr>
							  <?php
							  		foreach ($_SESSION['cart'] as $id => $value) {
								  		$rose_price = $value['qty'] * $value['price'];
										$total_price += $rose_price;

								  		echo '<tr>
												 <td>'.$value['nm'].'</td> 
												 <td> x'.$value['qty'].'</td>
												 <td>$'.number_format((float)$rose_price,2,'.','').'</td>
											 </tr>';
								  		}

								  		echo '<tr style=background-color:lightgray;>
								  				<td><strong>Total</strong></td>
								  				<td><strong>'.$_SESSION['total_roses'].' Roses</strong></td>
								  				<td><strong>$'.number_format((float)$total_price,2,'.','').'</strong></td>
								  			  </tr>';
								?>
						</table>
					</div>
					<input type="submit" class="btn btn-default" name="confirm" value="Confirm" style="float: right; margin-top: 10px;">
					<a href="cart.php" class="btn btn-default" style="float: right; margin-right: 5px; margin-top: 10px;">Back</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>