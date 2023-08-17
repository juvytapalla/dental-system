<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
	$id = $_SESSION["id"];
	$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);
} else {
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="styles.css">
	<title>Dental Clinic</title>
</head>

<body>
	<?php include 'navbar.php'; ?>
	<h1>WELCOME TO DENTAL CLINIC <br><br> <?php echo $row["first_name"], $row["last_name"]; ?></h1>
	<a href="logout.php">
		<p style="color:black">Logout</p>
	</a>

</body>
<footer>
	<?php include 'footer.php'; ?>
</footer>

</html>
