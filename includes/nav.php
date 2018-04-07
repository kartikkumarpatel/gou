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

		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">

		    <div class="nav" id="navigation">
			  <a href="index.php" class="active">Home</a>
			  <a href="about.php">About</a>
			  <a href="shop.php">Shop</a>
			  <a href="contact.php">Contact</a>
			  
			  <a class="nav navbar-right" href="register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a>

			  <a class="nav navbar-right" href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a>

			  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
			  
			</div>
		  </div>
		</nav>