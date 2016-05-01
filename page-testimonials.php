<?php
/**
* Template Name: Testimonials
*/
 ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    <section class="container">
        <div class="banner">
            <h1 class="page-head"><span><?php the_title(); ?></span></h1>
            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>"/>
        </div>
        <div class="row">
            <?php
                query_posts( array( 'post_type' => 'testimonial', 'posts_per_page' => -1 ) );
                if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
            <div class="col-md-4 aligncenter testimonial">
                <div class="crop square">
                    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>"/>
                </div>
                <h6><?php the_title(); ?></h6>
                <?php the_content(); ?>
            </div>
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>
        <hr>
        <div class="row aligncenter">
            <h2><?php the_field('cta_title');?></h2>
            <a class="btn btn-gold btn-lg" href="<?php the_field('cta_link');?>" style="margin-top:30px;"><span><?php the_field('cta_text');?></span></a>
        </div>
    </section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
