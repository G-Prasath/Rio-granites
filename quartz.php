<?php
$galleryItems = [
	[
		'image' => 'images/quartz/ancient-beige.avif',
		'content' => 'Ancient Beige'
	],
	[
		'image' => 'images/quartz/black-forest.avif',
		'content' => 'Black Forest'
	],
	[
		'image' => 'images/quartz/my-stique-alpine.avif',
		'content' => 'My Stique Alpine'
	],
	[
		'image' => 'images/quartz/black-portoro.avif',
		'content' => 'Black Portoro'
	],
	[
		'image' => 'images/quartz/sahara-storm.avif',
		'content' => 'Sahara Storm'
	],
	[
		'image' => 'images/quartz/golden-eye.avif',
		'content' => 'Golden Eye'
	],
	[
		'image' => 'images/quartz/titon-brown.avif',
		'content' => 'Titon Brown'
	],
	[
		'image' => 'images/quartz/thander-black.avif',
		'content' => 'Thander Black'
	],

]
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Quartz</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

		<!-- Main Header-->
		<?php include_once('./_templates/Navbar.php') ?>
		<!-- End Main Header -->

		<!-- Page Title -->
		<section class="page-title" style="background-image:url(images/quartz/banner.avif)">
			<div class="auto-container">
				<div class="content">
					<h2>Quartz</h2>
					<div class="text">Unveiling the Versatility of Quartz Stone</div>
					<ul class="page-breadcrumb">
						<li><a href="#">Home</a></li>
						<li>Quartz</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- End Page Title -->

		<!-- About Section  -->
		<section class="about-section-three">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Image Column -->
					<div class="image-column col-lg-4 col-md-12 col-sm-12">
						<div
							class="inner-column wow fadeInLeft"
							data-wow-delay="0ms"
							data-wow-duration="1500ms">
							<div class="image">
								<img src="images/quartz/profile.avif" alt="" />
							</div>
						</div>
					</div>
					<!-- Content Column -->
					<div class="content-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="inner-title">
									<div class="title">Quartz service</div>
									<h2>
										Discover the Beauty of Quartz Stone.
									</h2>
								</div>
							</div>
							<div class="text">
							Quartz stone is an engineered material that combines natural quartz crystals with resin, creating durable and beautiful surfaces. Its non-porous nature ensures hygiene, while a wide range of colors and patterns offers versatile design options. Whether for modern elegance or classic appeal, quartz stone enhances any interior with sophistication.
							</div>
							<ul class="list-style-one">
								<li>Exceptional Durability and Resilience</li>
								<li>A Diverse Range of Colors and Patterns</li>
								<li>Easy Maintenance for Busy Lifestyles</li>
								<li>Non-Porous Surface for Hygiene and Safety</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Section  -->

		<!-- Services Section -->
		<section class="services-section">
			<div
				class="pattern-layer"
				style="background-image: url(images/background/pattern-9.png)"></div>
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Services Block Three -->
					<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
						<div
							class="inner-box wow fadeInLeft"
							data-wow-delay="0ms"
							data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-sketch"></span>
							</div>
							<h3>
								<a href="service-architecture.html">Benefits of Quartz</a>
							</h3>
							<div class="service-number">01</div>
							<div class="text">
							Quartz offers exceptional durability, a non-porous surface that resists stains and bacteria, and a vast array of colors and patterns, ensuring both beauty and functionality.
							</div>
						</div>
					</div>

					<!-- Services Block Three -->
					<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
						<div
							class="inner-box wow fadeInLeft"
							data-wow-delay="300ms"
							data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-blueprint"></span>
							</div>
							<h3>
								<a href="service-architecture.html">Design Inspiration</a>
							</h3>
							<div class="service-number">02</div>
							<div class="text">
							Explore stunning design possibilities with quartz, perfect for kitchens and bathrooms. Its diverse colors and patterns create unique aesthetics, enhancing any interior style.
							</div>
						</div>
					</div>

					<!-- Services Block Three -->
					<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
						<div
							class="inner-box wow fadeInLeft"
							data-wow-delay="600ms"
							data-wow-duration="1500ms">
							<div class="icon-box">
								<span class="icon flaticon-metering"></span>
							</div>
							<h3>
								<a href="service-architecture.html">Customization Options</a>
							</h3>
							<div class="service-number">03</div>
							<div class="text">
							Quartz offers extensive customization options, allowing you to choose colors, finishes, and sizes tailored to your space, ensuring a perfect fit for your design vision.
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Services Section -->

		<!-- Products varients Section -->
		<section class="shop-products-section">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title style-two centered">
					<div class="inner-title">
						<div class="title">Gallery</div>
						<h2>Quartz Showcase</h2>
						<div class="text">
						Explore our exquisite quartz collection, featuring exceptional craftsmanship and vibrant designs that elevate your spaces with timeless elegance.
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<?php foreach ($galleryItems as $item): ?>
						<!-- Product Block Four -->
						<div class="product-block-four col-lg-3 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="image">
									<a href="javascript:;"><img src="<?php echo $item['image']; ?>" alt="" /></a>
									<div class="prod-options">
										<div class="view-prod">
											<a
												href="<?php echo $item['image']; ?>"
												class="lightbox-image"
												data-fancybox="shop-gallery"><span class="fa fa-expand"></span></a>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<h3 style="color:#000000;"><?php echo $item['content']; ?></h3>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<!-- End Products varients Section -->

		<!-- Services Section Six -->
		<section class="services-section-six">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<div class="inner-title">
									<div class="title">Use Case</div>
									<h2>The Usability of Quartz.</h2>
								</div>
							</div>
							<div class="text">
								<p>
								Quartz stands out for its versatility, seamlessly integrating into various spaces. Its striking aesthetics enhance kitchens, bathrooms, and commercial areas, making it a favored choice among designers.
								</p>
								<p>
								Moreover, quartz’s durability against stains and scratches ensures it remains beautiful over time, combining form with function. Whether used for countertops or backsplashes, quartz adds elegance and sophistication to any design with its wide array of colors and patterns.
								</p>
							</div>
						</div>
					</div>

					<!-- Accordian Column -->
					<div class="accordian-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!--Accordian Box-->
							<ul class="accordion-box">
								<!--Block-->
								<li class="accordion block active-block">
									<div class="acc-btn active">
										<div class="icon-outer">
											<span
												class="icon icon-pluss flaticon-plus-symbol"></span>
											<span
												class="icon icon-minuss flaticon-substract"></span>
										</div>
										Does quartz stain easily?
									</div>
									<div class="acc-content current">
										<div class="content">
											<div class="text">
											QNo, quartz is non-porous and resists staining.
											</div>
										</div>
									</div>
								</li>

								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer">
											<span
												class="icon icon-pluss flaticon-plus-symbol"></span>
											<span
												class="icon icon-minuss flaticon-substract"></span>
										</div>
										Is quartz resistant to staining?
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">
											Yes, quartz is non-porous, which means it resists staining and is easy to clean, making it an ideal choice for kitchens and bathrooms.
											</div>
										</div>
									</div>
								</li>

								<!--Block-->
								<li class="accordion block">
									<div class="acc-btn">
										<div class="icon-outer">
											<span
												class="icon icon-pluss flaticon-plus-symbol"></span>
											<span
												class="icon icon-minuss flaticon-substract"></span>
										</div>
										Is quartz durable?
									</div>
									<div class="acc-content">
										<div class="content">
											<div class="text">
											Yes, quartz is highly durable and resistant to scratches.
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Services Section Six -->

		<!-- CTA -->
		<?php include_once('./_templates/Cta.php') ?>
		<!-- End CTA -->

		<!-- FOOTER SCROLL -->
		<?php include_once('./_templates/FooterScroll.php') ?>
		<!-- End FOOTER SCROLL -->

		<!-- Start Main Footer -->
		<?php include_once('./_templates/Footer.php') ?>
		<!-- End Main Footer -->

	</div>
	<!--End pagewrapper-->


	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/paroller.js"></script>
	<script src="js/script.js"></script>

</body>

</html>