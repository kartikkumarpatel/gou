<pre>
<?php
	session_start();

	if (isset($_GET['nm'])) {
		$_SESSION['cart'][] = array("img" => $_GET['img'], "nm" => $_GET['nm'], "price" => $_GET['price'], "qty" => 1);
	}
	header("location: shop.php");
?>