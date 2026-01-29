<section class="hero">
	<img src="<?php echo esc_url(wp_get_attachment_url(23)); ?>" alt="" class="hero__image" />
	<div class="wrapper">
		<div class="hero__main--left">
			<ul>
				<?php 
					$offsiteCTAs = array(
						["label" => "X", "url" => "#"],
						["label" => "LinkedIn", "url" => "#"],
						["label" => "Instagram", "url" => "#"],
						["label" => "hello@megan.com", "url" => "#"],
					);

					foreach ($offsiteCTAs as $offsiteCTA) {
				?>
				<li>
					<a href="<?= $offsiteCTA["url"] ?>" class="text-xs"><?= $offsiteCTA["label"]; ?></a>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div class="hero__main--right">
			<h1 class="hero__title"><span>Modo</span><span>Museum</span></h1>
			<div class="hero__description">
				<p class="text-sm">Step into a world of timeless stories, rare collections, and unforgettable experiences.
				</p>
				<p class="text-sm">(Since 2018)</p>
			</div>
		</div>
	</div>
</section>