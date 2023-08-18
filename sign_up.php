<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $contact_no = $_POST["contact_no"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE first_name = '$first_name' AND last_name = '$last_name' AND email = '$email' ");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Name or Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('','$first_name','$last_name','$contact_no','$email','$password')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Registration Successful'); </script>";
        }
        else{
            echo
            "<script> alert('Password Does Not Match'); </script>";
        }
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
    <section class="sig">
	<div class="wrapper">
		<a href="index.php"><img src="img/logo.png"></a>
		<h1>Sign Up</h1>
		<form class="" action="" method="post" autocomplete="off">
			<input type="text" name="first_name" id="first_name" required value="" placeholder="First Name"> <br>
			<input type="text" name="last_name" id="last_name" required value="" placeholder="Last Name"> <br>
			<input type="number" name="contact_no" id="contact_no" required value="" placeholder="Contact Number"> <br>
			<input type="email" name="email" id="email" required value="" placeholder="Email"> <br>
			<input type="password" name="password" id="password" required value="" placeholder="Password"> <br>
			<input type="password" name="confirmpassword" id="confirmpassword" required value="" placeholder="Confirm Password"> <br>
			<p>By signing up, you agree to our<a href="terms.php">Term of Use</a> and<a href="policy.php">Privacy Policy.</a></p>
			<button type="submit" name="submit">Sign Up</button>
			<p>Already have an account?<a href="login.php">Login</a></p>
		</form>
	</div>
    </section>
	<section class="foot">
	<p class="copyright"> <i>© MATES 2023 All Rights Reserved</i></p>
	</section>
</body>
</html>
