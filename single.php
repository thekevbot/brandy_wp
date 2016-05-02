<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    <section class="container">
        <div class="row">
            <div class="col-md-9">
                <article>
                    <div class="article-head aligncenter">
                        <h3><?php the_title(); ?></h3>
                        <span class="article-date"><?php the_time('F j, Y'); ?></span>
                        <div class="categories">
                            <?php the_category( ', ' ); ?>
                        </div>
                    </div>
                    <div class="featured-img">
                        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>"/>
                    </div>
                    <?php the_content(); ?>
                    <div class="wrapper community">
                        <div class="wrapper-inner">
                            <h6 class="dark">Add a Comment</h6>
                        </div>
                        <div class="wrapper-inner alignright">
                            <?php echo do_shortcode( '[wpusb]' ); ?>
                        </div>
                    </div>
                    <!--TODO: Insert Disqus -->
                    <div class="comments">
                        <?php disqus_embed('brandymaddisonevents'); ?>
                    </div>
                    <div class="aligncenter">
                        <a class="btn btn-gold btn-lg" href="<?php echo home_url(); ?>/journal"><span>Return to All Posts</span></a>
                    </div>
                </article>
            </div>
            <div class="col-md-3 sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
