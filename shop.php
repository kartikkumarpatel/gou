<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/header.php'; ?>
	<title>Shop</title>
</head>
<body>
	<div class="content-container">
		<?php include 'includes/nav.php'; ?>
		
		<div class="container-fluid">
			<div class="row row-roses">
				<div class="col-sm-2 well">
					<strong>Categories</strong>
				</div>

				<div class="col-sm-8 well">
					<?php include 'includes/roses.php'; ?>
				</div>

				<div class="col-sm-2 well">
					<strong>Cart</strong>
				</div>

			</div>			
		</div>
	</div>
	<div>
		<?php include'includes/footer.php'; ?>
	</div>
</body>
</html>