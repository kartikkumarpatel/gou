<?php 
	session_start();
	require_once 'includes/dbconn.php';

	if (isset($_GET['typeID'])) {
		$type_id = $_GET['typeID'];
	}else{
		$type_id = 1;
	}

	$type_sql = "SELECT typeID, type FROM type";
	$type_query = mysqli_query($dbconn, $type_sql) or die(mysqli_error()); //executes the query
	$type_nav = mysqli_fetch_assoc($type_query); //fetches the array
	$type_count = mysqli_num_rows($type_query);
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
					<table class="table table-hover" border="1px" width="50%">
						<tr>
						    <th>Image</th>
						    <th>Name</th> 
						    <th>Type</th>
						    <th>Price</th>
						    <th>Quanity</th>
						    <th>Total Price</th>
						  </tr>

						  <?php
						  	foreach ($_SESSION['cart'] as $id => $value) {
						  		$total_price = $value['qty'] * $value['price'];

						  		echo '<tr>
									    <td>'.$value['img'].'</td>
									    <td>'.$value['nm'].'</td> 
									    <td>'.$value['type'].'</td>
									    <td>'.$value['price'].'</td>
									    <td><input type="text" name="quanity" value="'.$value['qty'].'" size="2"></td>
									    <th>$'.$total_price.'</th>
									  </tr>';
						  	}
						  ?>
					</table>
				</div>
			</div>		
		</div>
</body>
</html>