<?php
/**
 * Template part for displaying kunskaps archive
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Danfors_Fastighetsförmedling
 */

?>
<div class="col-sm-12 col-lg-5 article">

    <div class="col-sm-5 article-img test" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)">

  </div>
  <div class="col-sm-7 article-text">
    <p class="kunskap-title"><?php echo the_title(); ?></p>
    <p class="kunskap-exc"><?php echo the_excerpt() ?></p>
    <a href="<? the_permalink(); ?>"><button class="btn btn-primary article-btn">Läs mer</button></a>
    <div class="row article-row">
      <div class="col-sm-12 tags">
        <p> <?php
          $posttags = get_the_tags();
          if ($posttags) {
            foreach($posttags as $tag) {
              echo $tag->name ;
            }
          }
          ?></p>
      </div>
    </div>
  </div>
</div>
