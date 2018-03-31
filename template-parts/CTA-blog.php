<section class="CTA-blog">
<div class="cta-blog-fluid">
		<!-- Randon blog posts -->
		<div class="cta-blog-random">
			<h1>Vad händer på västkusten?</h1>
			<p class="lead">Här kan ni läsa om vad som händer på västkusten</p>
			<a href="<?php echo get_site_url(); ?>/aktuellt/"><p>Se fler inlägg</p></a>
		</div>
		<?php $blog = new WP_Query( array( 'post_type' => 'post', 'orderby' => 'rand', 'posts_per_page' => '1'));
		$i = 1;
		?>
		<?php while( $blog->have_posts() ) : $blog->the_post(); ?>
			<?php $date_post = get_the_date(); ?>
		<a href="<?php the_permalink(); ?>">
			<div class="blog-card-var">
				<div class="col-xs-12 blog-card-img" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)"></div>
				<h4><?php echo the_title(); ?></h4>
				<div class="col-xs-12">
					<div class="author-blog">
						<?php

							$author = get_field('forfattare');
							if( $author ):

								// override $post
								$post = $author;
								setup_postdata( $post );

								?>
						<div class="author-img" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)"></div>
						<div class="author-blog-info">
							<div class="author-name">
								<?php the_title(); ?>
							</div>
							<?php $post = $blog;
							setup_postdata( $post ); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>

							<div class="author-date">
								<?php echo $date_post; ?>
							</div>
						</div>
					</div>
				</div>

				<!-- <h4><?php echo get_the_date(); ?></h4> -->
			</div>
		</a>
		<?php $i++;?>
		<?php endwhile; wp_reset_query(); ?>
		</div>
		</section>
