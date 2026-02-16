<footer class="footer">
	<div class="wrapper-padding">
		<div class="wrapper">
			<div class="case-studies">
				<h2 class="case-studies__title text-xs">Case Studies</h2>
				<div class="case-studies__right">
					<p class="case-studies__text text-4xl">Great design isn't just about what you make. It's about who you make it
						with.</p>
					<a href="#" class="case-studies__link text-xs">
						<?php get_template_part("src/inc/icons/bullet-point") ?>Get started
					</a>
				</div>
			</div>
			<div class="links">
				<div class="links__left">
					<nav>
						<?php
							wp_nav_menu([
								"menu" => "Primary Menu",
								"container" => "false",
								"link_class" => "text-xs"
							]);
						?>
					</nav>
					<ul class="links__offsite">
						<?php 
							$offsiteLinks = [
								["label" => "X", "url" => "#"],
								["label" => "LinkedIn", "url" => "#"],
								["label" => "Instagram", "url" => "#"],
								["label" => "hello@megan.com", "url" => "#"],
							];

							foreach ($offsiteLinks as $offsiteLink) {
						?>
						<li class="links__item">
							<a href="<?= $offsiteLink["url"] ?>" class="links__link text-xs"><span class="js-roll-text"
									data-text="<?= $offsiteLink["label"]; ?>"><?= $offsiteLink["label"]; ?><span></a>
						</li>
						<?php } ?>
					</ul>
				</div>
				<div class="links__right">
					<p class="text-xs">LA, California</p>
					<div>
						<h3 class="text-xs">Office hours</h3>
						<p class="text-xs">Monday - Friday 11 AM - 2 PM</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="carousel">
		<div class="carousel__images">
			<?php
					$images = [
						["label" => "1", "url" => "44"],
						["label" => "2", "url" => "20"],
						["label" => "3", "url" => "45"],
						["label" => "4", "url" => "22"]
					];

					foreach ($images as $image) {
				?>
			<img src="<?= esc_url(wp_get_attachment_url($image["url"])); ?>" alt=""
				class="carousel__image carousel__image--<?= $image["label"] ?>" />
			<?php } ?>
		</div>
		<div aria-hidden class="carousel__images">
			<?php
					$images = [
						["label" => "1", "url" => "44"],
						["label" => "2", "url" => "20"],
						["label" => "3", "url" => "45"],
						["label" => "4", "url" => "22"]
					];

					foreach ($images as $image) {
				?>
			<img src="<?= esc_url(wp_get_attachment_url($image["url"])); ?>" alt=""
				class="carousel__image carousel__image--<?= $image["label"] ?>" />
			<?php } ?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>