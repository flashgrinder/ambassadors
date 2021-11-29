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
        <div class="search-ambassadors__results" id="ambassadors-results">
            <?php

            $s = mb_strtolower($s);
            $arNameTermsRegions = array();
            $regions = get_terms('regions', 'field=name');
            foreach ($regions as $term) {
            	array_push($arNameTermsRegions, mb_strtolower($term->name));
            }
            $resultRegions = preg_grep("/".$s."/", $arNameTermsRegions);
            $argsRegions1 = array(
            	'post_type'      => 'ambassadors',
            	's'              => $s,
            	'posts_per_page' => -1,
            );
            echo $s;
            $argsRegions2 = array (
            	'post_type'      => 'ambassadors',
            	'tax_query' => array(
            		array(
            			'taxonomy' => 'regions',
            			'field' => 'name',
            			'terms' => $resultRegions
            		),
            	),
            );
            $queryRegions1 = new WP_Query($argsRegions1);
            $queryRegions2 = new WP_Query($argsRegions2);
            $queryRegions = new WP_Query();
            $queryRegions->posts = array_unique(array_merge($queryRegions1->posts, $queryRegions2->posts), SORT_REGULAR);
            $queryRegions->post_count = count($queryRegions->posts);



                // $args = array(
                //     'post_type'=> 'ambassadors',
                //     'taxonomy'=> 'regions',
                //     's'    => $s,
                //     'paged' => $paged,
                //     );
                // query_posts($args);
            ?>
            <?php
            if ( $queryRegions->have_posts() ) :
				while ( $queryRegions->have_posts() ) : $queryRegions->the_post();
             ?>
                <article class="search-ambassadors__item">
                    <a href="<?php the_permalink(); ?>" class="search-ambassador__wrapper-link">
                        <div class="search-ambassadors__pic" style="background: <?php $ambassador_color = get_field('ambassador_color', $post->ID); echo $ambassador_color; ?>">
                            <?php
                                $default_attr = [
                                    'class'	=> "search-ambassadors__thumb",
                                    'alt'   => get_the_title()
                                ];

                                echo get_the_post_thumbnail( $post->ID, 'full', $default_attr ) ?>
                        </div>
                    </a>
                    <div class="search-ambassadors__text">
                        <h3 class="search-ambassadors__headline text text--normal text--black text--w-regular">
                            <?php the_title(); ?>
                        </h3>
                        <p class="search-ambassadors__descr text text--normal text--dark-gray text--w-light">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php else : ?>
                <div class="search-ambassadors__no-found text text--large text--black text--w-bold">
                    По вашему запросу ничего не найдено.
                </div>
            <?php endif; ?>
		    <?php wp_reset_postdata();?>
        </div>
    </div>
</section>
<!-- /. Search-ambassadors -->
