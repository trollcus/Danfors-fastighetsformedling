<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Danfors_Fastighetsförmedling
 */

 get_header(); ?>

 <div id="primary" class="content-area">
   <main id="main" class="site-main">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <section class="list-hero fadeIMG" data-src="<?php the_post_thumbnail_url( 'full' ); ?>">
       </section>
       <section class="kunskap-single-content">
         <div class="container">
           <ol class="breadcrumb text-center">
 						<li><a href="<?php echo get_site_url(); ?>">Hem</a></li>
 						<li><a href="<?php echo get_site_url(); ?>/aktuellt">Aktuellt</a></li>
 						<li class="active"><?php the_title(); ?></li>
 					</ol>
           <?php $date_post = get_the_date(); ?>
           <div class="content-kunskap">
             <?php the_content(); ?>


             <hr>

             <div style="margin-top: 20px;" class="author-blog">
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

         </div>


       </section>
       <?php endwhile; endif; ?>
       <?php
         $random = rand(0 ,1);
         if($random == 0){
           get_template_part( 'template-parts/CTA', 'section' );
         } else {
           get_template_part( 'template-parts/CTA', 'forsaljning' );
         }
       ?>





   </main><!-- #main -->
 </div><!-- #primary -->


 <?php

 get_footer();
