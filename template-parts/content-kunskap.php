<?php
/**
 * Template part for displaying kunskaps archive
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Danfors_Fastighetsförmedling
 */

?>

<div class="article">
  <a href="<? the_permalink(); ?>">
    <div class="article-img fadeIMG" data-src="<?php the_post_thumbnail_url( 'full' ); ?>">

  </div></a>
  <div class="article-text">
    <p class="kunskap-title"><?php echo the_title(); ?></p>
    <!-- <p class="kunskap-exc"></p> -->
    <?php echo the_excerpt() ?>
    <a href="<? the_permalink(); ?>"><button class="btn btn-primary article-btn">Läs mer</button></a>
    <div class="article-row">
      <div class="tags">
        <p><?php the_tags('', '', ''); ?></p>
      </div>
    </div>
  </div>
</div>
