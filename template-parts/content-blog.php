<?php
/**
 * Template part for displaying blog archive
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Danfors_Fastighetsförmedling
 */

?>
<a class="text-center" href="<? the_permalink(); ?>">
  <div class="col-md-3 col-sm-5 blog-card">
    <h4><?php echo the_title(); ?></h4>
    <hr>
    <h4><?php echo get_the_date(); ?></h4>
  </div>
</a>
