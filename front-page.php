<?php /* Template Name: Домашняя страница */?>
<?php get_header(); ?>

<!-- Slider -->
<section class="slider bg--white block-padding">
    <div class="slider__body container">
        <div class="slider__swiper swiper-container">
            <div class="slider__swiper-wrapper swiper-wrapper">
                <div class="slider__swiper-slide swiper-slide">
                    <!-- Text-block -->
                    <div class="text-block">
                        <div class="text-block__info">
                            <div class="text-block__descr">
                                <h3 class="text-block__title title title--big title--black title--w-extrabold title--uppercase">
                                    Какой-то Конкурс 1
                                </h3>
                                <div class="text-block__text text text--large text--dark-gray text--w-light">
                                    Проект «Амбассадоры устойчивого развития» создан для популяризации целей устойчивого развития (ЦУР) в Российской Федерации через создание платформы, объединяющей успешные региональные практики реализации ЦУР в сфере бизнеса, социального предпринимательства, образования, общественных объединений и волонтёрства, а так же формирование позитивного имиджа региона на федеральном уровне, повышение привлекательности регионов для молодежи
                                </div>
                            </div>
                            <div class="text-block__actions">
                                <a href="javascript:;" class="text-block__btn button button--green">
                                    Принять участие
                                </a>
                            </div>
                        </div>
                        <div class="text-block__pic">
                            <img src="<?php echo STANDART_DIR; ?>img/uploads/slider-img-1.jpg" alt="" class="text-block__img">
                        </div>
                    </div>
                    <!-- /. Text-block -->
                </div>
                <div class="slider__swiper-slide swiper-slide">
                    <!-- Text-block -->
                    <div class="text-block">
                        <div class="text-block__info">
                            <div class="text-block__descr">
                                <h3 class="text-block__title title title--big title--black title--w-extrabold title--uppercase">
                                    Какой-то Конкурс 2
                                </h3>
                                <div class="text-block__text text text--large text--dark-gray text--w-light">
                                    Проект «Амбассадоры устойчивого развития» создан для популяризации целей устойчивого развития (ЦУР) в Российской Федерации через создание платформы, объединяющей успешные региональные практики реализации ЦУР в сфере бизнеса, социального предпринимательства, образования, общественных объединений и волонтёрства, а так же формирование позитивного имиджа региона на федеральном уровне, повышение привлекательности регионов для молодежи
                                </div>
                            </div>
                            <div class="text-block__actions">
                                <a href="javascript:;" class="text-block__btn button button--green">
                                    Принять участие
                                </a>
                            </div>
                        </div>
                        <div class="text-block__pic">
                            <img src="<?php echo STANDART_DIR; ?>img/uploads/slider-img-2.jpg" alt="" class="text-block__img">
                        </div>
                    </div>
                    <!-- /. Text-block -->
                </div>
                <div class="slider__swiper-slide swiper-slide">
                    <!-- Text-block -->
                    <div class="text-block">
                        <div class="text-block__info">
                            <div class="text-block__descr">
                                <h3 class="text-block__title title title--big title--black title--w-extrabold title--uppercase">
                                    Какой-то Конкурс 3
                                </h3>
                                <div class="text-block__text text text--large text--dark-gray text--w-light">
                                    Проект «Амбассадоры устойчивого развития» создан для популяризации целей устойчивого развития (ЦУР) в Российской Федерации через создание платформы, объединяющей успешные региональные практики реализации ЦУР в сфере бизнеса, социального предпринимательства, образования, общественных объединений и волонтёрства, а так же формирование позитивного имиджа региона на федеральном уровне, повышение привлекательности регионов для молодежи
                                </div>
                            </div>
                            <div class="text-block__actions">
                                <a href="javascript:;" class="text-block__btn button button--green">
                                    Принять участие
                                </a>
                            </div>
                        </div>
                        <div class="text-block__pic">
                            <img src="<?php echo STANDART_DIR; ?>img/uploads/slider-img-3.jpg" alt="" class="text-block__img">
                        </div>
                    </div>
                    <!-- /. Text-block -->
                </div>
            </div>
        </div>
        <div class="slider__pagination swiper-pagination"></div>
        <div class="slider__navigation">
            <div class="slider__arrow slider__arrow--prev">
                <svg class="slider__arrow-svg" width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1L1.68167 7.50518C0.786641 8.30076 0.786641 9.69924 1.68167 10.4948L9 17" stroke="#1EBC7F" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="slider__arrow slider__arrow--next">
                <svg class="slider__arrow-svg" width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 17L8.31833 10.4948C9.21336 9.69924 9.21336 8.30076 8.31833 7.50518L1 0.999999" stroke="#1EBC7F" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
        </div>
    </div>
</section>
<!-- /. Slider -->

<!-- Team -->
<section class="team bg--white block-padding">
    <div class="team__body container">
        <h2 class="team__heading title title--large title--black title--w-bold title--uppercase title--indent">
            Команда
        </h2>
        <div class="team__items">
            <!-- Team-card -->
            <article class="team-card">
                <aside class="team-card__aside">
                    <figure class="team-card__figure">
                        <img src="<?php echo STANDART_DIR; ?>img/team-card/team-img-1.jpg" alt="" class="team-card__photo">
                    </figure>
                </aside>
                <div class="team-card__body">
                    <div class="team-card__text">
                        <h3 class="team-card__heading text text--normal text--black text--w-regular">
                            Анна Кровякова
                        </h3>
                        <p class="team-card__descr text text--normal text--dark-gray text--w-light">
                            Руководитель проекта “Амбассадоры устойчивого развития”, основатель и президент «Фонда регионального экономического развития «Инвестиции и регионы», управляющий партнер FINCOM group
                        </p>
                    </div>
                    <div class="team-card__actions">
                        <div class="team-card__social">
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M23.2937 13.8333C23.8785 13.8333 24.3525 13.3593 24.3525 12.7745C24.3525 12.1897 23.8785 11.7157 23.2937 11.7157C22.7089 11.7157 22.2349 12.1897 22.2349 12.7745C22.2349 13.3593 22.7089 13.8333 23.2937 13.8333Z" fill="white"/>
                                    <path d="M21.573 18.069C21.573 20.0426 19.9731 21.6426 17.9995 21.6426C16.0258 21.6426 14.4259 20.0426 14.4259 18.069C14.4259 16.0954 16.0258 14.4955 17.9995 14.4955C19.9731 14.4955 21.573 16.0954 21.573 18.069Z" stroke="white" stroke-width="1.32353" stroke-miterlimit="10"/>
                                    <path d="M14.5974 27.0983C11.4738 27.0983 8.9707 24.6548 8.9707 21.6761V14.4615C8.9707 11.4829 11.4737 9.03943 14.5974 9.03943H21.4029C24.5265 9.03943 27.0295 11.4829 27.0295 14.4615V21.6761C27.0295 24.6548 24.5265 27.0983 21.4029 27.0983H14.5974Z" stroke="white" stroke-miterlimit="10"/>
                                </svg>
                            </a>
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-img" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M27.5295 11.7199C27.5295 10.0483 26.0223 8.53943 24.3507 8.53943H11.6464C9.97874 8.53943 8.4707 10.0483 8.4707 11.7199V24.4194C8.4707 26.0926 9.97874 27.5983 11.6464 27.5983H18.0001V20.398H15.6725V17.2231H18.0001V15.9843C18.0001 13.8521 19.6026 11.9287 21.5736 11.9287H24.1418V15.1076H21.5736C21.2941 15.1076 20.963 15.4467 20.963 15.9581V17.2239H24.1426V20.3988H20.963V27.5983H24.3507C26.0223 27.5983 27.5295 26.0926 27.5295 24.4194V11.7199V11.7199Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <!-- /. Team-card -->
            <!-- Team-card -->
            <article class="team-card">
                <aside class="team-card__aside">
                    <figure class="team-card__figure">
                        <img src="<?php echo STANDART_DIR; ?>img/team-card/team-img-2.jpg" alt="" class="team-card__photo">
                    </figure>
                </aside>
                <div class="team-card__body">
                    <div class="team-card__text">
                        <h3 class="team-card__heading text text--normal text--black text--w-regular">
                            Ольга Гайдукова
                        </h3>
                        <p class="team-card__descr text text--normal text--dark-gray text--w-light">
                            Исполнительный директор “Фонда регионального развития “Инвестиции и регионы”, переводчик, специалист по российско-германским отношениям, исследователь опыта реализации ЦУР в Германии
                        </p>
                    </div>
                    <div class="team-card__actions">
                        <div class="team-card__social">
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M23.2937 13.8333C23.8785 13.8333 24.3525 13.3593 24.3525 12.7745C24.3525 12.1897 23.8785 11.7157 23.2937 11.7157C22.7089 11.7157 22.2349 12.1897 22.2349 12.7745C22.2349 13.3593 22.7089 13.8333 23.2937 13.8333Z" fill="white"/>
                                    <path d="M21.573 18.069C21.573 20.0426 19.9731 21.6426 17.9995 21.6426C16.0258 21.6426 14.4259 20.0426 14.4259 18.069C14.4259 16.0954 16.0258 14.4955 17.9995 14.4955C19.9731 14.4955 21.573 16.0954 21.573 18.069Z" stroke="white" stroke-width="1.32353" stroke-miterlimit="10"/>
                                    <path d="M14.5974 27.0983C11.4738 27.0983 8.9707 24.6548 8.9707 21.6761V14.4615C8.9707 11.4829 11.4737 9.03943 14.5974 9.03943H21.4029C24.5265 9.03943 27.0295 11.4829 27.0295 14.4615V21.6761C27.0295 24.6548 24.5265 27.0983 21.4029 27.0983H14.5974Z" stroke="white" stroke-miterlimit="10"/>
                                </svg>
                            </a>
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-img" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M27.5295 11.7199C27.5295 10.0483 26.0223 8.53943 24.3507 8.53943H11.6464C9.97874 8.53943 8.4707 10.0483 8.4707 11.7199V24.4194C8.4707 26.0926 9.97874 27.5983 11.6464 27.5983H18.0001V20.398H15.6725V17.2231H18.0001V15.9843C18.0001 13.8521 19.6026 11.9287 21.5736 11.9287H24.1418V15.1076H21.5736C21.2941 15.1076 20.963 15.4467 20.963 15.9581V17.2239H24.1426V20.3988H20.963V27.5983H24.3507C26.0223 27.5983 27.5295 26.0926 27.5295 24.4194V11.7199V11.7199Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <!-- /. Team-card -->
            <!-- Team-card -->
            <article class="team-card">
                <aside class="team-card__aside">
                    <figure class="team-card__figure">
                        <img src="<?php echo STANDART_DIR; ?>img/team-card/team-img-3.jpg" alt="" class="team-card__photo">
                    </figure>
                </aside>
                <div class="team-card__body">
                    <div class="team-card__text">
                        <h3 class="team-card__heading text text--normal text--black text--w-regular">
                            Юлия Агальцова
                        </h3>
                        <p class="team-card__descr text text--normal text--dark-gray text--w-light">
                            Директор по стратегическому маркетингу и PR “Фонда регионального развития “Инвестиции и регионы”
                        </p>
                    </div>
                    <div class="team-card__actions">
                        <div class="team-card__social">
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M23.2937 13.8333C23.8785 13.8333 24.3525 13.3593 24.3525 12.7745C24.3525 12.1897 23.8785 11.7157 23.2937 11.7157C22.7089 11.7157 22.2349 12.1897 22.2349 12.7745C22.2349 13.3593 22.7089 13.8333 23.2937 13.8333Z" fill="white"/>
                                    <path d="M21.573 18.069C21.573 20.0426 19.9731 21.6426 17.9995 21.6426C16.0258 21.6426 14.4259 20.0426 14.4259 18.069C14.4259 16.0954 16.0258 14.4955 17.9995 14.4955C19.9731 14.4955 21.573 16.0954 21.573 18.069Z" stroke="white" stroke-width="1.32353" stroke-miterlimit="10"/>
                                    <path d="M14.5974 27.0983C11.4738 27.0983 8.9707 24.6548 8.9707 21.6761V14.4615C8.9707 11.4829 11.4737 9.03943 14.5974 9.03943H21.4029C24.5265 9.03943 27.0295 11.4829 27.0295 14.4615V21.6761C27.0295 24.6548 24.5265 27.0983 21.4029 27.0983H14.5974Z" stroke="white" stroke-miterlimit="10"/>
                                </svg>
                            </a>
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-img" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M27.5295 11.7199C27.5295 10.0483 26.0223 8.53943 24.3507 8.53943H11.6464C9.97874 8.53943 8.4707 10.0483 8.4707 11.7199V24.4194C8.4707 26.0926 9.97874 27.5983 11.6464 27.5983H18.0001V20.398H15.6725V17.2231H18.0001V15.9843C18.0001 13.8521 19.6026 11.9287 21.5736 11.9287H24.1418V15.1076H21.5736C21.2941 15.1076 20.963 15.4467 20.963 15.9581V17.2239H24.1426V20.3988H20.963V27.5983H24.3507C26.0223 27.5983 27.5295 26.0926 27.5295 24.4194V11.7199V11.7199Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <!-- /. Team-card -->
            <!-- Team-card -->
            <article class="team-card">
                <aside class="team-card__aside">
                    <figure class="team-card__figure">
                        <img src="<?php echo STANDART_DIR; ?>img/team-card/team-img-4.jpg" alt="" class="team-card__photo">
                    </figure>
                </aside>
                <div class="team-card__body">
                    <div class="team-card__text">
                        <h3 class="team-card__heading text text--normal text--black text--w-regular">
                            Диана Миниханова
                        </h3>
                        <p class="team-card__descr text text--normal text--dark-gray text--w-light">
                            Руководитель проекта ECOfriends, специалист по раздельному сбору отходов, практикующий спикер экопросветительских проектов
                        </p>
                    </div>
                    <div class="team-card__actions">
                        <div class="team-card__social">
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M23.2937 13.8333C23.8785 13.8333 24.3525 13.3593 24.3525 12.7745C24.3525 12.1897 23.8785 11.7157 23.2937 11.7157C22.7089 11.7157 22.2349 12.1897 22.2349 12.7745C22.2349 13.3593 22.7089 13.8333 23.2937 13.8333Z" fill="white"/>
                                    <path d="M21.573 18.069C21.573 20.0426 19.9731 21.6426 17.9995 21.6426C16.0258 21.6426 14.4259 20.0426 14.4259 18.069C14.4259 16.0954 16.0258 14.4955 17.9995 14.4955C19.9731 14.4955 21.573 16.0954 21.573 18.069Z" stroke="white" stroke-width="1.32353" stroke-miterlimit="10"/>
                                    <path d="M14.5974 27.0983C11.4738 27.0983 8.9707 24.6548 8.9707 21.6761V14.4615C8.9707 11.4829 11.4737 9.03943 14.5974 9.03943H21.4029C24.5265 9.03943 27.0295 11.4829 27.0295 14.4615V21.6761C27.0295 24.6548 24.5265 27.0983 21.4029 27.0983H14.5974Z" stroke="white" stroke-miterlimit="10"/>
                                </svg>
                            </a>
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-img" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M27.5295 11.7199C27.5295 10.0483 26.0223 8.53943 24.3507 8.53943H11.6464C9.97874 8.53943 8.4707 10.0483 8.4707 11.7199V24.4194C8.4707 26.0926 9.97874 27.5983 11.6464 27.5983H18.0001V20.398H15.6725V17.2231H18.0001V15.9843C18.0001 13.8521 19.6026 11.9287 21.5736 11.9287H24.1418V15.1076H21.5736C21.2941 15.1076 20.963 15.4467 20.963 15.9581V17.2239H24.1426V20.3988H20.963V27.5983H24.3507C26.0223 27.5983 27.5295 26.0926 27.5295 24.4194V11.7199V11.7199Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <!-- /. Team-card -->
            <!-- Team-card -->
            <article class="team-card">
                <aside class="team-card__aside">
                    <figure class="team-card__figure">
                        <img src="<?php echo STANDART_DIR; ?>img/team-card/team-img-5.jpg" alt="" class="team-card__photo">
                    </figure>
                </aside>
                <div class="team-card__body">
                    <div class="team-card__text">
                        <h3 class="team-card__heading text text--normal text--black text--w-regular">
                            Наталья Шумкаева
                        </h3>
                        <p class="team-card__descr text text--normal text--dark-gray text--w-light">
                            Специалист по связям с общественностью, менеджер проекта ECOfriends
                        </p>
                    </div>
                    <div class="team-card__actions">
                        <div class="team-card__social">
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M23.2937 13.8333C23.8785 13.8333 24.3525 13.3593 24.3525 12.7745C24.3525 12.1897 23.8785 11.7157 23.2937 11.7157C22.7089 11.7157 22.2349 12.1897 22.2349 12.7745C22.2349 13.3593 22.7089 13.8333 23.2937 13.8333Z" fill="white"/>
                                    <path d="M21.573 18.069C21.573 20.0426 19.9731 21.6426 17.9995 21.6426C16.0258 21.6426 14.4259 20.0426 14.4259 18.069C14.4259 16.0954 16.0258 14.4955 17.9995 14.4955C19.9731 14.4955 21.573 16.0954 21.573 18.069Z" stroke="white" stroke-width="1.32353" stroke-miterlimit="10"/>
                                    <path d="M14.5974 27.0983C11.4738 27.0983 8.9707 24.6548 8.9707 21.6761V14.4615C8.9707 11.4829 11.4737 9.03943 14.5974 9.03943H21.4029C24.5265 9.03943 27.0295 11.4829 27.0295 14.4615V21.6761C27.0295 24.6548 24.5265 27.0983 21.4029 27.0983H14.5974Z" stroke="white" stroke-miterlimit="10"/>
                                </svg>
                            </a>
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-img" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M27.5295 11.7199C27.5295 10.0483 26.0223 8.53943 24.3507 8.53943H11.6464C9.97874 8.53943 8.4707 10.0483 8.4707 11.7199V24.4194C8.4707 26.0926 9.97874 27.5983 11.6464 27.5983H18.0001V20.398H15.6725V17.2231H18.0001V15.9843C18.0001 13.8521 19.6026 11.9287 21.5736 11.9287H24.1418V15.1076H21.5736C21.2941 15.1076 20.963 15.4467 20.963 15.9581V17.2239H24.1426V20.3988H20.963V27.5983H24.3507C26.0223 27.5983 27.5295 26.0926 27.5295 24.4194V11.7199V11.7199Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <!-- /. Team-card -->
            <!-- Team-card -->
            <article class="team-card">
                <aside class="team-card__aside">
                    <figure class="team-card__figure">
                        <img src="<?php echo STANDART_DIR; ?>img/team-card/team-img-6.jpg" alt="" class="team-card__photo">
                    </figure>
                </aside>
                <div class="team-card__body">
                    <div class="team-card__text">
                        <h3 class="team-card__heading text text--normal text--black text--w-regular">
                            Полина Кровякова
                        </h3>
                        <p class="team-card__descr text text--normal text--dark-gray text--w-light">
                            Специалист по связям с общественностью, менеджер проекта ECOfriends
                        </p>
                    </div>
                    <div class="team-card__actions">
                        <div class="team-card__social">
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M23.2937 13.8333C23.8785 13.8333 24.3525 13.3593 24.3525 12.7745C24.3525 12.1897 23.8785 11.7157 23.2937 11.7157C22.7089 11.7157 22.2349 12.1897 22.2349 12.7745C22.2349 13.3593 22.7089 13.8333 23.2937 13.8333Z" fill="white"/>
                                    <path d="M21.573 18.069C21.573 20.0426 19.9731 21.6426 17.9995 21.6426C16.0258 21.6426 14.4259 20.0426 14.4259 18.069C14.4259 16.0954 16.0258 14.4955 17.9995 14.4955C19.9731 14.4955 21.573 16.0954 21.573 18.069Z" stroke="white" stroke-width="1.32353" stroke-miterlimit="10"/>
                                    <path d="M14.5974 27.0983C11.4738 27.0983 8.9707 24.6548 8.9707 21.6761V14.4615C8.9707 11.4829 11.4737 9.03943 14.5974 9.03943H21.4029C24.5265 9.03943 27.0295 11.4829 27.0295 14.4615V21.6761C27.0295 24.6548 24.5265 27.0983 21.4029 27.0983H14.5974Z" stroke="white" stroke-miterlimit="10"/>
                                </svg>
                            </a>
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-img" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M27.5295 11.7199C27.5295 10.0483 26.0223 8.53943 24.3507 8.53943H11.6464C9.97874 8.53943 8.4707 10.0483 8.4707 11.7199V24.4194C8.4707 26.0926 9.97874 27.5983 11.6464 27.5983H18.0001V20.398H15.6725V17.2231H18.0001V15.9843C18.0001 13.8521 19.6026 11.9287 21.5736 11.9287H24.1418V15.1076H21.5736C21.2941 15.1076 20.963 15.4467 20.963 15.9581V17.2239H24.1426V20.3988H20.963V27.5983H24.3507C26.0223 27.5983 27.5295 26.0926 27.5295 24.4194V11.7199V11.7199Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <!-- /. Team-card -->
            <!-- Team-card -->
            <article class="team-card">
                <aside class="team-card__aside">
                    <figure class="team-card__figure">
                        <img src="<?php echo STANDART_DIR; ?>img/team-card/team-img-7.jpg" alt="" class="team-card__photo">
                    </figure>
                </aside>
                <div class="team-card__body">
                    <div class="team-card__text">
                        <h3 class="team-card__heading text text--normal text--black text--w-regular">
                            Ольга Деушева
                        </h3>
                        <p class="team-card__descr text text--normal text--dark-gray text--w-light">
                            Специалист по связям с общественностью, менеджер проекта ECOfriends
                        </p>
                    </div>
                    <div class="team-card__actions">
                        <div class="team-card__social">
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M23.2937 13.8333C23.8785 13.8333 24.3525 13.3593 24.3525 12.7745C24.3525 12.1897 23.8785 11.7157 23.2937 11.7157C22.7089 11.7157 22.2349 12.1897 22.2349 12.7745C22.2349 13.3593 22.7089 13.8333 23.2937 13.8333Z" fill="white"/>
                                    <path d="M21.573 18.069C21.573 20.0426 19.9731 21.6426 17.9995 21.6426C16.0258 21.6426 14.4259 20.0426 14.4259 18.069C14.4259 16.0954 16.0258 14.4955 17.9995 14.4955C19.9731 14.4955 21.573 16.0954 21.573 18.069Z" stroke="white" stroke-width="1.32353" stroke-miterlimit="10"/>
                                    <path d="M14.5974 27.0983C11.4738 27.0983 8.9707 24.6548 8.9707 21.6761V14.4615C8.9707 11.4829 11.4737 9.03943 14.5974 9.03943H21.4029C24.5265 9.03943 27.0295 11.4829 27.0295 14.4615V21.6761C27.0295 24.6548 24.5265 27.0983 21.4029 27.0983H14.5974Z" stroke="white" stroke-miterlimit="10"/>
                                </svg>
                            </a>
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-img" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M27.5295 11.7199C27.5295 10.0483 26.0223 8.53943 24.3507 8.53943H11.6464C9.97874 8.53943 8.4707 10.0483 8.4707 11.7199V24.4194C8.4707 26.0926 9.97874 27.5983 11.6464 27.5983H18.0001V20.398H15.6725V17.2231H18.0001V15.9843C18.0001 13.8521 19.6026 11.9287 21.5736 11.9287H24.1418V15.1076H21.5736C21.2941 15.1076 20.963 15.4467 20.963 15.9581V17.2239H24.1426V20.3988H20.963V27.5983H24.3507C26.0223 27.5983 27.5295 26.0926 27.5295 24.4194V11.7199V11.7199Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <!-- /. Team-card -->
            <!-- Team-card -->
            <article class="team-card">
                <aside class="team-card__aside">
                    <figure class="team-card__figure">
                        <img src="<?php echo STANDART_DIR; ?>img/team-card/team-img-8.jpg" alt="" class="team-card__photo">
                    </figure>
                </aside>
                <div class="team-card__body">
                    <div class="team-card__text">
                        <h3 class="team-card__heading text text--normal text--black text--w-regular">
                            Тимофей Кровяков
                        </h3>
                        <p class="team-card__descr text text--normal text--dark-gray text--w-light">
                            Менеджер проекта
                        </p>
                    </div>
                    <div class="team-card__actions">
                        <div class="team-card__social">
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M23.2937 13.8333C23.8785 13.8333 24.3525 13.3593 24.3525 12.7745C24.3525 12.1897 23.8785 11.7157 23.2937 11.7157C22.7089 11.7157 22.2349 12.1897 22.2349 12.7745C22.2349 13.3593 22.7089 13.8333 23.2937 13.8333Z" fill="white"/>
                                    <path d="M21.573 18.069C21.573 20.0426 19.9731 21.6426 17.9995 21.6426C16.0258 21.6426 14.4259 20.0426 14.4259 18.069C14.4259 16.0954 16.0258 14.4955 17.9995 14.4955C19.9731 14.4955 21.573 16.0954 21.573 18.069Z" stroke="white" stroke-width="1.32353" stroke-miterlimit="10"/>
                                    <path d="M14.5974 27.0983C11.4738 27.0983 8.9707 24.6548 8.9707 21.6761V14.4615C8.9707 11.4829 11.4737 9.03943 14.5974 9.03943H21.4029C24.5265 9.03943 27.0295 11.4829 27.0295 14.4615V21.6761C27.0295 24.6548 24.5265 27.0983 21.4029 27.0983H14.5974Z" stroke="white" stroke-miterlimit="10"/>
                                </svg>
                            </a>
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-img" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M27.5295 11.7199C27.5295 10.0483 26.0223 8.53943 24.3507 8.53943H11.6464C9.97874 8.53943 8.4707 10.0483 8.4707 11.7199V24.4194C8.4707 26.0926 9.97874 27.5983 11.6464 27.5983H18.0001V20.398H15.6725V17.2231H18.0001V15.9843C18.0001 13.8521 19.6026 11.9287 21.5736 11.9287H24.1418V15.1076H21.5736C21.2941 15.1076 20.963 15.4467 20.963 15.9581V17.2239H24.1426V20.3988H20.963V27.5983H24.3507C26.0223 27.5983 27.5295 26.0926 27.5295 24.4194V11.7199V11.7199Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <!-- /. Team-card -->
        </div>
    </div>
</section>
<!-- /. Team -->

<!-- Team -->
<section class="team bg--white block-padding">
    <div class="team__body container">
        <h2 class="team__heading title title--large title--black title--w-bold title--uppercase title--indent">
            Эксперты
        </h2>
        <div class="team__items">
            <!-- Team-card -->
            <article class="team-card">
                <aside class="team-card__aside">
                    <figure class="team-card__figure">
                        <img src="<?php echo STANDART_DIR; ?>img/team-card/team-expert-1.jpg" alt="" class="team-card__photo">
                    </figure>
                </aside>
                <div class="team-card__body">
                    <div class="team-card__text">
                        <h3 class="team-card__heading text text--normal text--black text--w-regular">
                            Фаисс Штефан
                        </h3>
                        <p class="team-card__descr text text--normal text--dark-gray text--w-light">
                            Независимый доцент, ФРГ
                        </p>
                    </div>
                    <div class="team-card__actions">
                        <div class="team-card__social">
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M23.2937 13.8333C23.8785 13.8333 24.3525 13.3593 24.3525 12.7745C24.3525 12.1897 23.8785 11.7157 23.2937 11.7157C22.7089 11.7157 22.2349 12.1897 22.2349 12.7745C22.2349 13.3593 22.7089 13.8333 23.2937 13.8333Z" fill="white"/>
                                    <path d="M21.573 18.069C21.573 20.0426 19.9731 21.6426 17.9995 21.6426C16.0258 21.6426 14.4259 20.0426 14.4259 18.069C14.4259 16.0954 16.0258 14.4955 17.9995 14.4955C19.9731 14.4955 21.573 16.0954 21.573 18.069Z" stroke="white" stroke-width="1.32353" stroke-miterlimit="10"/>
                                    <path d="M14.5974 27.0983C11.4738 27.0983 8.9707 24.6548 8.9707 21.6761V14.4615C8.9707 11.4829 11.4737 9.03943 14.5974 9.03943H21.4029C24.5265 9.03943 27.0295 11.4829 27.0295 14.4615V21.6761C27.0295 24.6548 24.5265 27.0983 21.4029 27.0983H14.5974Z" stroke="white" stroke-miterlimit="10"/>
                                </svg>
                            </a>
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-img" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M27.5295 11.7199C27.5295 10.0483 26.0223 8.53943 24.3507 8.53943H11.6464C9.97874 8.53943 8.4707 10.0483 8.4707 11.7199V24.4194C8.4707 26.0926 9.97874 27.5983 11.6464 27.5983H18.0001V20.398H15.6725V17.2231H18.0001V15.9843C18.0001 13.8521 19.6026 11.9287 21.5736 11.9287H24.1418V15.1076H21.5736C21.2941 15.1076 20.963 15.4467 20.963 15.9581V17.2239H24.1426V20.3988H20.963V27.5983H24.3507C26.0223 27.5983 27.5295 26.0926 27.5295 24.4194V11.7199V11.7199Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <!-- /. Team-card -->
            <!-- Team-card -->
            <article class="team-card">
                <aside class="team-card__aside">
                    <figure class="team-card__figure">
                        <img src="<?php echo STANDART_DIR; ?>img/team-card/team-expert-2.jpg" alt="" class="team-card__photo">
                    </figure>
                </aside>
                <div class="team-card__body">
                    <div class="team-card__text">
                        <h3 class="team-card__heading text text--normal text--black text--w-regular">
                            Штраух Катрин
                        </h3>
                        <p class="team-card__descr text text--normal text--dark-gray text--w-light">
                            Заместитель главы муниципального образования Добель, Федеральная земля Баден-Вюртемберг, ФРГ
                        </p>
                    </div>
                    <div class="team-card__actions">
                        <div class="team-card__social">
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-svg" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M23.2937 13.8333C23.8785 13.8333 24.3525 13.3593 24.3525 12.7745C24.3525 12.1897 23.8785 11.7157 23.2937 11.7157C22.7089 11.7157 22.2349 12.1897 22.2349 12.7745C22.2349 13.3593 22.7089 13.8333 23.2937 13.8333Z" fill="white"/>
                                    <path d="M21.573 18.069C21.573 20.0426 19.9731 21.6426 17.9995 21.6426C16.0258 21.6426 14.4259 20.0426 14.4259 18.069C14.4259 16.0954 16.0258 14.4955 17.9995 14.4955C19.9731 14.4955 21.573 16.0954 21.573 18.069Z" stroke="white" stroke-width="1.32353" stroke-miterlimit="10"/>
                                    <path d="M14.5974 27.0983C11.4738 27.0983 8.9707 24.6548 8.9707 21.6761V14.4615C8.9707 11.4829 11.4737 9.03943 14.5974 9.03943H21.4029C24.5265 9.03943 27.0295 11.4829 27.0295 14.4615V21.6761C27.0295 24.6548 24.5265 27.0983 21.4029 27.0983H14.5974Z" stroke="white" stroke-miterlimit="10"/>
                                </svg>
                            </a>
                            <a href="" class="team-card__soc-icon" target="_blank">
                                <svg class="team-card__icon-img" width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="team-card__svg-rect" y="0.0688477" width="36" height="36" rx="4.41176" fill="#121212"/>
                                    <path d="M27.5295 11.7199C27.5295 10.0483 26.0223 8.53943 24.3507 8.53943H11.6464C9.97874 8.53943 8.4707 10.0483 8.4707 11.7199V24.4194C8.4707 26.0926 9.97874 27.5983 11.6464 27.5983H18.0001V20.398H15.6725V17.2231H18.0001V15.9843C18.0001 13.8521 19.6026 11.9287 21.5736 11.9287H24.1418V15.1076H21.5736C21.2941 15.1076 20.963 15.4467 20.963 15.9581V17.2239H24.1426V20.3988H20.963V27.5983H24.3507C26.0223 27.5983 27.5295 26.0926 27.5295 24.4194V11.7199V11.7199Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
            <!-- /. Team-card -->
        </div>
    </div>
</section>
<!-- /. Team -->

<!-- Partners -->
<section class="partners bg--white block-padding">
    <div class="partners__body">
        <div class="partners__container container">
            <h2 class="partners__heading title title--large title--black title--w-bold title--uppercase title--indent">
                Партнёры
            </h2>
        </div>
        <div class="partners__outer container-page marquee3k" data-speed="0.3">
            <div class="partners__wrapper-items">
                <div class="partners__items">
                    <a href="" class="partners__item">
                        <img src="<?php echo STANDART_DIR; ?>img/partners/logo-1.png" alt="" class="partners__logo">
                    </a>
                    <a href="" class="partners__item">
                        <img src="<?php echo STANDART_DIR; ?>img/partners/logo-2.png" alt="" class="partners__logo">
                    </a>
                    <a href="" class="partners__item">
                        <img src="<?php echo STANDART_DIR; ?>img/partners/logo-3.png" alt="" class="partners__logo">
                    </a>
                    <a href="" class="partners__item">
                        <img src="<?php echo STANDART_DIR; ?>img/partners/logo-4.png" alt="" class="partners__logo">
                    </a>
                    <a href="" class="partners__item">
                        <img src="<?php echo STANDART_DIR; ?>img/partners/logo-5.png" alt="" class="partners__logo">
                    </a>
                    <a href="" class="partners__item">
                        <img src="<?php echo STANDART_DIR; ?>img/partners/logo-6.png" alt="" class="partners__logo">
                    </a>
                    <a href="" class="partners__item">
                        <img src="<?php echo STANDART_DIR; ?>img/partners/logo-7.png" alt="" class="partners__logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /. Partners -->

<!-- Contacts -->
<section class="contacts block-padding">
    <div class="contacts__body container">
        <h2 class="contacts__heading title title--large title--white title--w-bold title--uppercase title--indent">
            Контакты
        </h2>
        <div class="contacts__items">
            <div class="contacts__item">
                <div class="contacts__icon">
                    <svg class="contacs__svg" width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.60899 10.7754C6.4461 11.3748 7.43026 11.6948 8.43704 11.6948C9.78709 11.6948 11.0818 11.12 12.0365 10.0969C12.9911 9.07369 13.5274 7.68599 13.5274 6.23902C13.5274 5.15996 13.2289 4.10513 12.6695 3.20793C12.1102 2.31073 11.3152 1.61144 10.385 1.1985C9.4549 0.785567 8.4314 0.677524 7.44396 0.888037C6.45653 1.09855 5.54951 1.61817 4.83761 2.38118C4.12571 3.14418 3.6409 4.11632 3.44449 5.17464C3.24808 6.23296 3.34889 7.32994 3.73416 8.32686C4.11944 9.32378 4.77188 10.1759 5.60899 10.7754Z" stroke="white"/>
                        <path d="M3.98224 21.2393H12.8903C13.7341 21.2393 14.5433 20.8801 15.14 20.2407C15.7366 19.6014 16.0718 18.7342 16.0718 17.83V15.1026C16.0705 14.983 16.0398 14.8658 15.9828 14.7629C15.9259 14.6599 15.8446 14.5749 15.7473 14.5162L13.0743 12.6396C10.3811 14.8727 6.69818 14.8273 3.63313 12.6396L1.11256 14.5162C1.01758 14.5766 0.938887 14.6624 0.884222 14.7652C0.829557 14.868 0.800801 14.9843 0.800781 15.1026V17.83C0.800781 18.7342 1.13597 19.6014 1.73261 20.2407C2.32925 20.8801 3.13846 21.2393 3.98224 21.2393Z" stroke="white" stroke-linecap="round"/>
                    </svg>
                </div>
                <h4 class="contacts__name text text--large text--white text--w-regular">
                    Ольга Гайдукова
                </h4>
            </div>
            <div class="contacts__item">
                <div class="contacts__icon">
                    <svg class="contacts__svg" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6458 13.578L10.3227 15.2917C8.27287 14.0439 6.56443 12.2753 5.35908 10.1533L7.01447 8.78367C7.20842 8.62294 7.34548 8.40023 7.40424 8.15034C7.46301 7.90044 7.44017 7.63744 7.3393 7.4024L5.83134 3.88715C5.72324 3.63499 5.53213 3.43077 5.2921 3.31091C5.05206 3.19105 4.7787 3.16334 4.52077 3.23273L1.64727 4.00873C1.37858 4.07981 1.14474 4.25118 0.990693 4.48991C0.836646 4.72864 0.773257 5.01788 0.812707 5.30205C1.31736 9.01545 2.97614 12.4578 5.53829 15.1088C8.10043 17.7597 11.4266 19.475 15.014 19.9955C15.2886 20.0363 15.568 19.9707 15.7986 19.8112C16.0292 19.6518 16.1947 19.4097 16.2634 19.1315L17.013 16.1569C17.0797 15.8901 17.0528 15.6074 16.937 15.3592C16.8212 15.111 16.6242 14.9134 16.3808 14.8015L12.9801 13.243C12.7532 13.1385 12.4992 13.1146 12.2578 13.1752C12.0164 13.2358 11.8012 13.3775 11.6458 13.578V13.578Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.7988 5.1333C11.9585 5.1333 13.0708 5.60998 13.8908 6.45847C14.7109 7.30696 15.1716 8.45777 15.1716 9.65771" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.7988 1.25342C11.8653 1.25342 12.9213 1.4708 13.9065 1.89316C14.8918 2.31551 15.787 2.93457 16.5411 3.71498C17.2952 4.49539 17.8933 5.42187 18.3014 6.44153C18.7095 7.46119 18.9196 8.55405 18.9196 9.65771" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <a href="tel:+79271178485" class="contacts__link text text--large text--white text--w-regular">
                    +7 927 117 84 85
                </a>
            </div>
            <div class="contacts__item">
                <div class="contacts__icon">
                    <svg class="contacts__svg" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_272:1074)">
                            <path d="M20.1668 9.36646V16.0331C20.1668 16.4751 19.9912 16.8991 19.6787 17.2116C19.3661 17.5242 18.9422 17.6998 18.5002 17.6998H3.50016C3.05814 17.6998 2.63421 17.5242 2.32165 17.2116C2.00909 16.8991 1.8335 16.4751 1.8335 16.0331V9.36646" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.1668 6.03304V4.36637C20.1668 3.92435 19.9912 3.50042 19.6787 3.18786C19.3661 2.8753 18.9422 2.69971 18.5002 2.69971H3.50016C3.05814 2.69971 2.63421 2.8753 2.32165 3.18786C2.00909 3.50042 1.8335 3.92435 1.8335 4.36637V6.03304L11.0002 11.033L20.1668 6.03304Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_272:1074">
                                <rect width="19.9896" height="20" fill="white" transform="translate(0.802246 0.199707)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <a href="mailto:o.gaidukova@inregions.com" class="contacts__link text text--large text--white text--w-regular">
                    o.gaidukova@inregions.com
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /. Contacts -->

<?php get_footer(); ?>