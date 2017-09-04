<?php
/*
  Template Name: About page
 */

get_header(); ?>

<section class="hero-danfors col-sm-12" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>'); background-repeat:no-repeat; background-size:cover;">
  <div class="container text-center hero-items">
    <h1 class="hero-text">Välkommen till Danfors<br>Fastighetsförmedling</h1>
    <a href="<?php echo get_site_url(); ?>/till-salu"><button class="btn btn-danfors-white text-center">Hus till salu</button></a>
  </div>


  <!-- <svg viewbox="4 5 90 15" preserveAspectRatio="none">
    <path fill="#FFF" d="M0 30 H100 V10 L52.5 19.5 Q50 20 47.5 19.5 L0 10z" />
  </svg> -->
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
      <?php $blog = new WP_Query( array( 'post_type' => 'post', 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => '6'));
      $i = 1;
      ?>
      <?php while( $blog->have_posts() ) : $blog->the_post(); ?>
      <a href="<? the_permalink(); ?>">
        <div class="col-md-3 col-sm-5 blog-card<?php if($i == 1) echo ' col-md-offset-1 col-sm-offset-1'; else if($i == 3) echo ' col-sm-offset-1 col-md-offset-0'; else if($i == 4) echo ' col-md-offset-1'; else if($i == 4) echo ' col-sm-offset-1'; else if($i == 5) echo ' col-md-offset-0 col-sm-offset-1';?>">
          <h4><?php echo the_title(); ?></h4>
          <hr>
          <h4><?php echo get_the_date(); ?></h4>
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
