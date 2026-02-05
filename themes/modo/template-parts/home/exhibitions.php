	<section class="exhibitions">
		<div class="wrapper-padding">
			<div class="wrapper">
				<div class="exhibitions__left">
					<h2 class="text-xs">Gallery exhibitions</h2>
					<div>
						<img src="" alt="" class="" />
					</div>
				</div>
				<div class="exhibitions__right">
					<ul>
						<?php
							$args = array(
								'post_type' => 'exhibition',
								'posts_per_page' => 4,
								'order' => "ASC"
							);
							$query = new WP_Query( $args );
							
							if ( $query->have_posts() ) :
							while ( $query->have_posts() ) : $query->the_post();?>
						<li class="text-5xl"><a href=""><?php the_title(); ?></a></li>
						<?php
							endwhile;
							wp_reset_postdata();
							endif;
						?>
					</ul>
					<a href="#" class="all-link text-xs">
						<? get_template_part("src/inc/icons/bullet-point") ?>Get tickets
					</a>
				</div>
			</div>
		</div>
	</section>