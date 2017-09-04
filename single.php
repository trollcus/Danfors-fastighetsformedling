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
       <section class="list-hero" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)">
       </section>
       <section class="kunskap-single-content">
         <div class="container">
           <ol class="breadcrumb text-center">
 						<li><a href="<?php echo get_site_url(); ?>">Hem</a></li>
 						<li><a href="<?php echo get_site_url(); ?>/blog">Blog</a></li>
 						<li class="active"><?php the_title(); ?></li>
 					</ol>
           <!-- <h1 class="text-center"><?php the_title() ?></h1> -->
           <div class="content-kunskap">
             <?php the_content(); ?>
           </div>

         </div>


       </section>
       <?php endwhile; endif; ?>
       <?php get_template_part( 'template-parts/CTA', 'section' ); ?>





   </main><!-- #main -->
 </div><!-- #primary -->


 <?php

 get_footer();
