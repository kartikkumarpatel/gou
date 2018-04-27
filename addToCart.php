<?php
	session_start();

	if (isset($_GET['nm'])) {
		$_SESSION['cart'][] = array("img" => $_GET['img'], "nm" => $_GET['nm'], "type" => $_GET['type'], "price" => $_GET['price'], "qty" => 1);
	}

	header("location: shop.php");

?>