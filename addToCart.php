<pre>
<?php
	session_start();

	if (isset($_GET['nm'])) {
		$_SESSION['cart'][] = array("nm" => $_GET['nm'], "type" => $_GET['type'], "price" => $_GET['price'], "qty" => 1);
	}

	print_r($_SESSION);
?>