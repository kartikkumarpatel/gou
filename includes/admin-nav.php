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
			  <a href="index.php" class="disabled">Home</a>
			  <a href="about.php" class="disabled">About</a>
			  <a href="shop.php">Shop</a>
			  <a href="contact.php" class="disabled">Contact</a>
			  
			  	<?php 
			  		$user = $_SESSION['email'];
			  		
			  		if ($_SESSION['email']) {
			  			echo '<a class="nav navbar-right hamburger-register" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a>';
			  			
			  			echo '<a class="nav navbar-right hamburger-register"><span class="glyphicon glyphicon-user"></span> ' .$user. '</a>';
			  		}
			  	?>

			  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
			  
			</div>
		  </div>
		</nav>