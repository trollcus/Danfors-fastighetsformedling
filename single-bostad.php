<?php
/**
 * The template for displaying all bostads posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Danfors_Fastighetsförmedling
 */

get_header(); ?>


	<div id="primary" class="content-area">

		<main id="main" class="site-main">
      <section class="list-hero" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)">

      </section>
      <section class="listing-content">
        <div class="container">
					<ol class="breadcrumb text-center">
						<li><a href="<?php echo get_site_url(); ?>">Hem</a></li>
						<li><a href="<?php echo get_site_url(); ?>/till-salu">Till salu</a></li>
						<li class="active"><?php the_title(); ?></li>
					</ol>
            <h1 class="text-center small"><?php echo get_field('adress'); echo ' '; echo get_field('adress_omrade'); echo ' '; echo get_field('adress_kommun'); ?></h1>
            <h1 class="text-center"><?php the_title(); ?></h1>
            <p class="text-center lead desc-text"><?php echo get_field('beskrivande_text'); ?></p>
            <h2 class="text-center list-price">Utgångspris: <?php
									$price_list = get_field('utgangspris');
									$formatted_price = number_format($price_list, 0, ' ', ' ');
									echo $formatted_price; ?> :-</h2>
			            <div class="container-fluid">
              <div class="row desc_agent">
                <div class="col-sm-5 desc-agent-item">
                  <?php

                    $maklare = get_field('ansvarig_maklare');

                    if( $maklare ):

                    	// override $post
                    	$post = $maklare;
                    	setup_postdata( $post );

                    	?>

                      <div class="col-sm-4 maklare-bild">
                        <?php the_post_thumbnail(); ?>
                      </div>
                      <div class="col-sm-8">
                        <h4><?php the_title(); ?></h4>
                        <p>Ansvarig Mäklare</p>
                        <h6>Telefonnummer: <?php echo get_field('maklare_telefon')?></h6>
                        <h6>Mail: <a href="mailto:<?php echo get_field('maklare_mail')?>"><?php echo get_field('maklare_mail')?></a></h6>

                      </div>



                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>

                </div>
                <div class="col-sm-5 col-sm-offset-1 desc-agent-item">
                  <div class="col-sm-4">
                    <img src="wp-content/themes/danfors/assets/images/Oval2.png" alt="">
                  </div>
                  <div class="col-sm-8">
                    <h4>Håkan Danfors &nbsp; &nbsp;<span class="glyphicon glyphicon-envelope"></span></h4>
                    <h6>0730 46 88 34</h6>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod cupiditate iste sed. Fuga porro quaerat, nihil rem nam voluptatibus cumque excepturi itaque, s</p> -->
                  </div>
                </div>
              </div>
            </div>




            <div class="col-md-4 col-md-offset-8 share-list">
              <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) {
            ADDTOANY_SHARE_SAVE_KIT( array( 'use_current_page' => true ) );
        } ?>
            </div>

        </div>
      </section>

      <section class="listing-items" id="tabs-listing">
          <ul class="nav nav-tabs nav-justified tabs-ul">
            <li role="presentation" class="active"><a data-toggle="tab" href="#images">Bilder</a></li>
            <li role="presentation"><a data-toggle="tab" href="#beskrivning">Beskrivning</a></li>
            <li role="presentation"><a data-toggle="tab" href="#omradet">Området</a></li>
            <li role="presentation"><a data-toggle="tab" href="#fakta">Fakta</a></li>
            <li role="presentation"><a data-toggle="tab" href="#planlosning">Planlösning</a></li>
            <!-- <li role="presentation"><a data-toggle="tab" href="#dokument">Dokument</a></li> -->
          </ul>
          <div class="tab-content">
            <?php

              $images = get_field('bilder');

              if( $images ): ?>
                  <div class="col-sm-12 tab-pane active" id="images">
                      <?php foreach( $images as $image ): ?>
                          <div class="bilder-field">

                              <a href="<?php echo $image['url']; ?>">
                                   <img class="list-img" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                              </a>
                              <p><?php echo $image['caption']; ?></p>
                          </div>
                      <?php endforeach; ?>
                  </div>
              <?php endif; ?>
              <div class="col-sm-12 tab-pane fade" id="planlosning">
								<?php

									$plan_images = get_field('planlosning');

									if( $plan_images ): ?>
											<div class="col-sm-12 tab-pane active" id="images">
													<?php foreach( $plan_images as $image_plan ): ?>
															<div class="bilder-field">

																	<a href="<?php echo $image_plan['url']; ?>">
																			 <img class="list-img" src="<?php echo $image_plan['sizes']['large']; ?>" alt="<?php echo $image_plan['alt']; ?>" />
																	</a>
																	<p><?php echo $image_plan['caption']; ?></p>
															</div>
													<?php endforeach; ?>
											</div>
									<?php endif; ?>
              </div>

                <div class="col-sm-12 tab-pane fade" id="beskrivning">
                  <div class="container">
                    <div class="col-sm-8 col-sm-offset-2">
                      <?php the_field('beskrivning'); ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 tab-pane fade" id="omradet">
                  <div class="container">
                    <div class="col-sm-8 col-sm-offset-2">
                      <?php the_field('omradet'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 tab-pane fade" id="fakta">
                  <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-3 col-md-offset-3">
                      <table class="table table-striped">
                      <?php
                          $rows = get_field('byggnadsinfo');
                          if($rows)
                          {
                            echo '<h3>Byggnadsinfo</h3>';

                          	foreach($rows as $row)
                          	{
                          		echo '<tr><td><h5>' . $row['byggnad_typ_av_data']['0'] . ':</h5></td><td><h5>' . $row['byggnad_antaltyp'] .'</h5></td></tr>';
                          	}
                          }

                        ?>
                      </table>

                    </div>


                    <div class="col-md-3">
                      <table class="table table-striped">
                      <?php
                          $rows = get_field('driftkostnad');
                          if($rows)
                          {
                            echo '<h3>Driftkostnad</h3>';

                          	foreach($rows as $row)
                          	{
                          		echo '<tr><td><h5>' . $row['driftkostnad_typ_av_data']['0'] . ':</h5></td><td><h5>' . $row['driftkostnad_taxering_antaltyp'] .'</h5></td></tr>';
                          	}
                          }

                        ?>
                      </table>

                    </div>
                  </div>
                  <div class="col-md-3 col-md-offset-3">
                    <table class="table table-striped">
                    <?php
                        $rows = get_field('taxeringsvarde');
                        if($rows)
                        {
                          echo '<h3>Taxeringsvärde</h3>';

                          foreach($rows as $row)
                          {
                            echo '<tr><td><h5>' . $row['taxering_typ_av_data']['0'] . ':</h5></td><td><h5>' . $row['taxering_antaltyp'] .'</h5></td></tr>';
                          }
                        }

                      ?>
                    </table>

                  </div>



                  </div>
                </div>



              </div>
							<div class="text-center row top-btn-class">
								<a href="#" id="top-btn"><button class="btn btn-up text-center">

										<svg width="22px" height="13px" viewBox="0 0 22 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										    <!-- Generator: Sketch 45.2 (43514) - http://www.bohemiancoding.com/sketch -->
										    <desc>Created with Sketch.</desc>
										    <defs></defs>
										    <g id="Sketch" stroke="none" stroke-width="1" fill-rule="evenodd">
										        <g id="Index" transform="translate(-1380.000000, -1099.000000)" fill-rule="nonzero" fill="#000000">
										            <g id="chevron-small-up" transform="translate(1379.223806, 1098.934283)">
										                <path d="M3.72598791,12.1082831 C3.08771817,12.7394871 2.05612354,12.7394871 1.42256428,12.1082831 C0.789005025,11.4770791 0.781939308,10.4572606 1.42256428,9.82605661 L10.6268378,0.805491697 C11.2627523,0.174287677 12.2919917,0.174287677 12.9326167,0.805491697 L22.1368902,9.82605661 C22.7728047,10.4549054 22.7728047,11.4770791 22.1368902,12.1082831 C21.4986205,12.7394871 20.4670259,12.7394871 19.8311114,12.1082831 L11.7761944,4.71047776 L3.72598791,12.1082831 Z" id="Shape"></path>
										            </g>
										        </g>
										    </g>
										</svg>
								</button></a>

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
			    <div class="cards">



			      <?php $blog = new WP_Query( array( 'post_type' => 'post', 'orderby' => 'rand', 'posts_per_page' => '3'));
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
			</section>





		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
