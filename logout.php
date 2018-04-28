<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/header.php'; ?>
	<title>Logged Out</title>
</head>
<body>
	<div class="content-container">
		<?php include 'includes/nav.php' ?>
		
		<div class=" login-form well">
			<h4 class="logged-out">You have sucessfully logged out! <br><br> Thank You</h4>
		</div>
	</div>
	<div>
		<?php include('includes/footer.php'); ?>
	</div>
</body>
</html>