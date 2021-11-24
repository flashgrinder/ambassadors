<form class="search__form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" aria-label="page-search">
    <div class="search__field">
        <input class="search__input" type="search" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Что ищем?">
        <input name="post_type" type="hidden" value="any" />
    </div>
    <button type="submit" value="Поиск" class="search__btn button button--green button--icon button--search">
        <div class="button__text">
            Поиск
        </div>
        <div class="button__icon button__icon--right">
            <svg class="button__svg-icon button__svg-icon--search" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle r="7.04343" transform="matrix(0.999709 0.0241008 0.0241008 0.999709 16.4857 15.5143)"/>
                <line x1="0.5" y1="-0.5" x2="4.77543" y2="-0.5" transform="matrix(-0.690607 0.723231 -0.721765 -0.692139 11.4622 19.6934)" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </button>
</form>