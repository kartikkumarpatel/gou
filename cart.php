<?php 
	session_start();
	require_once 'includes/dbconn.php';

	if(isset($_GET['id'])){
		unset($_SESSION['cart'][$_GET['id']]);
	}else if (isset($_POST)) {
		foreach ($_POST as $id => $value) {
			$_SESSION['cart'][$id]['qty'] = $value;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/header.php'; ?>
	<title>Cart</title>
</head>
<body>
	<div class="content-container">
		<?php include 'includes/nav.php'; ?>
		
		<div class="container-fluid">
				<div>
					<form action="cart.php" method="post">
						<div>
							<table class="table-hover" border="1px" width="80%" style="line-height: 30px; margin-left: auto; margin-right: auto;">
								<tr>
								    <th>Image</th>
								    <th>Name</th> 
								    <th>Price</th>
								    <th>Quanity</th>
								    <th>Total Price</th>
								    <th>Delete</th>
								  </tr>

								  <!-- How the elements are added into the cart and removed from the cart -->
								  <?php
								  	foreach ($_SESSION['cart'] as $id => $value) {
								  		$rose_price = $value['qty'] * $value['price'];
										$total_price += $rose_price;
										$total_rose += $value['qty'];
										$_SESSION['total_roses'] = $total_rose;


								  		echo '<tr>
											    <td style="width:100px;"><img src="thumbnails/'.$value['img'].'"</td>
											    <td>'.$value['nm'].'</td> 
											    <td>'.$value['price'].'</td>
											    <td><input type="text" name="'.$id.'" value="'.$value['qty'].'" size="2"></td>
											    <td>$'.number_format((float)$rose_price,2,'.','').'</td>
											    <td style="width:10px;"><a class="btn btn-default" href="cart.php?id='.$id.'">Remove</a></td>
											  </tr>';
								  	}

							  			echo '<tr>
										  		<td colspan="4" style="text-align:right;"><strong>Total:</strong></td>
										  		<td><strong>$'.number_format((float)$total_price,2,'.','').'</strong></td>
										 	  </tr>';
								  ?>
							</table>
							<div class="cart-buttons">
								<input type="submit" class="btn btn-default" value="Update">
								<a href="confirm.php" class="btn btn-default">Proceed</a>
							</div>
						</div>
					</form>
				</div>
			</div>		
		</div>
		<div>
			<?php include('includes/footer.php'); ?>
		</div>
</body>
</html>