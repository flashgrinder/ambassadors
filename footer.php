    </main>
    <!-- /. MAIN -->

    <!-- Footer -->
    <footer class="footer bg--black-hight">
        <div class="footer__body container">
            <div class="footer__inner">
                <div class="footer__column footer__column--nav">
                    <h3 class="footer__title-col title title--medium title--black title--w-medium">
                        Главная
                    </h3>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu-1',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu-nav menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s menu__list footer__menu-list">%3$s</ul>'
                        ]);
                    ?>
                </div>
                <div class="footer__column footer__column--nav">
                    <h3 class="footer__title-col title title--medium title--black title--w-medium">
                        Новости
                    </h3>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu-2',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu-nav menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s menu__list footer__menu-list">%3$s</ul>'
                        ]);
                    ?>
                </div>
                <div class="footer__column footer__column--nav">
                    <h3 class="footer__title-col title title--medium title--black title--w-medium">
                        Поиск
                    </h3>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu-3',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu-nav menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s menu__list footer__menu-list">%3$s</ul>'
                        ]);
                    ?>
                    <h3 class="footer__title-col title title--medium title--black title--w-medium">
                        Медиa
                    </h3>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu-4',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu-nav menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s menu__list footer__menu-list">%3$s</ul>'
                        ]);
                    ?>
                </div>
                <a href="./" class="footer__logo">
                    <img src="<?php echo STANDART_DIR; ?>img/logo-footer.png" alt="" class="footer__img-logo">
                </a>
            </div>
            <div class="footer__reserved center">
                <p class="footer__text title title--tiny title--dark-gray title--w-light">
                    Все права защищены ©
                </p>
                <p class="footer__text title title--tiny title--black title--w-regular">
                    Амбассадоры целей устойчивого развития <?php echo date('Y'); ?>
                </p>
            </div>
        </div>
    </footer>
    <!-- /. Footer -->

    <div class="devsite">
        <div class="devsite__outer">
            <a href="https://fcdigital.ru" class="devsite__link">
                <div class="devsite__text">
                    Разработка и дизайн сайта Fincom Digital
                </div>
                <div class="devsite__logo">
                    <svg class="devsite__logo-img" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5011 21.5088V44.0319L10.9922 32.7703L20.3166 23.6463L22.5011 21.5088Z" fill="#121212"/>
                        <path d="M27.791 38.8534V5.17578L44.9998 22.0146L27.791 38.8534Z" fill="#121212"/>
                        <path d="M22.5014 0V15.2512L7.79316 29.6403L0 22.0147L20.3169 2.13755L22.5014 0Z" fill="#121212"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>
</html>