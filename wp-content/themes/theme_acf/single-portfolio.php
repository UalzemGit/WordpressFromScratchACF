  <?php get_header(); ?>



  <?php get_template_part('inc/breadcump'); ?>

  <section class="portfolio-single pt-100 pb-100">
     <div class="container">
        <div class="row">
           <div class="col-xl-8">
              <h2><?php the_title(); ?></h2>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
              <p><?php the_content(); ?></p>
              <div class="row">
                 <div class="col-xl-12">
                    <h4>project gallery</h4>
                 </div>
                 <?php
                  $gallerys = get_field('portfolio_gallery');
                  foreach ($gallerys as $gallery) {
                  ?>
                    <div class="col-xl-4">
                       <div class="project-gallery">
                          <img src="<?php echo $gallery['url']; ?>" alt="">
                       </div>
                    </div>
                 <?php
                  }
                  ?>
              </div>
              <br><br>
              <div class="row">
                 <div class="col-xl-12">
                    <h4>project overview</h4>
                    <?php the_field('project_video'); ?>
                 </div>
              </div>
           </div>
           <div class="col-xl-4">
              <div class="portfolio-sidebar">
                 <h4>Technology Used</h4>
                 <ul>
                    <?php
                     $techs = get_field('project_tech');
                     foreach ($techs as $tech) { ?>
                       <li><i class="fa fa-arrow-right"></i> <?php echo $tech['tech_name']; ?> </li>
                    <?php }
                     ?>
                 </ul>
              </div>
              <div class="portfolio-sidebar">
                 <h4>project features</h4>
                 <ul>
                    <?php
                     $features = get_field('project_features');
                     foreach ($features as $feature) { ?>
                       <li><i class="fa fa-arrow-right"></i> <?php echo $feature['feature_name']; ?> </li>
                    <?php }
                     ?>
                 </ul>
              </div>
           </div>
        </div>
     </div>
  </section>


  <?php get_footer(); ?>