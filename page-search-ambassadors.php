<?php /* Template Name: Страница поиска амбассадоров */?>
<?php get_header(); ?>

<!-- Search-ambassadors -->
<section class="search-ambassadors bg--white block-padding">
    <div class="search-ambassadors__body container">
        <h2 class="search-ambassadors__heading title title--large title--black title--w-bold title--uppercase title--indent">
            Раздел выбора региона
        </h2>
        <div class="search__form" aria-label="search-ambassadors">
            <div class="search__field">
                <input class="search__input" value="" id="search-input" placeholder="Например: Саратовская область">
                <!-- <input name="post_type" type="hidden" value="ambassadors" /> -->
                <input type="hidden" name="taxonomy" value="regions" />
            </div>
        </div>

        <div class="search-ambassadors__results" id="ambassadors-results">

        </div>
        <script>
            var ajaxurl = '<?php echo site_url(); ?>/wp-admin/admin-ajax.php';
        </script>
    </div>
</section>
<!-- /. Search-ambassadors -->

<?php get_footer(); ?>