<?php



function wordpressacf_setup_theme()
{
    add_theme_support('title-tag');
    load_theme_textdomain('wordpressacf', get_template_directory_uri() . '/languages');
    add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio', 'gallery'));

    // register menu:
    register_nav_menus(array(
        'primary-menu' => __('Menu Principal', 'wordpressacf')
    ));
}
add_action('after_setup_theme', 'wordpressacf_setup_theme');





function wordpressacf_assets()
{

    //CSS:

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('Magnific-Popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('Owl-Carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('Responsive-Css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all');

    // SCRIPTS:
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('imageloaded', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wordpressacf_assets');


// CUSTOM POSTS TYPE:

function wordpressacf_custom_posts()
{
    // Custom Post for Sliders:
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('Sliders', 'wordpressacf'),
            'singular_name' => __('Slides', 'wordpressacf')
        ),
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'menu_icon'  => 'dashicons-cover-image',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields',),
        'show_in_rest' => true
    ));



    // Custom Post for Services:
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'wordpressacf'),
            'singular_name' => __('Service', 'wordpressacf')
        ),
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'menu_icon'  => 'dashicons-awards',
        'supports' => array('title', 'editor', 'custom-fields',),
        'show_in_rest' => true
    ));


    // Custom Post for Counter:
    register_post_type('counters', array(
        'labels' => array(
            'name' => __('Counters', 'wordpressacf'),
            'singular_name' => __('Counter', 'wordpressacf')
        ),
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'menu_icon'  => 'dashicons-performance',
        'supports' => array('title', 'custom-fields',),
        'show_in_rest' => true
    ));


    // Custom Post for Team:
    register_post_type('teams', array(
        'labels' => array(
            'name' => __('Teams', 'wordpressacf'),
            'singular_name' => __('Team', 'wordpressacf'),
            'add_new_item'        => __('Add New Member', 'wordpressacf'),
        ),
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'menu_icon'  => 'dashicons-groups',
        'supports' => array('title', 'thumbnail', 'custom-fields',),
        'show_in_rest' => true
    ));

    // Custom Post for Testimonials:
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'wordpressacf'),
            'singular_name' => __('Testimonial', 'wordpressacf'),
            'add_new_item'        => __('Add New Testimonial', 'wordpressacf'),
        ),
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'menu_icon'  => 'dashicons-format-status',
        'supports' => array('title', 'thumbnail', 'custom-fields',),
        'show_in_rest' => true
    ));


    // Custom Post for Portfolio:
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolios', 'wordpressacf'),
            'singular_name' => __('Portfolio', 'wordpressacf'),
            'add_new_item'        => __('Add New Portfolio', 'wordpressacf'),
        ),
        'public' => true,
        'capability_type' => 'post',
        //'has_archive' => true,
        'show_ui' => true,
        'hierarchical' => false,
        'rewrite' => true,
        'menu_icon'  => 'dashicons-images-alt2',
        'supports' => array('title', 'thumbnail', 'editor', 'custom-fields'),
        //'show_in_rest' => true,
        'taxonomies' => array('portfolio-category')
    ));


    register_taxonomy('portfolio-category', 'portfolio', array(
        'labels' => array(
            'name' => __('Categories', 'wordpressacf'),
            'singular_name' => __('Category', 'wordpressacf')
        ),
        'slug' => 'portfolio-category',
        'with_front' => false,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => false
    ));
}
add_action('init', 'wordpressacf_custom_posts');




// Custom Post for Gallerys:
register_post_type('gallery', array(
    'labels' => array(
        'name' => __('Galleries', 'wordpressacf'),
        'singular_name' => __('Gallery', 'wordpressacf'),
        'add_new_item'        => __('Add New Gallery', 'wordpressacf'),
    ),
    'public' => true,
    'capability_type' => 'post',
    //'has_archive' => true,
    'show_ui' => true,
    'hierarchical' => false,
    'rewrite' => true,
    'menu_icon'  => 'dashicons-format-gallery',
    'supports' => array('title', 'thumbnail', 'custom-fields')
    //'show_in_rest' => true,
));





//FUNÇÃO PARA MUDAR COR DO FUNDO DO HEADER USANDO CSS E ACF:
function meu_acf_css()
{ ?>
    <style>
        .header-top {
            background-color: <?php the_field('header_background', 'option'); ?>;
        }
    </style>
<?php
}

add_action('wp_head', 'meu_acf_css');


// ACF OPTIONS PAGE:
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme About Settings',
        'menu_title'    => 'About',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme FAQ & Skills Settings',
        'menu_title'    => 'FAQ & Skills',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme CTA Settings',
        'menu_title'    => 'CTA',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Contact Settings',
        'menu_title'    => 'Contact',
        'parent_slug'   => 'theme-general-settings',
    ));
}

// EXCERPT LENGTH
// =========================================================================
function sp_excerpt_length($length)
{
    return 18;
}
add_filter('excerpt_length', 'sp_excerpt_length');


// =========================================================================
// REGISTER SIDEBARS:

function meu_tema_sidebar()
{
    register_sidebar(
        array(
            'name' => __('Ualzem Sidebar', 'wordpressacf'),
            'id' => 'sidebar-1',
            'description' => __('Este é o primeiro widget do site.', 'wordpressacf'),
            'before_widget' => '<div class="single-sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="primeiro-widget-title">',
            'after_title' => '</h4>'
        )
    );


    register_sidebar(
        array(
            'name' => __('Ualzem Footer Sidebar 1', 'wordpressacf'),
            'id' => 'sidebar-footer-1',
            'description' => __('Este é o primeiro widget do footer do site.', 'wordpressacf'),
            'before_widget' => '<div class="single-footer footer-logo">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="primeiro-widget-footer-title">',
            'after_title' => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Ualzem Footer Sidebar 2', 'wordpressacf'),
            'id' => 'sidebar-footer-2',
            'description' => __('Este é o segundo widget do footer do site.', 'wordpressacf'),
            'before_widget' => '<div class="single-footer">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="segundo-widget-footer-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Ualzem Footer Sidebar 3', 'wordpressacf'),
            'id' => 'sidebar-footer-3',
            'description' => __('Este é o terceiro widget do footer do site.', 'wordpressacf'),
            'before_widget' => '<div class="single-footer">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="terceiro-widget-footer-title">',
            'after_title' => '</h4>'
        )
    );
}
add_action('widgets_init', 'meu_tema_sidebar');
