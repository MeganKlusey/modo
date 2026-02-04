<section class="about">
	<div class="wrapper">
		<div class="about__text">
			<h2 class="text-xs">About</h2>
			<p class="text-2xl">Founded to preserve and celebrate art, history, and culture, our museum brings together
				treasures from across centuries and continents. Whether you're passionate about ancient civilizations,
				fascinated
				by modern art, or looking for an inspiring day out, our galleries and experiences offer something for everyone.
			</p>
		</div>
		<?php
			$images = [
				["label" => "", "url" => "5"],
				["label" => "", "url" => "6"],
				["label" => "", "url" => "7"],
				["label" => "", "url" => "8"],
				["label" => "", "url" => "9"],
				["label" => "", "url" => "10"],
			];

			foreach($images as $image) {
		?>
		<img src="<?= esc_url(wp_get_attachment_url($image["url"])); ?>" alt="" class="" />
		<?php } ?>
	</div>
</section>