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
    <section class="hero hero-kunskap col-sm-12 blog-head fadeIMG" data-src="<?php echo site_url(); ?>/wp-content/themes/danfors/assets/images/knowledge.jpg">
      <div class="container text-center hero-items">
        <h1 class="hero-text">Kunskapsbank</h1>
        <p class="lead">Här kan ni titta igenom våran stora kunskapsbank. Här kan ni läsa om hela processen kring att köpa ett hus eller varför man ska anlita en mäklare</p>
      </div>
    </section>
    <section class="search col-sm-10 col-sm-offset-1 col-xs-12 search-page-listing-box kunskap-search">
      <div class="col-xs-12 search-func search-kunskap-box">
          <?php echo do_shortcode( '[searchandfilter id="303"]' ); ?>
      </div>
    </section>
    <section class="kunskap-section art-search">
      <div class="kunskap-fluid">
        <div class="articles">

    <?php
		if ( have_posts() ) : ?>


    <?php
    $i = 1;
    /* Start the Loop */
    while ( have_posts() ) : the_post();
      if($i == 1 || $i == 4){
        get_template_part( 'template-parts/content', 'kunskapbig' );
        $i++;
      } else if($i == 2 || $i == 3) {
        if($i == 2){
          echo "<div class='article-medium-row'>";
        }
        get_template_part( 'template-parts/content', 'kunskapmedium' );
        if($i == 3){
          echo "</div>";
        }
        $i++;
      } else{
        get_template_part( 'template-parts/content', 'kunskap' );
        $i++;
      }



      endwhile;
      the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif; ?>
  </div>
</div>
</section>
  </main><!-- #main -->
</section><!-- #primary -->
</div>

<?php
get_footer();
