<?php

/**
 * Template Name: Portfolio Template
 */

get_header();

?>





<?php get_template_part('inc/breadcump'); ?>

<!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="portfolio-menu mb-40 text-center">
               <button class="active" data-filter="*">ALL</button>
               <?php
               $cats = get_terms('portfolio-category');
               foreach ($cats as $cat) { ?>

                  <button data-filter=".<?php echo $cat->slug; ?>" class=""><?php echo $cat->name; ?> </button>
               <?php } ?>
            </div>
         </div>
      </div>
      <div class="row grid no-gutters">

         <?php
         $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 10
         );
         $query = new WP_Query($args);
         while ($query->have_posts()) {
            $query->the_post();
         ?>
            <style>
               .single-portfolio img {
                  width: 370px !important;
                  height: 260px !important;
                  object-fit: cover !important;
                  max-width: 100% !important;
               }
            </style>
            <div class="col-md-4 grid-item 
            <?php
            $port_cat = get_the_terms(get_the_ID(), 'portfolio-category');

            foreach ($port_cat as $cat) {
               echo $cat->slug . ' ';
            }

            ?>
            ">
               <div class="single-portfolio">
                  <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                  <div class="portfolio-hover">
                     <div class="portfolio-content">
                        <h3><a href="<?php the_permalink(); ?>" class=""><i class="fa fa-link"></i> <?php the_title(); ?> <span><?php the_field('designation'); ?></span></a></h3>
                     </div>
                  </div>
               </div>
            </div>
         <?php }
         wp_reset_postdata();
         ?>
      </div>
   </div>
</section>
<!-- projectss Area End -->


<?php get_footer(); ?>