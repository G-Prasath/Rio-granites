<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

		<!-- Main Header-->
		<?php include_once('./_templates/Navbar.php') ?>
		<!-- End Main Header -->

		<!-- Page Title -->
		<section class="page-title" style="background-image:url(images/contact-us-banner.jpg)">
			<div class="auto-container">
				<div class="content">
					<h2>Contact us</h2>
					<div class="text">Reach Out for More Information</div>
					<ul class="page-breadcrumb">
						<li><a href="/">Home</a></li>
						<li>Contact us</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- End Page Title -->

		<!-- Team Section -->
		<section class="contact-form-section">
			<div class="pattern-layer" style="background-image:url(images/background/pattern-19.png)"></div>
			<div class="auto-container">
				<!-- Title Box -->
				<div class="sec-title centered">
					<div class="inner-title">
						<div class="big-title">Title</div>
						<div class="title">contact Title</div>
						<h2>Let's talk about your project .</h2>
					</div>
					<div class="text">Reach out to us with any questions or feedback; we’re here to assist you and ensure your experience is nothing short of exceptional</div>
				</div>

				<!-- Contact Form -->
				<div class="contact-form">

					<!--Contact Form-->
					<form method="post" action="mail.php" id="contact-form">
						<div class="row clearfix">
							<div class="form-group col-lg-6 col-md-6 col-sm-12">
								<input type="text" name="name" placeholder="Name" required autocomplete="off">
							</div>

							<div class="form-group col-lg-6 col-md-6 col-sm-12">
								<input type="text" name="email" placeholder="Email" required autocomplete="off">
							</div>

							<div class="form-group col-lg-6 col-md-6 col-sm-12">
								<input type="text" name="stones" placeholder="Needed Stones" required autocomplete="off">
							</div>

							<div class="form-group col-lg-6 col-md-6 col-sm-12">
								<input type="text" name="phone" placeholder="Phone" required autocomplete="off">
							</div>

							<div class="form-group col-lg-12 col-md-12 col-sm-12">
								<textarea name="message" placeholder="Message"></textarea>
							</div>

							<div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
								<button class="theme-btn btn-style-one" type="submit" name="submit-form">send message</button>
							</div>
						</div>
					</form>
				</div>

			</div>
		</section>
		<!-- End Contact Form Section -->

		<!-- Contact Info Section -->
		<section class="contact-info-section">
			<div class="auto-container">
				<div class="row clearfix">

					<div class="column col-lg-6 col-md-12 col-sm-12">
						<!-- Sec Title -->
						<div class="sec-title style-three">
							<div class="inner-title">
								<h2>Showroom Address</h2>
							</div>
						</div>
						<ul class="list-style-two">
							<li>
								<span class="icon icon-pin"></span>
								<i>Address: </i>138, 100 Feet Rd, Senthil Nagar, Loganathan Nagar, Padmanabha Nagar, Choolaimedu, chennai 600094
							</li>
							<li><span class="icon icon-call-in"></span> <i>Phone: </i><a href="tel:04423610155">044 2361 0155</a></li>
							<!-- <li><span class="icon icon-envelope"></span> <i>Email: </i><a href="mailto:riogranites@gmail.com">riogranites@gmail.com</a></li> -->
						</ul>
					</div>

					<div class="column col-lg-6 col-md-12 col-sm-12">
						<!-- Sec Title -->
						<div class="sec-title style-three">
							<div class="inner-title">
								<h2>Granite Yard Address</h2>
							</div>
						</div>
						<ul class="list-style-two">
							<li><span class="icon icon-pin"></span> <i>Address: </i>267/2A, Alapakkam Main Rd, Chozhan Nagar, Maduravoyal, Chennai - 600095</li>
							<li><span class="icon icon-call-in"></span> <i>Phone: </i><a href="tel:04423610155">044 2361 0155</a></li>
							<!-- <li><span class="icon icon-envelope"></span> <i>Email: </i><a href="mailto:riogranites@gmail.com">riogranites@gmail.com</a></li> -->
						</ul>
					</div>

				</div>
			</div>
		</section>
		<!-- End Contact Info Section -->

		<!-- Contact Info Section -->
		<section class="contact-info-section">
			<div class="auto-container">
				<div class="row clearfix">

					<div class="column col-lg-6 col-md-12 col-sm-12">
						<!-- Sec Title -->
						<div class="sec-title style-three">
							<div class="inner-title">
								<h2>Yard Address</h2>
							</div>
						</div>
						<ul class="list-style-two">
							<li>
								<span class="icon icon-pin"></span>
								<i>Address: </i>271, 1A1, Alapakkam Main Rd, Janaki Nagar, Maduravoyal, Chennai
							</li>
							<li><span class="icon icon-call-in"></span> <i>Phone: </i><a href="tel:+917010147530">+91 70101 47530</a></li>
							<li><span class="icon icon-envelope"></span> <i>Email: </i><a href="mailto:riogranites@gmail.com">riogranites@gmail.com</a></li>
						</ul>
					</div>

					<div class="column col-lg-6 col-md-12 col-sm-12">
						<!-- Sec Title -->
						<div class="sec-title style-three">
							<div class="inner-title">
								<h2>Factory Address</h2>
							</div>
						</div>
						<ul class="list-style-two">
							<li><span class="icon icon-pin"></span> <i>Address: </i>20/1,amirthi road,sirukalambur,thutipet post,<br />vellore-58</li>
							<li><span class="icon icon-call-in"></span> <i>Phone: </i><a href="tel:+917395912679">+91 73959 12679</a></li>
							<li><span class="icon icon-envelope"></span> <i>Email: </i><a href="mailto:riogranites@gmail.com">riogranites@gmail.com</a></li>
						</ul>
					</div>

				</div>

				<!-- Social Box -->
				<div class="social-box">
					<a href="https://www.youtube.com/@riogranites"><span class="fa fa-youtube"></span></a>
					<!-- <a href="#"><span class="fa fa-pinterest-p"></span></a> -->
					<a href="https://www.facebook.com/riograniteofficial"><span class="fa fa-facebook-f"></span></a>
					<a href="https://www.instagram.com/rio_granite/"><span class="fa fa-instagram"></span></a>
				</div>

			</div>
		</section>
		<!-- End Contact Info Section -->

		<!-- Start Main Footer -->
		<?php include_once('./_templates/Footer.php') ?>
		<!-- End Main Footer -->


	</div>


	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/validate.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/paroller.js"></script>
	<script src="js/script.js"></script>


</body>

</html>