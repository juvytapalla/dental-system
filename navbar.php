<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="navstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(function() {

			$(".toggle").on("click", function() {

				if ($(".item").hasClass("active")) {
					$(".item").removeClass("active");
				} else {
					$(".item").addClass("active");
				}
			})
		});
	</script>
</head>
<header>
	<nav>
		<ul class="menu">
			<li class="logo"><a href="index.php"><img src="img/logo2.png"></a></li>
			<li class="item"><a href="#">Home</a></li>
			<li class="item"><a href="#">Services</a></li>
			<li class="item"><a href="#">About Us</a></li>
			<li class="item button"><a href="login.php">Log In</a></li>
			<li class="item button secondary"><a href="sign_up.php">Sign Up</a></li>
			<li class="toggle"><a href="#"><span class="bars"></span></a></li>
			<ul>
	</nav>
</header>

<body>
</body>

</html>
