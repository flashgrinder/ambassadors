<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <meta name="theme-color" content="#ffffff"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class('page bg--white'); ?>>
    
    <header class="header">
        <div class="header__outer">
            <div class="header__body container">
                <a href="<?php echo home_url(); ?>" class="header__logo">
                    <?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
                    <?php if( !empty($custom_logo__url[0])) : ?>
                        <img src="<?php echo $custom_logo__url[0]; ?>" alt="Логотип" class="header__img-logo">
                    <?php else : ?>
                        <img src="<?php echo STANDART_DIR; ?>img/logo-header.png" alt="Логотип" class="header__img-logo">
                    <?php endif; ?>
                </a>
                <div class="header__inner">
                    <div class="header__burger-menu burger-menu js-burger">
                        <span class="burger-menu__line"></span>
                    </div>
                    <div class="header__wrapper-menu js-menu">
                        <div class="header__menu">
                            <div class="header__menu-inner">
                                <?php
                                    wp_nav_menu([
                                        'theme_location'  => 'header-menu',
                                        'container'       => 'nav',
                                        'container_class' => 'menu',
                                        'menu_class'      => '',
                                        'items_wrap'      => '<ul class="%2$s menu__list header__menu-list">%3$s</ul>'
                                    ]);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="header__actions">
                        <a href="" class="header__btn button button--green button--big">
                            Присоединиться к проекту
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main class="main page__container">