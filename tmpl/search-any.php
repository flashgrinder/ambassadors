<!-- Search -->
<section class="search bg--white block-padding">
    <div class="search__body container">
        <h2 class="search__heading title title--large title--black title--w-bold title--uppercase title--indent">
            Поиск по сайту
        </h2>
        <?php $args = ['aria_label' => 'page-search']; ?>
        <?php get_search_form($args); ?>
        <div class="search__count title title--tiny title--dark-gray title--w-light">
            Найдено <?php global $wp_query; $count = $wp_query->found_posts; echo num_decline( $count, 'совпадение, совпадения, свопадений' ); ?>
        </div>
        <?php 
            $args = array(
                'post_type'=> 'any',
                's'    => $s,
                'paged' => $paged,
                );
            query_posts($args);
        ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="search__result">
            <h3 class="search__title title title--small title--dark-gray title--w-light">
                <?php the_title(); ?>
            </h3>
            <p class="search__excerpt text text--dark-gray text--w-light">
                <?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="search__more">Подробнее</a>
            </p>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
            <div class="search__no-found text text--large text--black text--w-bold">
                По вашему запросу ничего не найдено.
            </div>
        <?php endif; ?>
		 <?php wp_reset_postdata();?>
    </div>
</section>
<!-- /. Search -->