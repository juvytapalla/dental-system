<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="img/iconn.ico">
	<title>Dental Clinic</title>
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="helpstyle.css">
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
	<!--==================== NAVBAR ====================-->
	<?php include "navbar.php" ?>

	<!--==================== BANNER ====================-->
	<section class="banner">
		<div class="banner-text">
			<h1>We want to assist you at every step</h1>
		</div>
	</section>

	<!--==================== INSTRUCTIONS ====================-->
	<section class="instruction container">
		<h2 class="section__title">How It Works</h2>
		<p class="section__description">Step-by-step guide to effortlessly navigate our dental app and optimize your dental care experience.</p>
		<div class="help">
			<div class="help-image">
				<img src="img/help.png">
			</div>
			<div class="help-content">
				<h3>Step 1:</h3>
				<p>Visit/Open our web application and login your account</p>
				<h3>Step 2:</h3>
				<p>Select your appointment date and time from the available options</p>
				<h3>Step 3:</h3>
				<p>Receive a confirmation with timely reminders leading up to your appointment</p>
				<h3>Step 4:</h3>
				<p>Visit the clinic for exceptional dental care with minimal waiting time</p>
				<h3>Step 5:</h3>
				<p>Enjoy the convenience of accessing your dental history whenever needed</p>
				<h3>Step 6:</h3>
				<p>Rinse and repeat - Keep your dental care hassle-free!</p>
			</div>
		</div>
	</section>

	<!--==================== FAQs ====================-->
	<section class="accordion container">
		<h2 class="section__title">FAQs</h2>
		<p class="section__description">Quick answers to common queries about our services, appointments, and dental care experience.</p>
		<div class="acc">
			<input type="checkbox" id="section1">
			<label for="section1">Can I book appointments on any device?</label>
			<div class="acc-content">
				<p>Yes, our system is a progressive web app, accessible on any platform</p>
			</div>
		</div>
		<div class="acc">
			<input type="checkbox" id="section2">
			<label for="section2">How will I receive appointment reminders?</label>
			<div class="acc-content">
				<p>Our system will send timely notifications to keep you on track.</p>
			</div>
		</div>
		<div class="acc">
			<input type="checkbox" id="section3">
			<label for="section3">Can I access my dental records through the app?</label>
			<div class="acc-content">
				<p>Certainly! Your dental history will be available at your fingertips.</p>
			</div>
		</div>
		<div class="acc">
			<input type="checkbox" id="section4">
			<label for="section4">Is the system easy to use for older patients?</label>
			<div class="acc-content">
				<p>Absolutely! Our user-friendly interface caters to all age groups.</p>
			</div>
		</div>
		<div class="acc">
			<input type="checkbox" id="section5">
			<label for="section5">Will this system reduce waiting times at clinics?</label>
			<div class="acc-content">
				<p>Yes, streamlined appointments lead to minimized wait times.</p>
			</div>
		</div>
	</section>
		<!--==================== FOOTER ====================-->
	<footer>
		<?php include "footer.php" ?>
	</footer>
</body>

</html>