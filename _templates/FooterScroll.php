<?php
$galleryItems = [
	[
		'img' => 'images/footer-gallery/alaska-gold.avif',
		'title' => 'Alaska Gold',
	],
	[
		'img' => 'images/footer-gallery/beige-onyx.avif',
		'title' => 'Beige Onyx',
	],
	[
		'img' => 'images/footer-gallery/cosmic-brown.avif',
		'title' => 'Cosmic Brown',
	],
	[
		'img' => 'images/footer-gallery/nirobi-brown.avif',
		'title' => 'Nirobi Brown',
	],
	[
		'img' => 'images/footer-gallery/cosmus.avif',
		'title' => 'Cosmus',
	],
]

?>
<section class="project-section-two style-two">
	<div class="outer-container">
		<div class="four-item-carousel owl-carousel owl-theme">

			<?php foreach ($galleryItems as $item): ?>
				<div class="project-block-two">
					<div class="inner-box">
						<div class="image">
							<img src="<?php echo $item['img']; ?>" alt="" />
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="overlay-content">
										<a class="plus" href="<?php echo $item['img']; ?>" data-fancybox="gallery-1" data-caption=""><span class="flaticon-full-screen"></span></a>
										<h3><?php echo $item['title']; ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>