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
			<section class="hero-danfors col-sm-12">
	      <div class="container text-center hero-items">
	        <h1 class="hero-text"><?php printf( esc_html__( 'Sökresultat för: %s', 'danfors' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	      </div>


	      <svg viewbox="4 5 90 15" preserveAspectRatio="none">
	        <path fill="#FFF" d="M0 30 H100 V10 L52.5 19.5 Q50 20 47.5 19.5 L0 10z" />
	      </svg>
	    </section>
			<section class="search col-sm-8 col-sm-offset-2 search-page-listing-box">
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

		</main><!-- #main -->
    </div>
	</section><!-- #primary -->

<?php
get_footer();
