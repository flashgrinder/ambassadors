<?php
    
    /* Убираем тег <p></p> у отрывков */
    remove_filter( 'the_excerpt','wpautop');

    // Длина отрывков постов
    add_filter( 'excerpt_length', function($number) {
        return 18;
    });

    // Окончание отрывков постов
    add_filter( 'excerpt_more', function($more_string){
        return '...';
    });

    // Добавляет класс пунктам меню в шапке
    add_filter( 'nav_menu_css_class', function($classes, $item, $args, $depth) {
            
        if($args->theme_location === 'header-menu') {
            $classes[] = 'menu__item header__menu-item';
        }
        
        return $classes;

    }, 10, 4 );

    // Добавляет класс пунктам меню в подвале
    add_filter( 'nav_menu_css_class', function($classes, $item, $args, $depth) {
        
        if($args->theme_location === 'footer-menu') {
            $classes[] = 'menu__item footer__menu-item';
        }
        
        return $classes;

    }, 10, 4 );

    // Добавляет класс ссылкам меню в шапке
    add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {
        
        if($args->theme_location === 'header-menu') {
            $atts['class'] = 'menu__link header__menu-link';
        }
        
        return $atts;

    }, 10, 3);

    // Добавляет класс ссылкам меню в подвале
    add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {
        
        if($args->theme_location === 'footer-menu') {
            $atts['class'] = 'menu__link footer__menu-link';
        }
        
        return $atts;

    }, 10, 3);

    add_filter( 'nav_menu_submenu_css_class', function() {

        $classes[] = 'menu__sub-menu';

        return $classes;

    }, 10, 3 );

    // создаем новую колонку
    add_filter( 'manage_'.'post'.'_posts_columns', 'add_views_column', 4 );
    function add_views_column( $columns ){
        $num = 2; // после какой по счету колонки вставлять новые

        $new_columns = array(
            'views' => 'Визиты',
        );

        return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
    }