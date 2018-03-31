<?php
/*
  Template Name: About page
 */

get_header(); ?>

<section class="hero-sub hero-danfors col-sm-12 about-hero fadeInIMG" data-src="<?php echo the_post_thumbnail_url('full'); ?>" style="background-repeat:no-repeat; background-size:cover;">
  <div class="container text-center hero-items">
  </div>


  <!-- <svg viewbox="4 5 90 15" preserveAspectRatio="none">
    <path fill="#FFF" d="M0 30 H100 V10 L52.5 19.5 Q50 20 47.5 19.5 L0 10z" />
  </svg> -->
</section>
<section class="meet-hakan">
  <div class="contain">
  <div class="hakan" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/hakan.png')"></div>
  <div class="hakan-text">
    <h2>Det började med Håkan</h2>
    <?php $hakan_text = get_field('borjade_med_hakan'); ?>
    <p><?php echo $hakan_text ?></p>
  </div>
  </div>
</section>

<section class="meet-danfors">
  <div class="container">
    <div class="row">

      <div class="col-sm-6 team-text">
        <h2>Danfors idag</h2>
        <?php $danfors_text = get_field('danfors_idag'); ?>
        <p><?php echo $danfors_text ?></p>
      </div>
      <div class="col-sm-4 col-sm-offset-1">
        <?php $member = new WP_Query( array( 'post_type' => 'maklare', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
        <?php while( $member->have_posts() ) : $member->the_post(); ?>

          <div class="col-xs-4 col-sm-6 text-center team-member-danfors">
            <?php the_post_thumbnail( 'medium', ['class' => 'team-member-lazy'] ); ?>
            <h5><?php the_title(); ?></h5>
          </div>

        <?php endwhile; wp_reset_query(); ?>

      </div>
    </div>
  </div>
</section>

<section class="office office-mellbystrand">
  <div class="office-map">
    <div class="acf-map">
      <div class="marker" data-lat="56.490768" data-lng="12.940744"></div>
    </div>
  </div>
  <div class="office-text-area text-center">
    <div class="office-info">
      <h2>Danfors i Mellbystrand</h2>
      <p class="office-text">Kustvägen 182 <br> 312 61 Mellbystrand<br>0430-282 50</p>
    </div>
    <div class="office-workers-section">
      <p class="office-text">Vilka som jobbar här</p>
      <div class="office-workers">
      <?php $member = new WP_Query( array( 'post_type' => 'maklare', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '3')); ?>
      <?php while( $member->have_posts() ) : $member->the_post(); ?>

          <div class="text-center office-worker">
            <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" width="100" />
            <h5><?php the_title(); ?></h5>
            <h5><a href="tel:<?php echo get_field('maklare_telefon')?>"><?php echo get_field('maklare_telefon')?></a></h5>
            <h5><a href="mailto:<?php echo get_field('maklare_mail')?>"><?php echo get_field('maklare_mail')?></a></h5>
          </div>

      <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </div>
</section>
<section class="office office-laholm">
  <div class="office-text-area text-center">
    <div class="office-info">
      <h2>Danfors i Laholm</h2>
      <p class="office-text">Ryssgatan 5
      <br>312 30 Laholm <br>
      0430-282 50</p>
    </div>
    <div class="office-workers-section">
      <p class="office-text">Vilka som jobbar här</p>
      <div class="office-workers">
      <?php $member = new WP_Query( array( 'post_type' => 'maklare', 'orderby' => 'post_id', 'order' => 'ASC', 'offset' => '3' ,'posts_per_page' => '3')); ?>
      <?php while( $member->have_posts() ) : $member->the_post(); ?>

          <div class="text-center office-worker">
            <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" width="100" />
            <h5><?php the_title(); ?></h5>
            <h5><a href="tel:<?php echo get_field('maklare_telefon')?>"><?php echo get_field('maklare_telefon')?></a></h5>
            <h5><a href="mailto:<?php echo get_field('maklare_mail')?>"><?php echo get_field('maklare_mail')?></a></h5>
          </div>

      <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </div>
  <div class="office-map">
    <div class="acf-map">
      <div class="marker" data-lat="56.511624" data-lng="13.043361"></div>
    </div>
  </div>

</section>

<section class="danfors-media">
  <h2 class="text-center">Danfors i media</h2>
  <div class="media-section">
    <div class="media-col">
      <div class="media-manual">
        <div class="manual-img" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/grafisk-1.png')"></div>
        <div class="media-manual-text">
          <h3>Grafisk manual</h3>
          <p>Vår grafiska profil är en stor del av vårt ansikte utåt. Danfors har investerat i att vara konsekvent när vi presenterar oss i olika sammanhang.</p>
        </div>
      </div>
      <div class="media-list-container">
        <h3>Annonsering</h3>
        <p>Danfors syns ständigt i media. Vi arbetar med profil, image och utbudsannonser. De förändras ständigt. Här ser du tre alternativ på annonser.</p>
        <div class="media-list">
          <ul>
            <li>
              <div>Danfors 122x65</div>
              <div>danfors_122x65_hakan.pdf</div>
            </li>
            <li>
              <div>Familj på stranden</div>
              <div>danfors_familj_pa_stranden.pdf</div>
            </li>
            <li>
              <div>Baby 80x43</div>
              <div>Danfors_80x43_baby2.DP2.pdf</div>
            </li>
            <li>
              <div>Annonsmanual</div>
              <div>Annonsmanual_utbud.pdf</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="media-col">
      <div class="media-list-container">
        <h3>Logotyper</h3>
        <p>Vår logotyp finns i olika format beroende på hur den skall användas.<br>Här kan du ladda hem dem högupplösta i eps format.</p>
        <div class="media-list media-logos">
          <ul>
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/danfors-vit-logo.eps">
              <li>
                <div>Ladda hem vit logo</div>
                <div class="media-logo" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/asset-4.jpeg')"></div>
              </li>
            </a>
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/danfors-bla-logo.eps">
              <li>
                <div>Ladda hem blå logo</div>
                <div class="media-logo" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/asset-5.jpeg')"></div>
              </li>
            </a>
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/danfors-svart-logo.eps">
              <li>
                <div>Ladda hem svart logo</div>
                <div class="media-logo" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/asset-3.jpeg')"></div>
              </li>
            </a>
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/danfors-enkel-svart.eps">
              <li>
                <div>Ladda hem svart enkel logo</div>
                <div class="media-logo" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/asset-6.png')"></div>
              </li>
            </a>
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/danfors-enkel-vit.eps">
              <li>
                <div>Ladda hem vit enkel logo</div>
                <div class="media-logo" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/asset-7.png')"></div>
              </li>
            </a>
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/danfors-enkel-bla.eps">
              <li>
                <div>Ladda hem blå enkel logo</div>
                <div class="media-logo" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/asset-8.png')"></div>
              </li>
            </a>
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/citat-svart.eps">
              <li>
                <div>Ladda hem citat logo</div>
                <div class="media-logo" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/asset-9.png')"></div>
              </li>
            </a>
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/citat-svart-vinklad.eps">
              <li>
                <div>Ladda hem roterad citat logo</div>
                <div class="media-logo" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/asset-10.png')"></div>
              </li>
            </a>
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/danfors-tak.psd">
              <li>
                <div>Ladda hem taklogo</div>
                <div class="media-logo" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/asset-11.png')"></div>
              </li>
            </a>
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/danfors-nyckel-skugga.psd">
              <li>
                <div>Ladda hem husnyckel logo med skugga</div>
                <div class="media-logo" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/asset-12.png')"></div>
              </li>
            </a>
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/danfors-nyckel.psd">
              <li>
                <div>Ladda hem husnyckel logo</div>
                <div class="media-logo" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/uploads/2017/10/asset-13.png')"></div>
              </li>
            </a>

          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
  $random = rand(0 ,1);
  if($random == 0){
    get_template_part( 'template-parts/CTA', 'section' );
  } else {
    get_template_part( 'template-parts/CTA', 'forsaljning' );
  }
?>


<?php
get_footer();
