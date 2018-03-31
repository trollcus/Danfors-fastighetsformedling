<?php
/**
 * The template for displaying all kunskapsposts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Danfors_Fastighetsförmedling
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <section class="list-hero fadeIMG" data-src="<?php the_post_thumbnail_url( 'large' ); ?>">
      </section>
      <section class="kunskap-single-content">
        <div class="container">
          <ol class="breadcrumb text-center">
						<li><a href="<?php echo get_site_url(); ?>">Hem</a></li>
						<li><a href="<?php echo get_site_url(); ?>/kunskap">Kunskapsbanken</a></li>
						<li class="active"><?php the_title(); ?></li>
					</ol>
          <!-- <h1 class="text-center"><?php the_title() ?></h1> -->
          <div class="content-kunskap lazy-text">
            <?php the_content(); ?>




          </div>

        </div>


      </section>
      <?php endwhile; endif; ?>
      <?php
        $random = rand(0 ,1);
        if($random == 0){
          get_template_part( 'template-parts/CTA', 'section' );
        } else {
          get_template_part( 'template-parts/CTA', 'forsaljning' );
        }
      ?>





  </main><!-- #main -->
</div><!-- #primary -->


<?php

get_footer();
