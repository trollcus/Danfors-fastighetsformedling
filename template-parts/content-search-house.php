<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Danfors_Fastighetsförmedling
 */

?>

<div class="listing-container" id="post-<?php the_ID(); ?>" >


  <div class="col-sm-6 col-lg-4 list-item-house">
    <div class="listing">

      <a href="<?php the_permalink(); ?>">
        <div class="list-text-wrap">
          <h4 class="home-list-title"><?php the_title(); ?></h4>
          <p class="home-list-desc"><?php $desc = get_field('beskrivande_text');
            echo $desc;
           ?></p>
        </div>
        <?php

          $rows = get_field('objekt_id' ); // get all the rows
          $first_row = $rows[0];
          $first_row_image = $first_row['bild_id' ]; // get the first row
          ?>
          <!-- <div class="list-image list-img" style="background-image: url(<?php echo 'data:image/jpeg;base64,', $first_row_image ?>)"> -->
          <div class="list-image list-img" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>)">
          </div>



          <div class="row text-center list-items">
            <h5><?php
            $omrade_house = get_field('adress_omrade');
            if(!empty($omrade_house)) {
              echo get_field('adress_omrade');
              echo ', ';

            }
            echo get_field('adress_kommun');
            ?>
            </h5>
            <?php
                 $price_list = get_field('utgangspris');
                 $formatted_price = number_format($price_list, 0, ' ', ' '); ?>
            <h5 class="list-omrade">
             <?php if(!empty($formatted_price) || $formatted_price > "0"): ?>

                 <?php echo $formatted_price; ?> :-<?php endif; ?></h5>
            <div class="col-xs-4">
              <h5 class="text-center list-text"><span class="glyphicon glyphicon-home"></span>&nbsp; &nbsp;
                <?php $rum = get_field('antal_rum');
                if(!empty($rum) || $rum > '0'): ?>
             <?php echo $rum; ?>
             rum<?php endif; ?></h5></div>
            <div class="col-xs-4">
              <h5 class="text-center list-text"><span class="glyphicon glyphicon-tree-deciduous"></span>&nbsp; &nbsp;
                <?php $tomtarea = get_field('tomtarea');
                if(!empty($tomtarea) || $tomtarea > '0'): ?>
             <?php echo $tomtarea; ?>
             m²<?php endif; ?></h5>
            </div>
            <div class="col-xs-4">
              <h5 class="text-center list-text"><span class="glyphicon glyphicon-bed"></span>&nbsp; &nbsp;
                <?php $boarea = get_field('boarea');
                if(!empty($boarea) || $boarea > '0'): ?>
             <?php echo $boarea; ?>
             m²<?php endif; ?></h5>
            </div>
          </div>
      </a>

    </div>

  </div>
</div><!-- #post-<?php the_ID(); ?> -->
