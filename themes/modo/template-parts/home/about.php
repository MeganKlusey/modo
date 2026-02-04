<section class="about">
	<div class="wrapper-padding">
		<div class="wrapper">
			<div class="spacer"></div>
			<div class="about__text">
				<h2 class="text-xs">About</h2>
				<p class="text-2xl">Founded to preserve and celebrate art, history, and culture, our museum brings together
					treasures from across centuries and continents. Whether you're passionate about ancient civilizations,
					fascinated
					by modern art, or looking for an inspiring day out, our galleries and experiences offer something for
					everyone.
				</p>
			</div>
			<div class="about__images">
				<?php
					$images = [
						["label" => "1", "url" => "5"],
						["label" => "2", "url" => "6"],
						["label" => "3", "url" => "7"],
						["label" => "4", "url" => "8"],
						["label" => "5", "url" => "9"],
						["label" => "6", "url" => "10"],
					];

					$index = 0;

					foreach($images as $image) {

					if ($index === 0) {
						echo '<div class="row">';
					}
				?>
				<img src="<?= esc_url(wp_get_attachment_url($image["url"])); ?>" alt=""
					class="image image-<?= $image["label"]; ?>" />
				<?php 
					if ($index === 1) {
						echo '</div>';
					}

					$index++;
				} ?>
			</div>
		</div>
	</div>
</section>