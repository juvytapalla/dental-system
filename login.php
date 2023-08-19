<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
	header("Location: index.php");
}
if (isset($_POST["submit"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
	$row = mysqli_fetch_assoc($result);
	if (mysqli_num_rows($result) > 0) {
		if ($password == $row["password"]) {
			$_SESSION["login"] = true;
			$_SESSION["id"] = $row["id"];
			header("Location:homepage.php");
		} else {
			$error[] = 'Wrong Password!';
		}
	} else {
		$error[] = 'User Not Registered!';
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="icon" type="image/x-icon" href="img/iconn.ico">
	<title>Dental Clinic</title>
	<link rel="stylesheet" href="logreg.css">

</head>

<body>
	<section class="log">
		<div class="wrapper">
			<a href="index.php"><img src="img/logo.png"></a>
			<h1>Log In</h1>
			<h2>Get Started Now!</h2>
			<h3>Elevate Your Dental Experience</h3>
			<?php
			if (isset($error)) {
				foreach ($error as $error) {
					echo '<span class="error-msg">' . $error . '</span>';
				};
			};
			?>
			<form action="" class="" method="post" autocomplete="off">
				<input type="text" name="email" id="email" required value="" placeholder="Email"> <br>
				<input class="pass" type="password" name="password" id="password" required value="" placeholder="Password">
				<span>
					<i class='bx bx-hide' aria-hidden="true" id="eye" onclick="toggle()"></i>
				</span>
				<div class="recover">
					<a href="#">Forgot Password?</a>
				</div>
				<button type="submit" name="submit">Login</button>
				<div class="member">
					Don't have an account? <a href="sign_up.php">Sign Up</a>
					<div>
			</form>
		</div>
	</section>
	<section class="foot">
		<p class="copyright"> <i>© MATES 2023 All Rights Reserved</i></p>
	</section>
</body>
<script>
	var state = false;
	var eyeIcon = document.getElementById("eye");

	function toggle() {
		var passwordField = document.getElementById("password");

		if (state) {
			passwordField.setAttribute("type", "password");
			eyeIcon.classList.remove("bx-show");
			eyeIcon.classList.add("bx-hide");
			state = false;
		} else {
			passwordField.setAttribute("type", "text");
			eyeIcon.classList.remove("bx-hide");
			eyeIcon.classList.add("bx-show");
			state = true;
		}
	}
</script>

</html>
