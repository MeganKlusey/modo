<section class="hero">
	<img src="<?= esc_url(wp_get_attachment_url(23)); ?>" alt="" class="hero__image" />
	<div class="wrapper-padding">
		<div class="wrapper">
			<div class="hero__left">
				<ul class="hero__offsite-links">
					<?php 
						$offsiteLinks = [
							["label" => "X", "url" => "#"],
							["label" => "LinkedIn", "url" => "#"],
							["label" => "Instagram", "url" => "#"],
							["label" => "hello@megan.com", "url" => "#"],
						];

						foreach ($offsiteLinks as $offsiteLink) {
					?>
					<li class="hero__offsite-item">
						<a href="<?= $offsiteLink["url"] ?>" class="hero__offsite-link text-xs"><?= $offsiteLink["label"]; ?>
							<span class="js-roll-arrow"><?php get_template_part('src/inc/icons/arrow'); ?></span>
						</a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="hero__right">
				<h1 class="hero__title"><?= get_bloginfo("name") ?></h1>
				<div class="hero__description">
					<p class="text-sm">Step into a world of timeless stories, rare collections, and unforgettable experiences.</p>
					<p class="text-sm">(Since 2018)</p>
				</div>
			</div>
		</div>
	</div>
</section>