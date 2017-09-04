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
    <section class="hero-danfors col-sm-12 blog-head">
      <div class="container text-center hero-items">
        <h1 class="hero-text">Kunskapsbank</h1>
        <p class="lead">Här kan ni titta igenom våran stora kunskapsbank. Här kan ni läsa om hela processen kring att köpa ett hus eller varför man ska anlita en mäklare</p>
      </div>
    </section>
    <section class="search col-sm-10 col-xs-12 col-sm-offset-1 search-page-listing-box kunskap-search">
      <div class="col-xs-12 search-func search-kunskap-box">
          <?php echo do_shortcode( '[searchandfilter id="303"]' ); ?>
      </div>
    <?php
		if ( have_posts() ) : ?>

    <div class="articles">
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="row art-row">


    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'kunskap' );

      endwhile;
      the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif; ?>
          </div>
        </div>
      </div>
    </div>
  </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
