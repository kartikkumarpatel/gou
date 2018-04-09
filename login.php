<?php
	include_once 'includes/dbconn.php';

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$user = "SELECT * FROM members WHERE email = '$email' AND password = '$password'";
		$execute_user = mysqli_query($dbconn, $user) or die(mysqli_error());
		$data = mysqli_fetch_assoc($execute_user);

		if (empty($email) || empty($password )) {
			$message = "One of the fields have been left blank.";
		}else if(mysqli_num_rows($execute_user)) {
			session_start();
			$_SESSION['email'] = '$email';
			$_SESSION['email'] = $data['email'];
			header("Location: index.php");
			exit();
		}else{
			$message = "Incorrect email or password";
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<?php include('includes/header.php'); ?>
	<title>Login</title>
</head>
<body>
	<div class="content-container">
		<?php include('includes/nav.php'); ?>

		<div class="login-form well">
			<h3 class="form-title">Enter your login information</h3>
			<form method="post" action="login.php">
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