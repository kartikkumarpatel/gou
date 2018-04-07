<!DOCTYPE html>
<html>
<head>
	<?php include('includes/header.php'); ?>
	<title>Login</title>
</head>
<body>
	<div class="content-container">
		<?php include('includes/nav.php'); ?>

		<div class="message-form well">
			<h3 style="margin-bottom: 20px; font-family:Helvetica;">Enter your login information</h3>
			<form method="post" action="login.php">
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" name='email' class="form-control" id="email" placeholder="Enter Name" style="width: 300px;">
			  </div>
			  <div class="form-group">
			    <label for="email">Password</label>
			    <input type="password" name='email' class="form-control" id="password" placeholder="Enter Password" style="width: 300px;">
			  </div>
		
			 <input type="submit" name="submit" class="btn btn-deafult" value="Login" />
			</form>
		</div>
	</div>

</body>
</html>