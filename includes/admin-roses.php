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
		<td class="col-sm-2"><input type="" name="" value="<?php echo $row['rose_name']; ?>"></td>
		<td class="col-sm-2"><input type="" name="" value="<?php echo $row['type']; ?>"></td>
		<td class="col-sm-1"><input type="" name="" value="<?php echo $row['fragrant']; ?>" style="width: 40px;"></td>
		<td class="col-sm-4"><textarea rows="5" cols="40"><?php echo $row['decription']; ?></textarea></td>
		<td class="col-sm-1"><input type="" name="" value="<?php echo $row['price']; ?>" style="width:70px;"></td>
		<td class="col-sm-1"> 
			<form action="" method="post">
				<button class="	glyphicon glyphicon-ok btn btn-default"></button>
			</form>
		</td>
		<td class="col-sm-1"> 
			<form action="" method="post">
				<button class="glyphicon glyphicon-remove btn btn-default"></button>
			</form>
		</td>
	</tr>
<?php } ?>

</table>

