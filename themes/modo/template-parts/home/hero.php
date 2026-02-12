<section class="hero">
	<img data-aos="zoom-out" data-aos-duration="1000" src="<?= esc_url(wp_get_attachment_url(23)); ?>" alt=""
		class="hero__image" />
	<div class="wrapper-padding">
		<div class="wrapper">
			<div class="hero__left">
				<ul class="hero__offsite-links">
					<?php 
						$offsiteLinks = [
							["label" => "X", "url" => "#", "delay" => "0"],
							["label" => "LinkedIn", "url" => "#", "delay" => "200"],
							["label" => "Instagram", "url" => "#", "delay" => "400"],
							["label" => "hello@megan.com", "url" => "#", "delay" => "600"],
						];

						foreach ($offsiteLinks as $offsiteLink) {
					?>
					<li>
						<a href="<?= $offsiteLink["url"] ?>" class="text-xs" data-aos="fade-left"
							data-aos-delay="<?= $offsiteLink["delay"]; ?>" data-aos-offset="0"><?= $offsiteLink["label"]; ?>
							<?php get_template_part('src/inc/icons/arrow'); ?>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="hero__right">
				<h1 class="hero__title">
					<span data-aos="fade-right" data-aos-delay="700" data-aos-offset="0" data-aos-duration="1000">Modo</span><span
						data-aos="fade-right" data-aos-delay="500" data-aos-offset="0" data-aos-duration="1000">Museum</span>
				</h1>
				<div class="hero__description" data-aos="fade-right" data-aos-delay="300" data-aos-offset="0">
					<p class="text-sm">Step into a world of timeless stories, rare collections, and unforgettable experiences.</p>
					<p class="text-sm">(Since 2018)</p>
				</div>
			</div>
		</div>
	</div>
</section>