<?php
/**
* Template Name: Journal
*/
 ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    <section class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
                    query_posts( array( 'post_type' => 'post', 'posts_per_page' => -1 ) );
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>
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
                    <p><?php the_excerpt(); ?></p>
                    <div class="aligncenter">
                        <a class="btn btn-gold btn-lg" href="<?php the_permalink();?>"><span>Continue Reading</span></a>
                    </div>
                </article>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
            <div class="col-md-3 sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
