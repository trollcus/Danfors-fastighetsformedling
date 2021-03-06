<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Danfors_Fastighetsförmedling
 */

get_header(); ?>

	<section id="primary" class="content-area">

		<main id="main" class="site-main">
			<section class="col-sm-12 hero hero-tillsalu fadeIMG" data-src="/wp-content/uploads/bostad_arkiv_head.jpg">
	      <div class="container text-center hero-items">
	        <h1 class="hero-text"><?php printf( esc_html__( 'Till salu', 'danfors' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	      </div>


	      <svg viewbox="4 5 90 15" preserveAspectRatio="none">
	        <path fill="#FFF" d="M0 30 H100 V10 L52.5 19.5 Q50 20 47.5 19.5 L0 10z" />
	      </svg>
	    </section>
			<section class="search col-sm-10 col-sm-offset-1 search-page-listing-box">
	      <div class="col-xs-12 search-func">
	          <?php echo do_shortcode( '[searchandfilter id="203"]' ); ?>
	      </div>
		<?php
		if ( have_posts() ) : ?>



    </section>
    <div id="search-acf" class="container-fluid search-results-listing">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search-house' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</div>
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
		</main><!-- #main -->
    </div>
	</section><!-- #primary -->

<?php
get_footer();
