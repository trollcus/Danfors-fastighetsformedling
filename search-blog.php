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
			<section class="hero hero-blog col-sm-12 blog-head fadeIMG" data-src="<?php echo site_url(); ?>/wp-content/themes/danfors/assets/images/blog.jpg">
        <div class="container text-center hero-items">
          <h1 class="hero-text">Vad händer på västkusten?</h1>
					<p class="lead">Nedan kan ni följa vår resa under våra projekt för att göra västkusten till ett ännu bättre område att bo på</p>
        </div>
      </section>
		<?php
		if ( have_posts() ) : ?>
		<div class="container-fluid">
			<section class="villaguiden-section">
				<p>asd</p>
			</section>
			<!-- <section class="search col-xs-12 col-lg-3 search-blog-section">
				<div class="col-xs-12 search-func search-blog">
						<?php echo do_shortcode( '[searchandfilter id="251"]' ); ?>
				</div>
			</section> -->
			<section id="search-blog-results" class="blog-result col-xs-12 col-lg-12">
				<div class="cards">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'blog' );

					endwhile;
					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
			</section>
		</div>



		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
