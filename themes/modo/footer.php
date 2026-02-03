<footer>
	<div class="wrapper-padding">
		<div class="wrapper">
			<div class="case-studies">
				<h2 class="case-studies__title text-xs">Case Studies</h2>
				<div class="case-studies__right">
					<p class="case-studies__text text-4xl">Great design isn't just about what you make. It's about who you make it
						with.</p>
					<a href="#" class="case-studies__link text-xs">
						<? get_template_part("src/inc/icons/bullet-point") ?> Get started
					</a>
				</div>
			</div>
			<div class="links">
				<div class="links__left">
					<nav>
						<?php
									wp_nav_menu(array(
										"menu" => "Primary Menu",
										"container" => "false",
										"link_class" => "text-xs"
									));
								?>
					</nav>
					<ul class="links__offsite">
						<?php 
									$offsiteLinks = array(
										["label" => "X", "url" => "#"],
										["label" => "LinkedIn", "url" => "#"],
										["label" => "Instagram", "url" => "#"],
										["label" => "hello@megan.com", "url" => "#"],
									);

									foreach ($offsiteLinks as $offsiteLink) {
								?>
						<li>
							<a href="<?= $offsiteLink["url"] ?>" class="text-xs"><?= $offsiteLink["label"]; ?></a>
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
</footer>
<?php wp_footer(); ?>
</body>

</html>