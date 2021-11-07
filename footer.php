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
                    Амбассадоры целей устойчивого развития 2021
                </p>
            </div>
        </div>
    </footer>
    <!-- /. Footer -->
    <?php wp_footer(); ?>
</body>
</html>