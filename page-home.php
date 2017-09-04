<?php
/*
  Template Name: Home page
 */

get_header(); ?>

<section class="hero-danfors col-sm-12">
  <div class="container text-center hero-items">
    <h1 class="hero-text">Välkommen till Danfors<br>Fastighetsförmedling</h1>
    <a href="<?php echo get_site_url(); ?>/till-salu"><button class="btn btn-danfors-white text-center">Hus till salu</button></a>
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
    <h1 class="col-sm-12 text-center">Utvalda hus</h1>
    <div class="row">
      <div class="col-sm-12 list-section responsive">
        <?php $loop = new WP_Query( array( 'post_type' => 'bostad', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '8', 'featured' => 'yes')); ?>
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

<section class="meet-danfors">
  <div class="container">
    <div class="row">

      <div class="col-sm-6 team-text">
        <h2>Möt människorna som jobbar för dig</h2>
        <p>Have you been prospecting for months on end, only to end up with no one? Or have you been trying to sell a product or service that has not been selling? Or you just kind of depressed about your current employment? There are many reasons to get down and start to get depressed about your situation. When you are down, do you know how to get back up and heading in the right direction?</p>
        <button class="btn btn-primary">Läs mer</button>
      </div>
      <div class="col-sm-4 col-sm-offset-1">
        <?php $member = new WP_Query( array( 'post_type' => 'maklare', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
        <?php while( $member->have_posts() ) : $member->the_post(); ?>

          <div class="col-xs-6 text-center team-member-danfors">
            <?php the_post_thumbnail(); ?>
            <h5><?php the_title(); ?></h5>
          </div>

        <?php endwhile; wp_reset_query(); ?>

      </div>
    </div>
  </div>
</section>

<section class="kunskap-section">
  <div class="container">
    <h1 class="col-sm-12 text-center kunskapsbank-title">Kunskapsbanken</h1>
    <p class="lead text-center">Vår stora kunskapsbank hjälper dig igenom processen av att köpa ett hus. Läs igenom våra artiklar ifall det är något du är osäker på eller bara är nyfiken att läsa på om</p>

    <div class="articles">
      <div class="row">
        <div class="col-sm-12">
          <div class="row art-row">
            <!-- Inlägg små -->
            <?php $member = new WP_Query( array( 'post_type' => 'kunskap', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '4')); ?>
            <?php while( $member->have_posts() ) : $member->the_post(); ?>
              <div class="col-sm-12 col-lg-5 article">
                <a href="<? the_permalink(); ?>">
                  <div class="col-sm-5 article-img">
                  <?php the_post_thumbnail(); ?>
                </div></a>
                <div class="col-sm-7 article-text">
                  <p class="kunskap-title"><?php echo the_title(); ?></p>
                  <p class="kunskap-exc"><?php echo the_excerpt() ?></p>
                  <a href="<? the_permalink(); ?>"><button class="btn btn-primary article-btn">Läs mer</button></a>
                  <div class="row article-row">
                    <div class="col-sm-12 tags">
                      <p><?php the_tags('', '', ''); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_query(); ?>
            <!-- <div class="col-sm-12">
              <div class="col-sm-6">

              </div>
              <div class="col-sm-6">
                <h1 class="small">TITEL</h1>
                <p>EXCERPT</p>
                <button class="btn btn-primary">Läs mer</button>
                <div class="row">
                  <div class="col-sm-4 col-sm-offset-8">
                    <p>Kategori</p>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-sm-12">
              <div class="col-sm-6">

              </div>
              <div class="col-sm-6">
                <h4>Titel</h4>
                <p>EXCERPT</p>
                <button class="btn btn-primary">Läs mer</button>
                <div class="row">
                  <div class="col-sm-4 col-sm-offset-8">
                    <p>Kategori</p>
                  </div>
                </div>
              </div>

            </div> -->
          </div>
        </div>
        <div class="col-sm-6">

        </div>
      </div>
    </div>
    <div class="text-center col-xs-12 articles-btn">
      <a href="<?php echo get_site_url(); ?>/kunskapsbanken"><button class="btn btn-lg btn-primary">Visa fler</button></a>
    </div>


  </div>
</section>
<section class="contact-cta">
  <div class="container text-center">
    <h1 class="text-center">Vi jobbar för att ditt husköp ska vara så smidigt som möjligt</h1><br><hr><br>
    <a href="#"><button class="btn btn-lg btn-danfors-white text-center">Kontakta oss</button></a>
  </div>

</section>

<section class="danfors-blog text-center">
  <div class="container-fluid">
    <h1>Vad händer på västkusten?</h1>
    <p class="lead">Vi är involverade i flera projekt för att utveckla och göra västkusten till en ännu bättre plats att leva på. Här kan ni följa vår framgång och vad vi just nu utvecklar.</p>
    <div class="cards">
      <!-- <?php $blog = new WP_Query( array( 'post_type' => 'post', 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => '6'));
      $i = 1;
      ?>
      <?php while( $blog->have_posts() ) : $blog->the_post(); ?>
      <a href="<? the_permalink(); ?>">
        <div class="col-md-3 col-sm-5 blog-card-var blog-card<?php if($i == 1) echo ' col-md-offset-1 col-sm-offset-1'; else if($i == 3) echo ' col-sm-offset-1 col-md-offset-0'; else if($i == 4) echo ' col-md-offset-1'; else if($i == 4) echo ' col-sm-offset-1'; else if($i == 5) echo ' col-md-offset-0 col-sm-offset-1';?>">
          <h4><?php echo the_title(); ?></h4>
          <hr>
          <h4><?php echo get_the_date(); ?></h4>
        </div>
      </a>
      <?php $i++;?>
      <?php endwhile; wp_reset_query(); ?> -->


      <?php $blog = new WP_Query( array( 'post_type' => 'post', 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => '6'));
      $i = 1;
      ?>
      <?php while( $blog->have_posts() ) : $blog->the_post(); ?>
        <?php $date_post = get_the_date(); ?>
      <a href="<? the_permalink(); ?>">
        <div class="col-md-3 col-sm-5 blog-card-var<?php if($i == 1) echo ' col-md-offset-1 col-sm-offset-1'; else if($i == 3) echo ' col-sm-offset-1 col-md-offset-0'; else if($i == 4) echo ' col-md-offset-1'; else if($i == 4) echo ' col-sm-offset-1'; else if($i == 5) echo ' col-md-offset-0 col-sm-offset-1';?>">
          <div class="col-xs-12 blog-card-img" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)"></div>
          <h4><?php echo the_title(); ?></h4>
          <div class="col-xs-12">
            <div class="author-blog">
              <?php

                $author = get_field('forfattare');
                if( $author ):

                  // override $post
                  $post = $author;
                  setup_postdata( $post );

                  ?>
              <div class="author-img" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)"></div>
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
      <!-- <div class="col-md-3 col-sm-5 blog-card col-md-offset-1 col-sm-offset-1">
        <h4>TITEL TITEL TITEL TITEL TITEL TITEL TITEL</h4>
        <hr>
        <h4>Datum</h4>
      </div>
      <div class="col-md-3 col-sm-5 blog-card">
        <h4>TITEL TITEL TITEL TITEL TITEL TITEL TITEL</h4>
        <hr>
        <h4>Datum</h4>
      </div>
      <div class="col-md-3 col-sm-5 blog-card col-sm-offset-1 col-md-offset-0">
        <h4>TITEL TITEL TITEL TITEL TITEL TITEL TITEL</h4>
        <hr>
        <h4>Datum</h4>
      </div>
      <div class="col-md-3 col-sm-5 blog-card col-md-offset-1">
        <h4>TITEL TITEL TITEL TITEL TITEL TITEL TITEL</h4>
        <hr>
        <h4>Datum</h4>
      </div> -->



    </div>


  </div>
  <button class="btn btn-lg btn-primary btn-show">Visa fler</button>
</section>
<?php
get_footer();
