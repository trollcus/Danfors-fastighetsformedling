<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Danfors_Fastighetsförmedling
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-fluid">
			<div class="brand-danfors">
				<a href="<?php echo get_site_url(); ?>/"><img src="<?php echo get_site_url(); ?>/wp-content/themes/danfors/assets/images/logo_bla.png" alt="Blå Logo Danfors" /></a>
				<p>Din lokala mäklare</p>
				<div class="socialFooter">
				<a href="https://www.facebook.com/Danfors-Fastighetsf%C3%B6rmedling-204544782891322/" class="link-icon">
				<svg width="20px" height="20px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				    <desc>Facebook</desc>
				    <defs></defs>
				    <g id="Sketch" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				        <g id="Artboard" transform="translate(-764.000000, -300.000000)" fill-rule="nonzero" fill="#595959">
				            <g id="facebook" transform="translate(764.000000, 300.000000)">
				                <path d="M16,0 L2,0 C0.9,0 0,0.9 0,2 L0,16 C0,17.101 0.9,18 2,18 L9,18 L9,11 L7,11 L7,8.525 L9,8.525 L9,6.475 C9,4.311 10.212,2.791 12.766,2.791 L14.569,2.793 L14.569,5.398 L13.372,5.398 C12.378,5.398 12,6.144 12,6.836 L12,8.526 L14.568,8.526 L14,11 L12,11 L12,18 L16,18 C17.1,18 18,17.101 18,16 L18,2 C18,0.9 17.1,0 16,0 Z" id="Shape"></path>
				            </g>
				        </g>
				    </g>
				</svg>
				</a>
				<a href="https://www.instagram.com/danfors.se/" class="link-icon">
				<svg width="20px" height="20px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				    <desc>Instagram</desc>
				    <defs></defs>
				    <g id="Sketch" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				        <g id="Artboard" transform="translate(-804.000000, -300.000000)" fill-rule="nonzero" fill="#595959">
				            <g id="instagram" transform="translate(804.000000, 300.000000)">
				                <path d="M16,0 L2,0 C0.9,0 0,0.9 0,2 L0,16 C0,17.101 0.9,18 2,18 L16,18 C17.1,18 18,17.101 18,16 L18,2 C18,0.9 17.1,0 16,0 Z M8.984,14.523 C12.043,14.523 14.522,12.042 14.522,8.984 C14.522,8.646 14.479,8.32 14.419,8 L16,8 L16,15.216 C16,15.598 15.69,15.906 15.307,15.906 L2.693,15.906 C2.31,15.906 2,15.598 2,15.216 L2,8 L3.549,8 C3.488,8.32 3.445,8.646 3.445,8.984 C3.445,12.043 5.926,14.523 8.984,14.523 Z M5.523,8.984 C5.523,7.072 7.073,5.523 8.985,5.523 C10.896,5.523 12.447,7.072 12.447,8.984 C12.447,10.896 10.896,12.446 8.985,12.446 C7.072,12.446 5.523,10.896 5.523,8.984 Z M15.307,5 L13.692,5 C13.31,5 13,4.688 13,4.308 L13,2.691 C13,2.309 13.31,2 13.691,2 L15.306,2 C15.69,2 16,2.309 16,2.691 L16,4.307 C16,4.688 15.69,5 15.307,5 Z" id="Shape"></path>
				            </g>
				        </g>
				    </g>
				</svg>
				</a>
				</div>

			</div>
			<div class="sidor-danfors">
				<ul>
					<p class="object-title">Sidor</p>
					<li><a href="<?php echo get_site_url(); ?>/" class="footer-links">Hem</a></li>
					<li><a href="<?php echo get_site_url(); ?>/till-salu/" class="footer-links">Till Salu</a></li>
					<li><a href="<?php echo get_site_url(); ?>/aktuellt/" class="footer-links">Aktuellt</a></li>
	        <li><a href="<?php echo get_site_url(); ?>/kunskapsbanken/" class="footer-links">Kunskapsbanken</a></li>
					<li><a href="<?php echo get_site_url(); ?>/om-danfors/" class="footer-links">Om Danfors</a></li>
					<li><a href="<?php echo get_site_url(); ?>/kontakt/" class="footer-links">Kontakt</a></li>
				</ul>
			</div>
			<div class="annonser-danfors">
				<?php $loop = new WP_Query( array( 'post_type' => 'bostad', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '6')); ?>
				<p class="object-title">Senaste objekten</p>
				<ul>
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

        <?php endwhile; wp_reset_query(); ?>

				</ul>
			</div>
			<div class="nyhetsbrev-danfors">

				<p class="object-title">Nyhetsbrev</p>
				<p>Detta nyhetsbrev kommer snart</p>
				<!-- <p>Skriv upp dig på vårt nyhetsbrev</p> -->
				<!-- <?php echo do_shortcode( '[newsletters_subscribe form=1]' ); ?> -->
				<input disabled type="text" placeholder="Dinmail@mail.com">
				<button>Bekräfta</button>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/danfors/js/slimbox2.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmIkJw5rfPQmYCwkdm3-UqJEZnTSt1pPM"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<!-- Lazy loading -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/danfors/js/custom.js"></script>
<?php wp_footer(); ?>

</body>
</html>
