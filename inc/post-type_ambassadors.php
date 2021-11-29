<?php

    add_action('init', function(){ 
        register_post_type('ambassadors', [
            'labels' => [
                'name'               => 'Амбассадоры',
                'singular_name'      => 'Амбассадоры',
                'add_new'            => 'Добавить нового амбассадора',
                'add_new_item'       => 'Добавить нового амбассадора',
                'edit_item'          => 'Редактировать амбассадора',
                'new_item'           => 'Новый амбассадор',
                'view_item'          => 'Посмотреть амбассадора',
                'search_items'       => 'Найти амбассадора',
                'not_found'          => 'Амбассадоров не найдено',
                'not_found_in_trash' => 'В корзине не найдено амбоссадора',
                'parent_item_colon'  => '',
                'menu_name'          => 'Амбассадоры'
            ],
            'public'             => true,
            'show_ui'            => true,
            'show_in_rest'       => true,
            'menu_position'      => 4,
            'menu_icon'          => 'dashicons-money',
            'supports'           => ['title','editor','thumbnail','author','custom-fields','revisions', 'excerpt'],
            'has_archive'        => false,
            'taxonomies'          => ['regions'],
            'hierarchical'        => false,
            'rewrite'             => array('slug' => 'ambassadors', 'with_front' => false),
            'query_var'           => true
        ]);
    
    });