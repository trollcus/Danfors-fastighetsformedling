<?php
/**
 * Template part for displaying kunskaps archive
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Danfors_Fastighetsförmedling
 */

?>
<a class="article-big-link" href="<?php the_permalink(); ?>">
<div class="article-big fadeInIMG" data-src="<?php the_post_thumbnail_url( 'large' ); ?>">

    <h1 class="article-big-title"><?php echo the_title(); ?></h1>

</div>
</a>
