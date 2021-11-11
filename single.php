<?php get_header(); ?>

<!-- Post -->
<section class="post bg--white block-padding">
    <?php the_post(); ?>
    <article class="post__body container">
        <header class="post__header">
            <div class="post__pic">
                <?php
                    $default_attr = [
                        'class'	=> "post__img",
                        'alt'   => get_the_title()
                    ];
                    
                    echo get_the_post_thumbnail( $post->ID, 'full', $default_attr ); ?>
            </div>
            <div class="post__brd-meta">
                <h5 class="post__chapter text text--large text--w-light">
                    Новости
                </h5>
                <div class="post__brd-check text text--large text--white text--w-light">
                    >
                </div>
                <h5 class="post__day-month text text--large text--w-light">
                    <?php the_date('j F', $before); ?>
                </h5>
                <div class="post__brd-check text text--large text--white text--w-light">
                    >
                </div>
                <h5 class="post__name text text--large text--white text--w-light">
                    <?php the_title(); ?>
                </h5>
            </div>
            <div class="post__info">
                <div class="post__outer-meta">
                    <div class="post__meta">
                        <div class="post__date text text--small text--white text--w-regular">
                            <?php echo get_the_date(); ?>
                        </div>
                        <div class="post__read">
                            <div class="post__meta-icon">
                                <svg class="post__meta-svg" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6" r="5.75" stroke="#ffffff" stroke-width="0.5"/>
                                    <path d="M6 1.75V6L7.5 7.5" stroke="#ffffff" stroke-width="0.5" stroke-linecap="round"/>
                                </svg>                                        
                            </div>
                            <div class="post__meta-text text text--small text--white text--w-regular">
                                <?php estimated_reading_time(); ?>
                            </div>
                        </div>
                        <div class="post__views">
                            <div class="post__meta-icon">
                                <svg class="post__meta-svg" width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1C5.60619 1 2.64773 2.82843 1.0387 5.5496C1.01461 5.59033 1.01461 5.641 1.0387 5.68173C2.64773 8.40291 5.60619 10.2313 9 10.2313C12.3938 10.2313 15.3523 8.40291 16.9613 5.68173C16.9854 5.641 16.9854 5.59033 16.9613 5.5496C15.3523 2.82843 12.3938 1 9 1Z" stroke="#ffffff" stroke-width="0.659381" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.00003 8.39538C10.5352 8.39538 11.7798 7.15086 11.7798 5.61566C11.7798 4.08046 10.5352 2.83594 9.00003 2.83594C7.46483 2.83594 6.22031 4.08046 6.22031 5.61566C6.22031 7.15086 7.46483 8.39538 9.00003 8.39538Z" stroke="#ffffff" stroke-width="0.659381" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                        
                            </div>
                            <div class="post__meta-text text text--small text--white text--w-regular">
                                <?php if( get_post_meta( $post->ID, 'views', true ) == null ) { echo '0'; } else { echo get_post_meta( $post->ID, 'views', true ); } ?>
                            </div>
                        </div>
                    </div>
                    <div class="post__tags">
                        <?php 
                            $categories = get_the_category();
                            
                            if($categories){
                                foreach($categories as $category) {
                                    echo '<a href="'. get_category_link($category->term_id) . '" class="post__tag text text--small text--black text--w-regular">#' . $category->cat_name . '</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <h1 class="post__title title title--big title--white title--w-bold title--uppercase">
                    <?php the_title(); ?>
                </h1>
            </div>
        </header>
        <div class="post__content wysiwyg">
            <?php the_content(); ?>
        </div>
        <footer class="post__footer">
            <div class="post__author text text text--w-light">
                <?php the_author(); ?>
            </div>
            <div class="post__actions">
                <?php 
                    
                    $next = get_previous_post_link( '%link', 'Следующая новость', true ); 
                    echo str_replace( '<a ', '<a class="post__btn button button--green button--big" ', $next );
                    
                ?>
                <a href="<?php echo get_author_posts_url($post->post_author); ?>" class="post__btn button button--transparent button--big">
                    Все статьи автора
                </a>
            </div>
            <div class="post__social-act">
                <div class="post__rating">
                    <div class="post__rating-heading title title--small title--black title--w-regular">
                        Понравилась статья?
                    </div>
                    <div class="post__rating-stars">
                        <?php echo do_shortcode( '[ratemypost]' ); ?>
                    </div>
                </div>
                <div class="post__share-social">
                    <div class="post__share-heading title title--small title--black title--w-regular">
                        Поделиться:
                    </div>
                    <div class="post__share-btn ya-share2" data-curtain data-color-scheme="blackwhite" data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp" data-use-links></div>
                </div>
            </div>
        </footer>
    </article>
</section>
<!-- /. Post -->

<?php get_footer(); ?>