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

<!-- Targets -->
<section class="targets bg--black-low block-padding">
    <div class="targets__body container">
        <h2 class="targets__heading title title--large title--black title--w-bold title--uppercase title--indent">
            Задачи проекта
        </h2>
        <div class="targets__items">
            <div class="targets__item" data-num="1">
                <p class="targets__descr text text--large text--black text--w-light">
                    Стимуляция деятельности крупных компаний в рамках корпоративной социальной ответственности (КСО), направленной на улучшение качества жизни в регионе
                </p>
                <div class="targets__decor-arrow targets__decor-arrow--right">
                    <svg class="targets__svg targets__svg--right" width="226" height="165" viewBox="0 0 226 165" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.7452 1.51928C1.69841 1.10772 1.32684 0.812012 0.915273 0.858805C0.503711 0.905598 0.208008 1.27717 0.254801 1.68873L1.7452 1.51928ZM39.9775 113.879L39.4082 114.368L39.9775 113.879ZM225.143 158.941C225.409 158.624 225.369 158.151 225.052 157.884L219.888 153.537C219.571 153.271 219.098 153.311 218.831 153.628C218.564 153.945 218.605 154.418 218.922 154.685L223.512 158.549L219.648 163.139C219.381 163.456 219.422 163.929 219.739 164.196C220.056 164.463 220.529 164.422 220.796 164.105L225.143 158.941ZM1 1.604C0.254801 1.68873 0.254848 1.68915 0.254929 1.68986C0.255001 1.69048 0.255115 1.69149 0.255259 1.69274C0.255546 1.69525 0.255967 1.69893 0.256524 1.70376C0.257637 1.71344 0.259291 1.72777 0.261493 1.74669C0.265896 1.78452 0.272489 1.84072 0.281318 1.91483C0.298978 2.06305 0.325587 2.28291 0.361534 2.5708C0.433428 3.14656 0.542677 3.99443 0.692384 5.08536C0.991792 7.26717 1.45307 10.4215 2.10105 14.316C3.3969 22.1043 5.4401 32.8569 8.42991 44.7141C14.4008 68.3941 24.1781 96.6116 39.4082 114.368L40.5468 113.391C25.5593 95.918 15.8478 67.9978 9.88438 44.3474C6.90702 32.5395 4.87165 21.8286 3.58071 14.0698C2.93531 10.1908 2.47614 7.05069 2.17846 4.88143C2.02962 3.79682 1.92116 2.95499 1.84998 2.38494C1.81439 2.09992 1.78812 1.88286 1.77078 1.73737C1.76212 1.66462 1.75568 1.60978 1.75144 1.57328C1.74931 1.55503 1.74773 1.54136 1.7467 1.53234C1.74618 1.52784 1.74579 1.52449 1.74554 1.52231C1.74542 1.52122 1.74533 1.52046 1.74527 1.51991C1.74522 1.51945 1.7452 1.51928 1 1.604ZM39.4082 114.368C51.5972 128.578 69.3054 138.459 88.9422 145.3C108.585 152.144 130.212 155.966 150.303 158.023C170.396 160.081 188.975 160.377 202.528 160.158C209.306 160.049 214.829 159.811 218.659 159.6C220.574 159.495 222.066 159.396 223.08 159.324C223.587 159.288 223.974 159.258 224.235 159.238C224.366 159.227 224.465 159.219 224.532 159.214C224.565 159.211 224.59 159.209 224.607 159.208C224.615 159.207 224.622 159.206 224.626 159.206C224.628 159.206 224.63 159.206 224.631 159.205C224.632 159.205 224.633 159.205 224.569 158.458C224.505 157.711 224.504 157.711 224.503 157.711C224.502 157.711 224.501 157.711 224.499 157.711C224.495 157.712 224.489 157.712 224.481 157.713C224.465 157.714 224.441 157.716 224.408 157.719C224.344 157.724 224.246 157.732 224.117 157.742C223.86 157.763 223.476 157.792 222.973 157.828C221.967 157.899 220.483 157.998 218.576 158.102C214.763 158.312 209.26 158.549 202.504 158.658C188.991 158.876 170.474 158.582 150.455 156.531C130.433 154.48 108.93 150.676 89.4357 143.884C69.9351 137.09 52.4989 127.325 40.5468 113.391L39.4082 114.368Z" fill="#1EBC7F"/>
                    </svg>
                </div>
            </div>
            <div class="targets__item" data-num="2">
                <div class="targets__decor-stars targets__decor-stars--one">
                    <svg class="targets__svg targets__svg--stars" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.55599 9.70122C7.86823 8.80777 9.13177 8.80777 9.44401 9.70122L10.6442 13.1356C10.7404 13.4108 10.952 13.6304 11.2234 13.7367L14.6236 15.0689C15.4705 15.4007 15.4705 16.5993 14.6236 16.9311L11.2234 18.2633C10.952 18.3696 10.7404 18.5892 10.6442 18.8644L9.44401 22.2988C9.13177 23.1922 7.86823 23.1922 7.55599 22.2988L6.35577 18.8644C6.25957 18.5892 6.04804 18.3696 5.77655 18.2633L2.37643 16.9311C1.5295 16.5993 1.5295 15.4007 2.37643 15.0689L5.77655 13.7367C6.04804 13.6304 6.25957 13.4108 6.35577 13.1356L7.55599 9.70122Z" fill="#1EBC7F"/>
                            <g filter="url(#filter0_f_530:1018)">
                                <path d="M16.7005 3.95657C17.2333 3.17437 18.4538 3.5014 18.5242 4.44522L18.6516 6.15453C18.6733 6.4453 18.8208 6.71213 19.0555 6.88514L20.512 7.95879C21.2442 8.49851 20.934 9.65619 20.03 9.75751L18.2318 9.95905C17.9421 9.99153 17.6809 10.1489 17.5167 10.3898L16.5517 11.8064C16.0189 12.5886 14.7984 12.2616 14.728 11.3178L14.6006 9.60846C14.5789 9.31769 14.4314 9.05087 14.1967 8.87786L12.7402 7.80421C12.008 7.26449 12.3182 6.10681 13.2222 6.00549L15.0204 5.80394C15.3102 5.77146 15.5713 5.61414 15.7355 5.37316L16.7005 3.95657Z" fill="#1EBC7F"/>
                            </g>
                        <defs>
                            <filter id="filter0_f_530:1018" x="10.3325" y="1.51831" width="12.5874" height="12.7264" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="1" result="effect1_foregroundBlur_530:1018"/>
                            </filter>
                        </defs>
                    </svg>                        
                </div>
                <p class="targets__descr text text--large text--black text--w-light">
                    Возможность
                    <br>
                    реализации лучшего опыта других регионов в области ЦУР по итогам всероссийского форума Амбассадоров устойчивого развития
                </p>
                <div class="targets__decor-arrow targets__decor-arrow--left">
                    <svg class="targets__svg targets__svg--left" width="190" height="166" viewBox="0 0 190 166" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M185.237 0.863486C185.162 0.456192 184.771 0.187134 184.363 0.262529C183.956 0.337923 183.687 0.72922 183.763 1.13651L185.237 0.863486ZM175.5 115L174.857 114.613L175.5 115ZM0.533172 158.913C0.208979 159.171 0.155176 159.643 0.412998 159.967L4.61445 165.25C4.87227 165.574 5.34409 165.628 5.66828 165.37C5.99247 165.112 6.04628 164.64 5.78846 164.316L2.05383 159.62L6.74985 155.886C7.07404 155.628 7.12784 155.156 6.87002 154.832C6.6122 154.508 6.14038 154.454 5.81619 154.712L0.533172 158.913ZM184.5 1C183.763 1.13651 183.763 1.13666 183.763 1.1371C183.763 1.13763 183.763 1.13836 183.763 1.13942C183.763 1.14154 183.764 1.1448 183.765 1.14921C183.766 1.15803 183.769 1.17141 183.772 1.18931C183.779 1.2251 183.788 1.27893 183.801 1.35039C183.827 1.49329 183.864 1.70666 183.913 1.98703C184.009 2.54778 184.148 3.37653 184.317 4.44565C184.654 6.58396 185.11 9.68347 185.586 13.5232C186.539 21.2038 187.569 31.8411 187.882 43.669C188.509 67.3708 186.247 95.678 174.857 114.613L176.143 115.387C187.772 96.0531 190.009 67.3603 189.382 43.6293C189.067 31.7409 188.032 21.0536 187.075 13.3386C186.597 9.48067 186.138 6.36471 185.798 4.21198C185.628 3.13559 185.489 2.29993 185.391 1.73265C185.342 1.44901 185.304 1.23245 185.278 1.08644C185.265 1.01344 185.255 0.958067 185.248 0.920764C185.245 0.902112 185.242 0.887977 185.24 0.878413C185.239 0.873631 185.239 0.869992 185.238 0.867502C185.238 0.866257 185.238 0.865253 185.238 0.864629C185.238 0.863914 185.237 0.863486 184.5 1ZM174.857 114.613C165.913 129.484 150.644 139.714 132.671 146.678C114.701 153.64 94.0974 157.31 74.5878 159.103C55.0832 160.895 36.7037 160.808 23.1978 160.272C16.4458 160.005 10.9142 159.625 7.07208 159.312C5.15106 159.156 3.65252 159.016 2.63509 158.916C2.12638 158.866 1.73796 158.825 1.47716 158.798C1.34677 158.784 1.24827 158.773 1.1826 158.766C1.14977 158.762 1.12514 158.759 1.10883 158.758C1.10067 158.757 1.0946 158.756 1.09062 158.755C1.08863 158.755 1.08722 158.755 1.08622 158.755C1.08534 158.755 1.08498 158.755 1 159.5C0.915024 160.245 0.915719 160.245 0.91694 160.245C0.918049 160.246 0.919796 160.246 0.92201 160.246C0.92644 160.246 0.932965 160.247 0.941572 160.248C0.958786 160.25 0.984328 160.253 1.01808 160.257C1.08559 160.264 1.18594 160.275 1.31823 160.289C1.58281 160.317 1.97513 160.358 2.48784 160.409C3.51327 160.51 5.02035 160.65 6.95042 160.807C10.8104 161.121 16.3629 161.502 23.1383 161.771C36.6872 162.308 55.1358 162.396 74.725 160.596C94.3092 158.797 115.065 155.108 133.213 148.077C151.356 141.047 166.963 130.649 176.143 115.387L174.857 114.613Z" fill="#1EBC7F"/>
                    </svg>
                </div>
            </div>
            <div class="targets__item" data-num="3">
                <p class="targets__descr text text--large text--black text--w-light">
                    Улучшение инвестиционного климата региона за счет выявления устойчивых cоциальных предпринимателей
                </p>
                <div class="targets__decor-arrow targets__decor-arrow--right">
                    <svg class="targets__svg targets__svg--right" width="246" height="136" viewBox="0 0 246 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.72552 1.14589C1.62056 0.745195 1.21065 0.505455 0.809952 0.610416C0.409257 0.715377 0.169518 1.12529 0.274478 1.52599L1.72552 1.14589ZM55.5783 106.912L55.0844 107.476L55.5783 106.912ZM245.275 125.128C245.494 124.777 245.386 124.314 245.035 124.095L239.304 120.529C238.952 120.31 238.49 120.418 238.271 120.769C238.052 121.121 238.16 121.583 238.511 121.802L243.605 124.973L240.435 130.067C240.216 130.418 240.324 130.881 240.675 131.1C241.027 131.319 241.489 131.211 241.708 130.859L245.275 125.128ZM1 1.33594C0.274478 1.52599 0.274585 1.52639 0.274766 1.52708C0.274926 1.52769 0.275182 1.52867 0.275503 1.52989C0.276144 1.53233 0.277085 1.53591 0.278326 1.54062C0.280807 1.55004 0.284486 1.56399 0.28936 1.5824C0.29911 1.61922 0.313643 1.6739 0.332943 1.746C0.371542 1.89019 0.42921 2.10402 0.505812 2.38384C0.659016 2.94349 0.887965 3.76713 1.1916 4.8256C1.79884 6.94248 2.70488 9.99889 3.90121 13.7614C6.29362 21.2855 9.84814 31.6372 14.497 42.9474C23.7812 65.5349 37.4795 92.0713 55.0844 107.476L56.0722 106.347C38.7479 91.188 25.157 64.9365 15.8844 42.3772C11.2549 31.114 7.71402 20.8025 5.33068 13.3068C4.13913 9.55938 3.2372 6.51671 2.63344 4.41199C2.33157 3.35966 2.10426 2.54187 1.95258 1.98779C1.87674 1.71075 1.81981 1.49964 1.78192 1.35811C1.76298 1.28734 1.74879 1.23397 1.73939 1.19845C1.73469 1.18069 1.73118 1.16739 1.72887 1.15861C1.72771 1.15422 1.72685 1.15096 1.7263 1.14884C1.72602 1.14778 1.72582 1.14704 1.72568 1.14651C1.72557 1.14606 1.72552 1.14589 1 1.33594ZM55.0844 107.476C69.1739 119.805 88.1093 127.061 108.521 131.035C128.938 135.009 150.889 135.71 171.068 134.884C191.25 134.058 209.681 131.703 223.065 129.556C229.758 128.482 235.19 127.459 238.951 126.705C240.832 126.328 242.294 126.017 243.288 125.801C243.784 125.693 244.164 125.609 244.419 125.551C244.547 125.523 244.644 125.5 244.709 125.486C244.742 125.478 244.766 125.472 244.783 125.469C244.791 125.467 244.797 125.465 244.802 125.464C244.804 125.464 244.805 125.463 244.806 125.463C244.808 125.463 244.808 125.463 244.638 124.732C244.468 124.002 244.468 124.002 244.467 124.002C244.466 124.002 244.465 124.003 244.463 124.003C244.459 124.004 244.453 124.005 244.445 124.007C244.429 124.011 244.406 124.016 244.374 124.023C244.311 124.038 244.216 124.06 244.089 124.088C243.837 124.145 243.462 124.228 242.969 124.336C241.983 124.55 240.528 124.859 238.656 125.234C234.912 125.985 229.499 127.004 222.827 128.075C209.483 130.216 191.113 132.563 171.007 133.386C150.896 134.209 129.071 133.507 108.807 129.562C88.5376 125.616 69.8879 118.436 56.0722 106.347L55.0844 107.476Z" fill="#1EBC7F"/>
                    </svg>
                </div>
                <div class="targets__decor-stars targets__decor-stars--two">
                    <svg class="targets__svg targets__svg--stars" width="58" height="59" viewBox="0 0 58 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40.7173 24.1324C40.4553 22.2622 37.986 21.7636 37.0189 23.3855L33.0295 30.0756C32.7307 30.5766 32.2282 30.9222 31.6535 31.0219L23.974 32.3538C22.1768 32.6655 21.7007 35.0232 23.236 36.0079L29.7969 40.2156C30.2879 40.5305 30.6169 41.044 30.6978 41.6217L31.7784 49.3356C32.0404 51.2057 34.5097 51.7044 35.4769 50.0825L39.4662 43.3924C39.765 42.8914 40.2675 42.5458 40.8422 42.4461L48.5218 41.1142C50.3189 40.8025 50.795 38.4447 49.2597 37.4601L42.6988 33.2524C42.2079 32.9375 41.8788 32.424 41.7979 31.8463L40.7173 24.1324Z" fill="#1EBC7F"/>
                            <g filter="url(#filter0_f_531:1019)">
                                <path d="M16.8774 8.38858C15.8117 6.82419 13.3707 7.47825 13.23 9.36589L12.8634 14.2843C12.82 14.8658 12.525 15.3995 12.0556 15.7455L7.98338 18.7473C6.519 19.8267 7.13939 22.1421 8.94731 22.3447L13.9748 22.9082C14.5544 22.9732 15.0767 23.2878 15.405 23.7698L18.1817 27.8459C19.2474 29.4103 21.6884 28.7562 21.8291 26.8686L22.1957 21.9502C22.2391 21.3686 22.5341 20.835 23.0035 20.489L27.0757 17.4872C28.5401 16.4078 27.9197 14.0924 26.1118 13.8898L21.0842 13.3263C20.5047 13.2613 19.9824 12.9466 19.6541 12.4647L16.8774 8.38858Z" fill="#1EBC7F"/>
                            </g>
                        <defs>
                            <filter id="filter0_f_531:1019" x="2.16797" y="2.51196" width="30.7231" height="31.2104" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                <feGaussianBlur stdDeviation="2.5" result="effect1_foregroundBlur_531:1019"/>
                            </filter>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="targets__item" data-num="4">
                <p class="targets__descr text text--large text--black text--w-light">
                    Продвижение имиджа региона на федеральном уровне
                </p>
            </div>
        </div>
    </div>
</section>
<!-- /. Targets -->

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