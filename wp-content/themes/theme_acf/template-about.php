<?php

/**
 * Template Name: About Template
 */

get_header();

?>



<?php get_template_part('inc/breadcump'); ?>

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <div class="about">
               <?php
               $about_content = get_field('about_content', 'options');
               ?>
               <div class="page-title">
                  <h4><?php echo $about_content['title']; ?></h4>
               </div>
               <p><?php echo $about_content['description']; ?></p>
            </div>
         </div>
         <div class="col-md-5">
            <?php
            if (class_exists('ACF')) {
               $features = get_field('about_features', 'options');
               foreach ($features as $feature) {
            ?>
                  <div class="single_about">
                     <i class="fa <?php echo esc_attr($feature['icon']); ?>"></i>
                     <h4><?php echo $feature['title']; ?></h4>
                     <p><?php echo $feature['description']; ?></p>
                  </div>
            <?php }
            }
            ?>
         </div>
      </div>
   </div>
</section>
<!-- About Area End -->


<?php get_footer(); ?>