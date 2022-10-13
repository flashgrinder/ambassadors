<?php get_header(); ?>

<!-- Post -->
<section class="post post--page bg--white block-padding">
    <?php the_post(); ?>
    <article class="post__body container">
        <header class="post__header">
            <h1 class="post__title title title--big title--dark title--w-bold title--uppercase">
                <?php the_title(); ?>
            </h1>
        </header>
        <div class="post__content wysiwyg">
            <?php the_content(); ?>
        </div>
        <footer class="post__footer">
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