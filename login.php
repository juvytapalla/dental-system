<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if (isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location:homepage.php");
        }
        else{
            echo
            "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo
        "<script> alert('User Not Registered'); </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="icon" type="image/x-icon" href="img/iconn.ico">
    <title>Dental Clinic</title>
		<link rel="stylesheet" href="logreg.css">
	
	</head>
<body>
	<section class="log">
	<div class="wrapper">
		<a href="index.php"><img src="img/logo.png"></a>
		<h1>Log In</h1>
		<h2>Get Starter Now!</h2>
		<h3>Elevate Your Dental Experience</h3>
		<form action="" class="" method="post" autocomplete="off">
			<input type="text" name="email" id="email" required value="" placeholder="Email"> <br>
			<input type="text" name="password" id="password" required value="" placeholder="Password"> <br>
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
</html>
