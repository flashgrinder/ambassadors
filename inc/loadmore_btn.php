<?php

function loadmore_script() {
  wp_enqueue_script('jquery');
   wp_enqueue_script('loadmore', get_stylesheet_directory_uri() . '/inc/loadmore.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'loadmore_script');

function loadmore_get_posts(){
    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';
    query_posts($args);
    if(have_posts()) :
        while(have_posts()): the_post(); ?>
        <article class="news__card load-post-news js-reveal a-reveal">
            <aside class="news__aside">
                <figure class="news__figure">
                    <?php
                        $default_attr = [
                            'class'	=> "news__img",
                            'alt'   => get_the_title()
                        ];
                        
                        echo get_the_post_thumbnail( $post->ID, 'thumbnail', $default_attr ) ?>
                </figure>
                <div class="news__info">
                    <div class="news__meta">
                        <div class="news__date text text--small text--black text--w-regular">
                            <?php echo get_the_date('j F Y', $before); ?>
                        </div>
                        <div class="news__read">
                            <div class="news__meta-icon">
                                <svg class="news__meta-svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6" r="5.75" stroke="#121212" stroke-width="0.5"/>
                                    <path d="M6 1.75V6L7.5 7.5" stroke="#121212" stroke-width="0.5" stroke-linecap="round"/>
                                </svg>                                        
                            </div>
                            <div class="news__meta-text text text--small text--black text--w-regular">
                                <?php estimated_reading_time(); ?>
                            </div>
                        </div>
                        <div class="news__views">
                            <div class="news__meta-icon">
                                <svg class="news__meta-svg" width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1C5.60619 1 2.64773 2.82843 1.0387 5.5496C1.01461 5.59033 1.01461 5.641 1.0387 5.68173C2.64773 8.40291 5.60619 10.2313 9 10.2313C12.3938 10.2313 15.3523 8.40291 16.9613 5.68173C16.9854 5.641 16.9854 5.59033 16.9613 5.5496C15.3523 2.82843 12.3938 1 9 1Z" stroke="#121212" stroke-width="0.659381" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.00003 8.39538C10.5352 8.39538 11.7798 7.15086 11.7798 5.61566C11.7798 4.08046 10.5352 2.83594 9.00003 2.83594C7.46483 2.83594 6.22031 4.08046 6.22031 5.61566C6.22031 7.15086 7.46483 8.39538 9.00003 8.39538Z" stroke="#121212" stroke-width="0.659381" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                        
                            </div>
                            <div class="news__meta-text text text--small text--black text--w-regular">
                                <?php if( get_post_meta( $post->ID, 'views', true ) == null ) { echo '0'; } else { echo get_post_meta( $post->ID, 'views', true ); } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="news__text">
                <div class="news__tags">
                    <?php 
                        $categories = get_the_category();
                        
                        if($categories){
                            foreach($categories as $category) {
                                echo '<a href="'. get_category_link($category->term_id) . '" class="news__tag text text--small text--black text--w-regular">#' . $category->cat_name . '</a>';
                            }
                        }
                    ?>
                </div>
                <h3 class="news__headline title title--pre-medium title--black title--w-medium">
                    <a href="<?php the_permalink(); ?>" class="news__link">
                    <?php the_title(); ?>
                    </a> 
                </h3>
                <p class="news__excerpt text text--large text--black text--w-light">
                    <?php the_excerpt(); ?>
                </p>
            </div>
        </article>
        <?php
        endwhile;
    endif;
    die();
}

add_action('wp_ajax_loadmore_news', 'loadmore_get_posts');
add_action('wp_ajax_nopriv_loadmore_news', 'loadmore_get_posts');

 ?>
