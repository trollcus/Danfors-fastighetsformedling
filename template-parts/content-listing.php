<?php
/**
 * Template part for displaying houses etc
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Danfors_Fastighetsförmedling
 */

?>
<header class="entry-header">
  <?php
  if ( is_singular() ) :
    the_title( '<h1 class="entry-title">', '</h1>' );
  else :
    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
  endif;

  if ( 'post' === get_post_type() ) : ?>
  <div class="entry-meta">
    <?php danfors_posted_on(); ?>
  </div><!-- .entry-meta -->
  <?php
  endif; ?>
</header><!-- .entry-header -->
