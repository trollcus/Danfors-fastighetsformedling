<?php
/*
  Template Name: Till-salu
 */

 get_header(); ?>

 <section class="hero-danfors col-sm-12">
   <div class="container text-center hero-items">
     <h1 class="hero-text">Välkommen till Danfors<br>Fastighetsförmedling</h1>
     <a href="/bostad"><button class="btn btn-danfors-white text-center">Hus till salu</button></a>
   </div>


   <svg viewbox="4 5 90 15" preserveAspectRatio="none">
     <path fill="#FFF" d="M0 30 H100 V10 L52.5 19.5 Q50 20 47.5 19.5 L0 10z" />
   </svg>
 </section>

 <section class="search col-xs-12 col-lg-10 col-lg-offset-1">
   <div class="col-xs-12 search-func">
       <?php echo do_shortcode( '[searchandfilter id="249"]' ); ?>
   </div>

 </section>

 <section class="selected-listing">
   <div class="container">
     <div class="row">
       <div class="col-sm-12 list-section">
         <?php $loop = new WP_Query( array( 'post_type' => 'bostad', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
         <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
           <div class="col-sm-6 list-item-house">
             <div class="listing">

               <a href="<? the_permalink(); ?>">
                 <div class="list-text-wrap">
                   <h4 class="home-list-title"><?php the_title(); ?></h4>
                   <p class="home-list-desc"><?php $desc = get_field('beskrivande_text');
                     echo $desc;
                    ?></p>
                 </div>
                   <div class="list-image list-img" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)">
                     <!-- <?php the_post_thumbnail(); ?> -->
                   </div>



                  <div class="row text-center list-items">
                    <h5><?php echo get_field('adress_omrade') ?>, <?php echo get_field('adress_kommun') ?></h5>
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
         <?php endwhile; wp_reset_query(); ?>
       </div>


     </div>
   </div>
 </section>



 <?php
 get_footer();
