<?php /* Template Name: Страница поиска */?>
<?php get_header(); ?>

<!-- Search -->
<section class="search bg--white block-padding">
    <div class="search__body container">
        <h2 class="search__heading title title--large title--black title--w-bold title--uppercase title--indent">
            Поиск по сайту
        </h2>
        <?php $args = ['aria_label' => 'page-search'] ?>
        <?php get_search_form($args); ?>
    </div>
</section>
<!-- /. Search -->

<?php get_footer(); ?>