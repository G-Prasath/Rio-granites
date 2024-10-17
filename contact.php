<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Title - HTML Template | Contact </title>
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
		<section class="page-title" style="background-image:url(images/background/20.jpg)">
			<div class="auto-container">
				<div class="content">
					<h2>Contact us</h2>
					<div class="text">Interior & Architecture Designing</div>
					<ul class="page-breadcrumb">
						<li><a href="#">Home</a></li>
						<li>get in touch</li>
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
						<h2>Let’s talk about your project .</h2>
					</div>
					<div class="text">Beyond more stoic this along goodness hey this this wow manatee mongoose one far flustered impressive manifest far crud opened inside owing punitively around for after wasteful telling.</div>
				</div>

				<!-- Contact Form -->
				<div class="contact-form">

					<!--Contact Form-->
					<form method="post" action="sendemail.php" id="contact-form">
						<div class="row clearfix">
							<div class="form-group col-lg-6 col-md-6 col-sm-12">
								<input type="text" name="username" placeholder="Name" required>
							</div>

							<div class="form-group col-lg-6 col-md-6 col-sm-12">
								<input type="text" name="email" placeholder="Email" required>
							</div>

							<div class="form-group col-lg-6 col-md-6 col-sm-12">
								<input type="text" name="service" placeholder="Serivce you interested in" required>
							</div>

							<div class="form-group col-lg-6 col-md-6 col-sm-12">
								<input type="text" name="phone" placeholder="Phone" required>
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
								<h2>Newyork Office</h2>
								<div class="text">Convenire gubergren vix. Habeo facete pri putent malu intellegam vixt vim prompta facia.</div>
							</div>
						</div>
						<ul class="list-style-two">
							<li><span class="icon icon-pin"></span> <i>Address: </i>63 Nelson Base, Florida 26025 USA</li>
							<li><span class="icon icon-call-in"></span> <i>Phone: </i><a href="tel:2345018607">(234) 501 8607</a> - <a href="tel:2345018607">(234) 620 7129</a></li>
							<li><span class="icon icon-envelope"></span> <i>Email: </i><a href="mailto:inquiry@Title.net">inquiry@Title.net</a></li>
						</ul>
					</div>

					<div class="column col-lg-6 col-md-12 col-sm-12">
						<!-- Sec Title -->
						<div class="sec-title style-three">
							<div class="inner-title">
								<h2>London Office</h2>
								<div class="text">Convenire gubergren vix. Habeo facete pri putent malu intellegam vixt vim prompta facia.</div>
							</div>
						</div>
						<ul class="list-style-two">
							<li><span class="icon icon-pin"></span> <i>Address: </i>63 Nelson Base, Florida 26025 USA</li>
							<li><span class="icon icon-call-in"></span> <i>Phone: </i><a href="tel:2345018607">(234) 501 8607</a> - <a href="tel:2345018607">(234) 620 7129</a></li>
							<li><span class="icon icon-envelope"></span> <i>Email: </i><a href="mailto:inquiry@Title.net">inquiry@Title.net</a></li>
						</ul>
					</div>

				</div>

				<!-- Social Box -->
				<div class="social-box">
					<a href="#"><span class="fa fa-twitter"></span></a>
					<a href="#"><span class="fa fa-pinterest-p"></span></a>
					<a href="#"><span class="fa fa-facebook-f"></span></a>
					<a href="#"><span class="fa fa-instagram"></span></a>
					<a href="#"><span class="fa fa-linkedin"></span></a>
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