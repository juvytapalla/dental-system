<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="navstyle.css">
		<title>Dental Clinic</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
			
			$(function(){
				
				$(".toggle").on("click", function(){
					
					if($(".item").hasClass("active")){
						$(".item").removeClass("active");
					}
					else{
						$(".item").addClass("active");
					}			
				})
			});
					
		</script>
	
	</head>
<body>

	<nav>
		<ul class="menu">
			<li class="logo"><a href="#"><img src="logo.png"></a></li>
			<li class="item"><a href="#">Home</a></li>
			<li class="item"><a href="#">Services</a></li>	
			<li class="item"><a href="#">About Us</a></li>
			<li class="item button"><a href="login.php">Log In</a></li>
			<li class="item button secondary"><a href="#">Sign Up</a></li>
			<li class="toggle"><a href="#"><span class="bars"></span></a></li>
		<ul>
	</nav>
	
	<h1>WELCOME TO DENTAL CLINIC <br><br> <?php echo $row["first_name"], $row["last_name"]; ?></h1>
    <a href="logout.php"><p style="color:black">Logout</p></a>
	
</body>
</html>
