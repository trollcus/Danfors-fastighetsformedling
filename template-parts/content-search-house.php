<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Danfors_Fastighetsförmedling
 */

?>

<div id="post-<?php the_ID(); ?>" >


  <div class="col-sm-6 col-lg-4 list-item-house">
    <div class="listing">

      <a href="<? the_permalink(); ?>">
        <div class="list-text-wrap">
          <h4 class="home-list-title"><?php the_title(); ?></h4>
          <p class="home-list-desc"><?php $desc = get_field('beskrivande_text');
            echo $desc;
           ?></p>
        </div>
          <div class="list-image list-img" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)">
            <!-- <?php the_post_thumbnail( 'full' ); ?> -->
          </div>



         <div class="row text-center list-items">
           <h5><?php echo get_field('adress_omrade') ?></h5>
           <h5 class="list-omrade"><?php
                $price_list = get_field('utgangspris');
                $formatted_price = number_format($price_list, 0, ' ', ' ');
                echo $formatted_price; ?> :-</h5>
           <div class="col-xs-4">
             <h5 class="text-center"><span class="glyphicon glyphicon-home"></span>&nbsp; &nbsp;<?php $rum = get_field('antal_rum');
             echo $rum;
            ?> rum</h5></div>
           <div class="col-xs-4">
             <h5 class="text-center"><span class="glyphicon glyphicon-tree-deciduous"></span>&nbsp; &nbsp;<?php $tomtarea = get_field('tomtarea');
             echo $tomtarea;
            ?>m²</h5>
           </div>
           <div class="col-xs-4">
             <h5 class="text-center"><span class="glyphicon glyphicon-bed"></span>&nbsp; &nbsp;<?php $boarea = get_field('boarea');
             echo $boarea;
            ?>m²</h5>
           </div>
         </div>
      </a>

    </div>

  </div>
</div><!-- #post-<?php the_ID(); ?> -->
