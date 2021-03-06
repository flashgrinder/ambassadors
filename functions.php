<?php

    define('STANDART_DIR', get_stylesheet_directory_uri() . '/assets/');
    
    // Отключаем админбар
    if ( ! current_user_can( 'manage_options' ) ) {
        show_admin_bar( false );
    }

    /* Actions */
    include_once(__DIR__ . '/inc/actions.php');
    /* Filters */
    include_once(__DIR__ . '/inc/filters.php');
    /* Ajax search */
    include_once(__DIR__ . '/inc/ajax-search.php');
    /* Custom_functions */
    include_once(__DIR__ . '/inc/custom_functions.php');
    /* Loadmore btn */
    include_once(__DIR__ . '/inc/loadmore_btn.php');
    /* Post Type Ambassadors */
    include_once(__DIR__ . '/inc/post-type_ambassadors.php');
    /* Taxanomies Cats Page */
    include_once(__DIR__ . '/inc/taxanomies_regions.php');