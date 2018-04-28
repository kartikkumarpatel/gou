<?php
	session_start();
	foreach ($_SESSION['cart'] as $id => $value) {
		unset($_SESSION['cart'][$id]);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/header.php' ?>
	<title>Completed</title>
</head>
<body>
	<div class="content-container">
		<?php include 'includes/nav.php'; ?>
		
		<div class="container-fluid">
			<div class=" login-form well">
				<h4 class="logged-out"">Your order has been successfully submit. Please allow up to 5 working days to receive your roses. <br><br> Thank You!</h4>
			</div>		
		</div>
	</div>
	<div>
		<?php include('includes/footer.php'); ?>
	</div>
</body>
</html>