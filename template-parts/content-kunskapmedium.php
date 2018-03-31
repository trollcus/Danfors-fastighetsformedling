<?php
/**
 * Template part for displaying kunskaps archive
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Danfors_Fastighetsförmedling
 */

?>

<a class="article-medium-link" href="<?php the_permalink(); ?>">
<div class="article-medium fadeIMG" data-src="<?php the_post_thumbnail_url( 'large' ); ?>">

    <h1 class="article-medium-title"><?php echo the_title(); ?></h1>

</div>
</a>
