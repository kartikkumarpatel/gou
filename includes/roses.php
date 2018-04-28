<?php
	session_start();

	if (!($_SESSION['email'])) {
		$work = "User is not logged in, if you wish to purchase roses please login.";
	}
?>
<div class="log-message">
	<p><?php echo $work ?></p>
</div>

<table>
		<tr>
			<th class="col-sm-1">Images</th>
			<th class="col-sm-2">Name</th>
			<th class="col-sm-2">Type</th>
			<th class="col-sm-1">Fragrant</th>
			<th class="col-sm-4">Description</th>
			<th class="col-sm-1">Price</th>
			<th class="col-sm-2">Action</th>
		</tr>

	<?php 
	$roses_sql = "SELECT * FROM roses, price, type WHERE roses.typeID = '".$type_id."' AND roses.typeID = type.typeID AND roses.priceID = price.priceID";

	$roses_query = mysqli_query($dbconn, $roses_sql) or die(mysqli_error());

	while ($row = mysqli_fetch_assoc($roses_query)) {
?>

	<tr class="rose-data">
		<td>
			<img src="thumbnails/<?php echo $row['rose_image']; ?>" alt="<?php echo $row['rose_name']; ?>" class="main" />
		</td>
		<td class="col-sm-2"><?php echo $row['rose_name']; ?></td>
		<td class="col-sm-2"><?php echo $row['type']; ?></td>
		<td class="col-sm-1"><?php echo $row['fragrant']; ?></td>
		<td class="col-sm-4"><?php echo $row['decription']; ?></td>
		<td class="col-sm-1"><?php echo $row['price']; ?></td>
		<td class="col-sm-2"> 
			<a class="btn btn-default" name="addCart" href="addToCart.php?&img=thumbnails/<?php echo $row['rose_image']; ?>&nm=<?php echo $row['rose_name']; ?>&type=<?php echo $row['type']; ?>&price=<?php echo $row['price']; ?>">Add To Cart</a>
		</td>
	</tr>

<?php } ?>

</table>

