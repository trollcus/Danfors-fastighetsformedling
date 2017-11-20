<?php
/*
  Template Name: Kontaktsida
 */

get_header(); ?>

<section class="hero-sub hero-danfors col-sm-12" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>'); background-repeat:no-repeat; background-size:cover;">
  <div class="container text-center hero-items">
  </div>


  <!-- <svg viewbox="4 5 90 15" preserveAspectRatio="none">
    <path fill="#FFF" d="M0 30 H100 V10 L52.5 19.5 Q50 20 47.5 19.5 L0 10z" />
  </svg> -->
</section>

<section class="contact-section">
  <div class="contact-container">
    <div class="contact-part">
      <div class="contact-points">
        <p class="lead">Kontakta oss för:</p>
        <ul>
          <li>
            <div>
              <svg width="51px" height="45px" viewBox="0 0 51 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 47 (45396) - http://www.bohemiancoding.com/sketch -->
                  <desc>Created with Sketch.</desc>
                  <defs></defs>
                  <g id="Sketch" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Kontakt" transform="translate(-156.000000, -967.000000)" fill-rule="nonzero" fill="#000000">
                          <g id="Group-18" transform="translate(76.000000, 897.000000)">
                              <path d="M130.457592,87.6468705 C131.048075,88.071825 131.176372,88.8866883 130.743869,89.4669015 C130.484287,89.8154014 130.081667,89.9999301 129.673668,89.9999301 C129.401934,89.9999301 129.127809,89.9181893 128.891935,89.7483445 L105.500011,72.9162884 L82.1080869,89.7484424 C81.5177032,90.1732011 80.6884567,90.0473104 80.2560532,89.4669993 C79.8236497,88.8866883 79.9519464,88.071825 80.5424296,87.6468705 L104.717381,70.2515367 C105.183353,69.9161544 105.816668,69.9161544 106.282839,70.2515367 L130.457592,87.6468705 Z M123.699928,90 C124.41788,90 124.999902,90.5916713 125,91.3216244 L125,113.678475 C125,114.408329 124.417978,115 123.700026,115 L110.700384,115 C110.016342,115 109.456697,114.46237 109.405492,113.780199 C109.402365,113.749702 109.40041,113.716522 109.40041,113.678475 L109.40041,100.874493 C109.40041,98.6882103 107.650727,96.9094214 105.5,96.9094214 C103.349273,96.9094214 101.59959,98.6881109 101.59959,100.874493 L101.59959,113.678475 C101.59959,113.716721 101.597635,113.750497 101.594508,113.781392 C101.542716,114.463065 100.983267,115 100.299616,115 L87.2999739,115 C86.5821202,115 86,114.408329 86,113.678475 L86,91.3216244 C86,90.5917706 86.5821202,90.0000993 87.2999739,90.0000993 C88.0178277,90.0000993 88.5999479,90.5917706 88.5999479,91.3216244 L88.5999479,112.356851 L98.9996417,112.356851 L98.9996417,100.874394 C98.9996417,97.2307876 101.915813,94.266272 105.5,94.266272 C109.084187,94.266272 112.000358,97.2305889 112.000358,100.874394 L112.000358,112.356751 L122.399954,112.356751 L122.399954,91.3215251 C122.399954,90.5916713 122.982075,90 123.699928,90 Z" id="Combined-Shape"></path>
                          </g>
                      </g>
                  </g>
              </svg>
            </div>
            <div>
              <p>Kostnadsfri försäljning</p>
          </div>
          </li>
          <li>
            <div>

              <svg width="50px" height="40px" viewBox="0 0 50 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 47 (45396) - http://www.bohemiancoding.com/sketch -->
                  <desc>Created with Sketch.</desc>
                  <defs></defs>
                  <g id="Sketch" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Kontakt" transform="translate(-157.000000, -1071.000000)" fill-rule="nonzero" fill="#000000">
                          <g id="Group-15" transform="translate(157.000000, 1071.000000)">
                              <path d="M47.1951113,14 L23.804986,14 C22.2583569,14 21,15.279764 21,16.8529248 L21,30.7628011 C21,32.335863 22.2582596,33.615726 23.804986,33.615726 L38.4485869,33.615726 L44.3813692,39.6499029 C44.6062078,39.8785842 44.9067385,40 45.212523,40 C45.3639072,40 45.5166535,39.970215 45.6620057,39.9089629 C46.100981,39.7239201 46.3874046,39.2882284 46.3874046,38.8047422 L46.3874046,33.615627 L47.195014,33.615627 C48.7416431,33.615627 50,32.335863 50,30.7627022 L50,16.8528259 C50.0000973,15.279764 48.7418377,14 47.1951113,14 Z M47.649945,30.7628011 C47.649945,31.017804 47.4459265,31.2253092 47.1952086,31.2253092 L45.2128149,31.2253092 C44.5944356,31.2253092 44.088719,31.7113682 44.0423114,32.3283425 C44.0392953,32.3544662 44.0373495,35.9193606 44.0373495,35.9193606 L39.7707665,31.5797602 C39.7662911,31.5752084 39.7616212,31.5709534 39.7571458,31.5664015 C39.7404118,31.5497774 39.7245535,31.5353302 39.7095707,31.5223673 C39.5027308,31.3379182 39.2325548,31.2252103 38.936013,31.2252103 L23.804986,31.2252103 C23.5541707,31.2252103 23.3502496,31.017705 23.3502496,30.7627022 L23.3502496,16.8528259 C23.3502496,16.5977241 23.554268,16.3903178 23.804986,16.3903178 L47.1952086,16.3903178 C47.4459265,16.3903178 47.649945,16.597823 47.649945,16.8528259 L47.649945,30.7628011 L47.649945,30.7628011 Z" id="Shape"></path>
                              <path d="M41,23 C40.4480046,23 40,23.4480046 40,24 C40,24.5519954 40.4480046,25 41,25 C41.5520782,25 42,24.5519954 42,24 C42,23.4480046 41.5519954,23 41,23 Z" id="Shape"></path>
                              <path d="M36.1969236,0 L2.80317361,0 C1.25744665,0 0,1.2841058 0,2.86250447 L0,23.3216172 C0,24.9000159 1.25744665,26.184221 2.80317361,26.184221 L4.96853311,26.184221 L4.96853311,33.8006871 C4.96853311,34.285615 5.25457718,34.7229834 5.6934633,34.908654 C5.83872158,34.9702133 5.99136917,35 6.14265556,35 C6.44833965,35 6.74857898,34.878073 6.97327234,34.6487152 L15.2620363,26.1843203 L16.9250199,26.1843203 C17.5736263,26.1843203 18.0993369,25.6474642 18.0993369,24.9851066 C18.0993369,24.3226498 17.5734319,23.7857937 16.9250199,23.7857937 C16.9250199,23.7857937 14.718922,23.7873823 14.695879,23.7897653 C14.4224746,23.8087295 14.1541259,23.9237063 13.9450863,24.1370785 L7.31716693,30.9055165 C7.31716693,30.9055165 7.31512515,24.9092498 7.31133327,24.8781723 C7.25834414,24.2659558 6.75548215,23.7857937 6.14226665,23.7857937 L2.80317361,23.7857937 C2.55252044,23.7857937 2.34873105,23.5775845 2.34873105,23.3217165 L2.34873105,2.86250447 C2.34873105,2.60653719 2.55261767,2.39842726 2.80317361,2.39842726 L36.1969236,2.39842726 C36.4475768,2.39842726 36.6513662,2.60663648 36.6513662,2.86250447 L36.6513662,10.7118035 C36.6513662,11.374161 37.1772711,11.9110171 37.8256831,11.9110171 C38.474095,11.9110171 39,11.374161 39,10.7118035 L39,2.86250447 C39,1.2841058 37.7425534,0 36.1969236,0 Z" id="Shape"></path>
                              <path d="M35,23 C34.4480046,23 34,23.4480046 34,24 C34,24.5519954 34.4480046,25 35,25 C35.5520782,25 36,24.5519954 36,24 C36,23.4480046 35.5519954,23 35,23 Z" id="Shape"></path>
                              <path d="M30.8118929,8 C30.8118929,8 9.18810712,8 9.18810712,8 C8.53198239,8 8,8.44767346 8,9 C8,9.55232654 8.53208076,10 9.18810712,10 L30.8118929,10 C31.4680176,10 32,9.55232654 32,9 C32,8.44767346 31.4680176,8 30.8118929,8 Z" id="Shape"></path>
                              <path d="M17.7650422,16 L9.23495785,16 C8.5529601,16 8,16.4476735 8,17 C8,17.5523265 8.55306234,18 9.23495785,18 L17.7650422,18 C18.4471422,18 19,17.5523265 19,17 C19,16.4476735 18.4470399,16 17.7650422,16 Z" id="Shape"></path>
                              <path d="M30,23 C29.4480874,23 29,23.4480046 29,24 C29,24.5519954 29.4480874,25 30,25 C30.5520782,25 31,24.5519954 31,24 C31,23.4480046 30.5520782,23 30,23 Z" id="Shape"></path>
                          </g>
                      </g>
                  </g>
              </svg>
            </div>
            <div>
              <p>Försäljningsfrågor</p>
            </div>
          </li>
          <li>
            <div>

              <svg width="48px" height="50px" viewBox="0 0 48 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 47 (45396) - http://www.bohemiancoding.com/sketch -->
                  <desc>Created with Sketch.</desc>
                  <defs></defs>
                  <g id="Sketch" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Kontakt" transform="translate(-158.000000, -1162.000000)" fill-rule="nonzero" fill="#000000">
                          <path d="M199.459881,1181.01261 L199.459881,1179.09034 C199.459881,1174.4895 197.798054,1170.21429 194.785325,1167.04202 C191.697544,1163.78571 187.451847,1162 182.820177,1162 L181.201236,1162 C176.569566,1162 172.323869,1163.78571 169.236089,1167.04202 C166.223359,1170.21429 164.561533,1174.4895 164.561533,1179.09034 L164.561533,1181.01261 C160.905515,1181.2542 158,1184.23739 158,1187.88235 L158,1190.88655 C158,1194.67857 161.152109,1197.76681 165.022555,1197.76681 L168.978774,1197.76681 C169.68639,1197.76681 170.265349,1197.19958 170.265349,1196.5063 L170.265349,1182.2521 C170.265349,1181.55882 169.68639,1180.9916 168.978774,1180.9916 L167.134683,1180.9916 L167.134683,1179.09034 C167.134683,1170.78151 173.181585,1164.52101 181.190515,1164.52101 L182.809455,1164.52101 C190.829106,1164.52101 196.865288,1170.78151 196.865288,1179.09034 L196.865288,1180.9916 L195.021197,1180.9916 C194.31358,1180.9916 193.734622,1181.55882 193.734622,1182.2521 L193.734622,1196.4958 C193.734622,1197.18908 194.31358,1197.7563 195.021197,1197.7563 L196.822402,1197.7563 C196.29705,1204.33193 191.676102,1205.85504 189.53181,1206.20168 C188.94213,1204.42647 187.237418,1203.14496 185.232505,1203.14496 L182.016067,1203.14496 C179.528689,1203.14496 177.502333,1205.13025 177.502333,1207.56723 C177.502333,1210.0042 179.528689,1212 182.016067,1212 L185.243226,1212 C187.323189,1212 189.070787,1210.61345 189.596139,1208.7437 C190.646842,1208.59664 192.308668,1208.22899 193.959772,1207.28361 C196.286329,1205.94958 199.041744,1203.22899 199.406273,1197.7458 C203.083734,1197.52521 205.99997,1194.53151 205.99997,1190.87605 L205.99997,1187.87185 C206.010692,1184.23739 203.115898,1181.2437 199.459881,1181.01261 Z M167.713642,1195.23529 L165.043998,1195.23529 C162.588784,1195.23529 160.594593,1193.28151 160.594593,1190.87605 L160.594593,1187.87185 C160.594593,1185.46639 162.588784,1183.51261 165.043998,1183.51261 L167.713642,1183.51261 L167.713642,1195.23529 Z M185.243226,1209.47899 L182.016067,1209.47899 C180.943921,1209.47899 180.075483,1208.62815 180.075483,1207.57773 C180.075483,1206.52731 180.943921,1205.67647 182.016067,1205.67647 L185.243226,1205.67647 C186.315372,1205.67647 187.18381,1206.52731 187.18381,1207.57773 C187.18381,1208.62815 186.315372,1209.47899 185.243226,1209.47899 Z M203.437542,1190.87605 C203.437542,1193.28151 201.44335,1195.23529 198.988136,1195.23529 L196.318493,1195.23529 L196.318493,1183.51261 L198.988136,1183.51261 C201.44335,1183.51261 203.437542,1185.46639 203.437542,1187.87185 L203.437542,1190.87605 Z" id="Shape"></path>
                      </g>
                  </g>
              </svg>
            </div>
            <div>
              <p>Kundsupport</p>
            </div>
          </li>
        </ul>
      </div>
      <hr>
      <p class="office-text">Kustvägen 182 <br> 312 61 Mellbystrand<br>0430-282 50</p>
      <hr class="small-blue">
      <p class="office-text">Ryssgatan 5
      <br>312 30 Laholm <br>
      0430-282 50</p>
    </div>
    <div class="contact-part contact-form-part">
       <?php echo do_shortcode( '[contact-form-7 id="2589" title="Kontaktsida"]' ); ?>
    </div>
    </div>


</section>


<!-- Sociala medier CTA -->

<?php
  get_template_part( 'template-parts/CTA', 'socialmedia' );
?>

<!-------------------------->

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
            <?php the_post_thumbnail(); ?>
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
            <?php the_post_thumbnail(); ?>
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
