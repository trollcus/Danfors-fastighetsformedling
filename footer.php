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
				<img src="http://localhost:8888/wp-content/themes/danfors/assets/images/logo_bla.png" alt="#" />
				<p>Din lokala fastighetsmäklare</p>
			</div>
			<div class="sidor-danfors">
				<ul>
					<p class="object-title">Sidor</p>
					<li><a href="<?php echo get_site_url(); ?>/" class="footer-links">Hem</a></li>
					<li><a href="<?php echo get_site_url(); ?>/till-salu/" class="footer-links">Till Salu</a></li>
	        <li><a href="<?php echo get_site_url(); ?>/kunskapsbanken/" class="footer-links">Kunskapsbanken</a></li>
	        <li><a href="#" class="footer-links">Kontakt</a></li>
	        <li><a href="#" class="footer-links">Om Danfors</a></li>
					<li><a href="<?php echo get_site_url(); ?>/blog/" class="footer-links">Blog</a></li>
				</ul>
			</div>
			<div class="annonser-danfors">
				<?php $loop = new WP_Query( array( 'post_type' => 'bostad', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => '6')); ?>
				<p class="object-title">Senaste objekten</p>
				<ul>
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

							<li><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></li>

        <?php endwhile; wp_reset_query(); ?>

				</ul>
			</div>
			<div class="nyhetsbrev-danfors">
				<p class="object-title">Nyhetsbrev</p>
				<p>Skriv upp dig på vårt nyhetsbrev</p>
				<input type="text" placeholder="Dinmail@mail.com">
				<button>Bekräfta</button>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/danfors/js/custom.js"></script>
<?php wp_footer(); ?>

</body>
</html>
