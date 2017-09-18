<?php
/**
 * Template part for displaying blog archive
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Danfors_Fastighetsförmedling
 */

?>


<a href="<? the_permalink(); ?>">
  <div class="col-md-3 col-sm-5 col-xs-12 blog-card-var">
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
          <?php wp_reset_query(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>

          <div class="author-date">
            <?php echo get_the_date(); ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</a>
