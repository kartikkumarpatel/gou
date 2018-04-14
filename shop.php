<?php 
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
	<title>Shop</title>
</head>
<body>
	<div class="content-container">
		<?php include 'includes/nav.php'; ?>
		
		<div class="container-fluid">
			<div class="row row-roses">
				<div class="col-sm-2 well">
					<strong>Categories</strong>

					<?php do { ?>
					<li><a href="shop.php?typeID=<?php echo $type_nav['typeID']; ?>" <?php if ($type_id == $type_nav['typeID']) {
						echo 'class="current"';
					} ?>>
					<?php echo $type_nav['type']; ?> </a></li>

					<?php } while ($type_nav = mysqli_fetch_assoc($type_query)) ?>

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