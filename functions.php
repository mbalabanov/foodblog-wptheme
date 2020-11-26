
<?php 

    /* Register JQuery and Bootstrap */ 
    function custom_wp_theme_files(){
        wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js', array(),'1.0', true);
        wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array(),'1.0', true);
        wp_enqueue_style('my-style-sheet', get_template_directory_uri().'/style.css');
    }
    add_action('wp_enqueue_scripts', 'custom_wp_theme_files');

    /* Register navwalker navigation bar */
    function register_navwalker(){
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
        register_nav_menus( array(
            'primary' => __( 'Top-Menu'),
        ) );
    }
    add_action( 'after_setup_theme', 'register_navwalker' );

    /* Define the number of words to be displayed for each post in the list */

    function set_excerpt_length(){
        return 45;
    }
    add_filter('excerpt_length','set_excerpt_length');

    add_theme_support('post-thumbnails');

    /* Register Widgets for the Sidebar */
    function wpb_init_widgets(){
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="sidebar-module">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
             ));
     }
     add_action('widgets_init', 'wpb_init_widgets');
?>