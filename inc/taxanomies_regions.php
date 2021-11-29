<?php

    add_action('init', function(){ 

        register_taxonomy('regions', ['ambassadors'], [
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => [
                'name'              => 'Название Региона',
                'singular_name'     => 'Регион',
                'search_items'      => 'Найти Регион',
                'all_items'         => 'Все Регионы',
                'view_item '        => 'Смотреть Регион',
                'parent_item'       => 'Родитель Регионы',
                'parent_item_colon' => 'Родитель Региона:',
                'edit_item'         => 'Редактировать Регион',
                'update_item'       => 'Обновить Регион',
                'add_new_item'      => 'Добавить новый Регион',
                'new_item_name'     => 'Новое имя Региона',
                'menu_name'         => 'Регионы',
            ],
            'description'           => '', // описание таксономии
            'public'                => true,
            'show_in_nav_menus'     => false, // равен аргументу public
            'show_ui'               => true, // равен аргументу public
            'show_in_menu'          => true, // равен аргументу show_ui
            'show_tagcloud'         => false, // равен аргументу show_ui
            'hierarchical'          => true,
            'query_var'             => true,
            'show_in_rest'         => true
         ] );
         
    });