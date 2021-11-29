<?php /* Template Name: Страница поиска амбассадоров */?>
<?php get_header(); ?>

<!-- Search-ambassadors -->
<section class="search-ambassadors bg--white block-padding">
    <div class="search-ambassadors__body container">
        <h2 class="search-ambassadors__heading title title--large title--black title--w-bold title--uppercase title--indent">
            Раздел выбора региона
        </h2>
        <form class="search__form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" aria-label="search-ambassadors">
            <div class="search__field">
                <input class="search__input" type="search" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Например: Саратовская область">
                <!-- <input name="post_type" type="hidden" value="ambassadors" /> -->
                <input type="hidden" name="taxonomy" value="regions" />
            </div>
        </form>
    </div>
</section>
<!-- /. Search-ambassadors -->

<?php get_footer(); ?>