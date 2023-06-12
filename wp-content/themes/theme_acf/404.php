<?php



get_header();

?>




<?php get_template_part('inc/breadcump'); ?>



<section class="blog-area pb-100 pt-100" id="404-page">
    <div class="container">
        <div class="row">


            <div class="col-12 title-sugestions">
                <h3>Algumas Sugestões:</h3>
            </div>

            <div class="col-12 sugestions-area">

                <div class="col-lg-6 col-12 sugestions-pages">

                    <?php
                    the_widget(
                        'WP_Widget_Pages',
                        array(
                            'title' => 'Páginas do Site:',
                            'number' => -1
                        )
                    ); ?>
                </div>

                <div class="col-lg-6 col-12 sugestions-pages">

                    <?php
                    the_widget(
                        'WP_Widget_Recent_Posts',
                        array(
                            'title' => 'Posts Recentes:',
                            'number' => 3
                        )
                    ); ?>
                </div>
            </div>







        </div>
    </div>
</section>



<?php get_footer(); ?>