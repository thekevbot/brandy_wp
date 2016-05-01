<?php

    // Registering Menus
     add_action('init', 'register_my_menus');
        function register_my_menus()
        {
            register_nav_menus(
                array(
                    // THESE CAN BE CUSTOMIZED (FOR DEFINING MENUBAR LOCATIONS)
                    'menu-left' => __('Menu Left'),
                    'menu-right' => __('Menu Right'),
                )
            );
        }
    function my_wp_nav_menu_args($args = '')
    {
        $args['container'] = false;

        return $args;
    }
    add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args');

    // ADD ACTIVE CLASS TO ACTIVE PAGE
    add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

    function special_nav_class($classes, $item)
    {
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active ';
        }
        return $classes;
    }

    //Add Featured Image Support
    add_theme_support( 'post-thumbnails' );

    //Add Options Page
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
    }
?>
