<?php

/**
 * Template Name: Blog Template
 */

get_header();

?>




<?php get_template_part('inc/breadcump'); ?>



<section class="blog-area pb-100 pt-100" id="blog">
   <div class="container">
      <div class="row">
         <?php while (have_posts()) {
            the_post();
         ?>
            <div class="col-md-4">
               <div class="single-blog">
                  <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                  <div class="post-content">
                     <div class="post-title">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                     </div>
                     <div class="pots-meta">
                        <div class="categories-name">
                           <h6><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></h6>
                        </div>
                        <ul>
                           <li><a href="#"><?php echo get_the_date(); ?></a></li>
                           <li><a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a></li>
                        </ul>
                     </div>
                     <p><?php the_excerpt(); ?></p>
                     <a href="blog-single.html" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </div>
         <?php
         }
         ?>
      </div>
   </div>
</section>
<!-- Latest News Area End -->


<?php get_footer(); ?>