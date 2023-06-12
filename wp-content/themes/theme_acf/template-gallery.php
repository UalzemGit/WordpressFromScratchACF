<?php

/**
 * Template Name: Gallery Template
 */

get_header();

?>


<!-- Header Area Start -->
<?php get_template_part('inc/breadcump'); ?>


<section class="gallery-area pt-100 pb-100">
   <div class="container">
      <div class="row">
         <?php
         $args = array(
            'post_type' => 'gallery',
            'posts_per_page' => -1
         );
         $query = new WP_Query($args);
         while ($query->have_posts()) {
            $query->the_post(); ?>
            <div class="col-xl-4">
               <div class="single-gallery">
                  <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="<?php esc_attr(the_title()); ?>">
                  <div class="gallery-hover">
                     <?php
                     if (class_exists('ACF')) {
                        $bigImage = get_field('big_image');
                     ?>
                        <div class="gallery-content">
                           <h3><a href="<?php echo esc_url($bigImage); ?>" class="gallery"><i class="fa fa-plus"></i> <?php esc_attr(the_title()); ?></a></h3>
                        </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
         <?php }
         wp_reset_postdata();
         ?>
      </div>
   </div>
</section>


<?php get_footer(); ?>