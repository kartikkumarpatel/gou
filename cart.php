<?php 
	session_start();
	require_once 'includes/dbconn.php';
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
					<table class="table-hover" border="1px" width="80%" style="line-height: 30px; margin-left: auto; margin-right: auto;">
						<tr>
						    <th>Image</th>
						    <th>Name</th> 
						    <th>Price</th>
						    <th>Quanity</th>
						    <th>Total Price</th>
						    <th>Delete</th>
						  </tr>

						  <?php
						  	foreach ($_SESSION['cart'] as $id => $value) {
						  		$rose_price = $value['qty'] * $value['price'];
						  		$total_price += $value['price'];

						  		echo '<tr>
									    <td>'.$value['img'].'</td>
									    <td>'.$value['nm'].'</td> 
									    <td>'.$value['price'].'</td>
									    <td><input type="text" name="quanity" value="'.$value['qty'].'" size="2"></td>
									    <td>$'.$rose_price.'</td>
									    <td style="width:10px;"><button class="btn btn-default">Remove</button></td>
									  </tr>';
						  	}

					  			echo '<tr>
								  		<td colspan="4" style="text-align:right;"><strong>Total:</strong></td>
								  		<td><strong>$'.$total_price.'</strong></td>
								 	  </tr>';
						  ?>
					</table>
					
					<div class="cart-buttons">
						<span><button class="btn btn-default" style="padding-right: 10px;">Update</button></span>
						<span><button class="btn btn-default">Proceed</button></span>
					</div>

				</div>
			</div>		
		</div>
</body>
</html>