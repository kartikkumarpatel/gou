<script>
function myFunction() {
    var x = document.getElementById("navigation");
    if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}
</script>

<?php
	session_start();
?>


		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">

		    <div class="nav" id="navigation">
			  <a href="index.php" class="active">Home</a>
			  <a href="about.php">About</a>
			  <a href="shop.php">Shop</a>
			  <a href="contact.php">Contact</a>
			  
			  	<?php
			  		$logout = 'Logout';
			  		$register = "Register";

			  		if (!$_SESSION['email']) {
			  			echo '<a class="nav navbar-right hamburger-register" href="register.php"><span class="glyphicon glyphicon-log-in"></span> ' .$register. '</a>';
			  		}else{
			  			echo '<a class="nav navbar-right hamburger-register" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> ' .$logout. '</a>';
			  		}
			  	?>

			  	<?php 
			  		$login = "Login";
			  		$user = $_SESSION['email'];
			  		
			  		$added = count($_SESSION['cart']);

			  		if ($_SESSION['email']) {
			  			echo '<a class="nav navbar-right hamburger-register"><span class="glyphicon glyphicon-user"></span> ' .$user. '</a>';

			  			 echo '<a class="nav navbar-right hamburger-register" href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> ' .$added. ' Items </a>';
			  		}else{
			  			echo '<a class="nav navbar-right hamburger-register" href="login.php"><span class="glyphicon glyphicon-user"></span> ' .$login. '</a>';
			  		}
			  	?>

			  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
			  
			</div>
		  </div>
		</nav>