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
  <a href="<?php the_permalink(); ?>">
    <div class="article-img fadeInIMG" data-src="<?php the_post_thumbnail_url( 'large' ); ?>">

  </div></a>
  <div class="article-text">
    <p class="kunskap-title"><?php echo the_title(); ?></p>
    <!-- <p class="kunskap-exc"></p> -->
    <?php echo the_excerpt() ?>
    <a href="<? the_permalink(); ?>"><button class="btn btn-primary article-btn">Läs mer</button></a>
    <div class="article-row">
      <div class="tags">
        <p><?php $posttags = get_the_tags();
            if ($posttags) {
            foreach($posttags as $tag) {
              echo $tag->name . ' ';
            }
          }
        ?></p>
      </div>
    </div>
  </div>
</div>
