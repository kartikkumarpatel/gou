<?php
	include 'includes/dbconn.php'; 
	
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$encrypt = md5($password);
		$check_user = "SELECT email from members WHERE email = '$email'";
		$user_result = mysqli_query($dbconn, $check_user);

		$insert_user = "INSERT INTO members(email, password) VALUES ('$email', '$encrypt')";

		if (empty($email) || empty($password)) {
			$message = "One of the fields have been left blank.";
		}
		else if (mysqli_num_rows($user_result) > 0) {
			$message = "User already exits with that email, please use another email.";
		}else{
			mysqli_query($dbconn, $insert_user);
			$message = "User Created. Go to login!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/header.php'; ?>
	<title>Register</title>
</head>
<body>
	<div class="content-container">
		<?php include 'includes/nav.php' ?>

		<div class="login-form well">
			<h3 class="form-title">Enter a valid email and password to register</h3>
			<form method="post" action="register.php">
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" name='email' class="form-control" id="email" placeholder="Enter Name" style="width: 300px;">
			  </div>
			  <div class="form-group">
			    <label for="email">Password</label>
			    <input type="password" name='password' class="form-control" id="password" placeholder="Enter Password" style="width: 300px;">
			  </div>
		
			 <input type="submit" name="submit" class="btn btn-deafult" value="Login" />
			</form>

			<div class="message">
				<?php echo $message ?>
			</div>
		</div>
	</div>

	<div>
		<?php include 'includes/footer.php' ?>
	</div>

</body>
</html>