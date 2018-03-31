<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Danfors_Fastighetsförmedling
 */

get_header(); ?>


<section class="hero-danfors col-sm-12">
	<div class="container text-center hero-items">
		<h1 class="hero-text">Det verkar som att du har kommit fel.</h1>
		<p class="lead">Varför inte söka på fastigheter istället?</p>
	</div>



	<svg viewbox="4 5 90 15" preserveAspectRatio="none">
		<path fill="#FFF" d="M0 30 H100 V10 L52.5 19.5 Q50 20 47.5 19.5 L0 10z" />
	</svg>
</section>

<section class="search col-xs-12 col-lg-10 col-lg-offset-1">
  <div class="col-xs-12 search-func">
      <?php echo do_shortcode( '[searchandfilter id="203"]' ); ?>
<!--
      <div class="form-group col-sm-2 search-listing-box">
        <label for="adress">Adress</label>
        <input type="text" class="form-control danfors-search" id="adress" placeholder="Adress">
      </div>
      <div class="form-group col-sm-2 search-listing-box">
        <label for="postnummer">Postnummer</label>
        <input type="text" class="form-control danfors-search" id="postnummer" placeholder="Postnummer">
      </div>
      <div class="form-group col-sm-2 search-listing-box">
        <label for="pris_min">Pris från</label>
        <input type="text" class="form-control danfors-search" id="pris_min" placeholder="Pris min">
      </div>
      <div class="form-group col-sm-2 search-listing-box">
        <label for="pris_max">Pris till</label>
        <input type="text" class="form-control danfors-search" id="pris_max" placeholder="Pris max">
      </div>
      <div class="col-sm-2 search-listing-button">
        <button type="submit" class="btn btn-primary">Sök</button> -->

    <!-- </div> -->
  </div>

</section>

<section class="selected-listing">
  <div class="container">
    <h1 class="col-sm-12 text-center">Eller inspektera några utav våra utvalda objekt?</h1>
    <div class="row">
      <div class="col-sm-12 list-section responsive">
        <?php $loop = new WP_Query( array( 'post_type' => 'bostad', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '8', 'featured' => 'no')); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-sm-6 list-item-house">
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

                  <!-- <div class="list-image list-img fadeIMG" data-src="<?php echo 'data:image/jpeg;base64,', $first_row_image ?>"> -->
                  <div class="list-image list-img fadeIMG" data-src="<?php the_post_thumbnail_url( 'large' ); ?>">
                    <!-- <?php the_post_thumbnail(); ?> -->
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
        <?php endwhile; wp_reset_query(); ?>
      </div>


    </div>
  </div>
</section>

<section class="kunskap-section">
  <div class="container-fluid kunskap-fluid">
    <h1 class="col-sm-12 text-center kunskapsbank-title">Kunskapsbanken</h1>
    <p class="lead text-center">Vi har en massa artiklar för att hjälpa guida dig igenom ditt husköp</p>

    <div class="articles">
            <!-- Inlägg små -->
            <?php $member = new WP_Query( array( 'post_type' => 'kunskap', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '4')); ?>
            <?php while( $member->have_posts() ) : $member->the_post(); ?>
              <div class="article">
                <a href="<?php the_permalink(); ?>">
                  <div class="article-img fadeIMG" data-src="<?php the_post_thumbnail_url( 'large' ); ?>">

                </div></a>
                <div class="article-text">
                  <p class="kunskap-title"><?php echo the_title(); ?></p>
                  <!-- <p class="kunskap-exc"></p> -->
                  <?php echo the_excerpt() ?>
                  <a href="<?php the_permalink(); ?>"><button class="btn btn-primary article-btn">Läs mer</button></a>
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
            <?php endwhile; wp_reset_query(); ?>



    </div>
    <div class="text-center col-xs-12 articles-btn">
      <a href="<?php echo get_site_url(); ?>/kunskapsbanken"><button class="btn btn-lg btn-primary">Visa fler</button></a>
    </div>


  </div>
</section>

<section class="danfors-blog text-center">
  <div class="container-fluid kunskap-fluid">
    <h1>Aktuellt hos Danfors Fastighetsförmedling</h1>
    <p class="lead">Vi har massa bra blogginlägg med bland annat våra annonser för dig att läsa igenom</p>
    <div class="cards">



      <?php $blog = new WP_Query( array( 'post_type' => 'post', 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => '6'));
      $i = 1;
      ?>
      <?php while( $blog->have_posts() ) : $blog->the_post(); ?>
        <?php $date_post = get_the_date(); ?>
      <a href="<?php the_permalink(); ?>">
        <div class="blog-card-var">
          <div class="blog-card-img fadeIMG" data-src="<?php the_post_thumbnail_url( 'medium' ); ?>"></div>
          <h4><?php echo the_title(); ?></h4>
          <div class="col-xs-12 author-section">
            <div class="author-blog">
              <?php

                $author = get_field('forfattare');
                if( $author ):

                  // override $post
                  $post = $author;
                  setup_postdata( $post );

                  ?>
              <div class="author-img fadeIMG" data-src="<?php the_post_thumbnail_url( 'full' ); ?>"></div>
              <div class="author-blog-info">
                <div class="author-name">
                  <?php the_title(); ?>
                </div>
                <?php $post = $blog;
                setup_postdata( $post ); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>

                <div class="author-date">
                  <?php echo $date_post; ?>
                </div>
              </div>
            </div>
          </div>

          <!-- <h4><?php echo get_the_date(); ?></h4> -->
        </div>
      </a>
      <?php $i++;?>
      <?php endwhile; wp_reset_query(); ?>

    </div>


  </div>
  <a href="<?php echo get_site_url(); ?>/aktuellt"><button class="btn btn-lg btn-primary btn-show">Visa fler</button></a>
</section>



<?php
get_footer();
