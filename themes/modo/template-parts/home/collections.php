<section class="collections">
	<div class="wrapper-padding">
		<div class="wrapper">
			<div class="collections__overview">
				<h2 class="collections__title text-xs">Collections</h2>
				<div class="collections__right">
					<p class="collections__text text-2xl">From ancient artifacts to contemporary masterpieces, our collections
						span centuries of human creativity and innovation. Each gallery invites you to explore history, culture, and
						art through objects that have shaped the world.</p>
				</div>
			</div>
			<div class="collections__images">
				<?php 
					$args = [
						"post_type" => "collection",
						"posts_per_page" => 4,
						"order" => "ASC"
					];
					$query = new WP_Query($args);

					if ( $query->have_posts() ) :
					while ( $query->have_posts() ) : $query->the_post(); ?>
				<div>
					<img src="" alt="" class="" />
				</div>
				<?php 
					endwhile;
					wp_reset_postdata();
				endif; ?>
			</div>
		</div>
	</div>
</section>