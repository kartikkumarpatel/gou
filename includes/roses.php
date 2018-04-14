<table>
		<tr>
			<th class="col-sm-1">Images</th>
			<th class="col-sm-1">Name</th>
			<th class="col-sm-1">Type</th>
			<th class="col-sm-1">Fragrant</th>
			<th class="col-sm-3">Description</th>
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
		<td class="col-sm-1"><?php echo $row['rose_name']; ?></td>
		<td class="col-sm-1"><?php echo $row['type']; ?></td>
		<td class="col-sm-1"><?php echo $row['fragrant']; ?></td>
		<td class="col-sm-3"><?php echo $row['decription']; ?></td>
		<td class="col-sm-1"><?php echo $row['price']; ?></td>
		<td class="col-sm-2">
			<button>
	          <span class="glyphicon glyphicon-minus-sign"></span>
	        </button>

        	<input type="text" name="" value="0" style="width: 20px;"> 

        	<button>
        		<span class="glyphicon glyphicon-plus-sign"></span>
			</button>
        	<br>
       		<button class="btn btn-default">Add to cart</button></td>
	</tr>

<?php } ?>

</table>

