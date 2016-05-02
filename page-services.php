<?php
/**
* Template Name: Services
*/
 ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    <section class="container">
        <div class="banner">
            <h1 class="page-head"><span>Services</span></h1>
            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>"/>
        </div>
        <div class="row">
            <div class="content extra-narrow aligncenter"  style="margin-bottom:60px;">
                <h3 style="margin-bottom:30px;"><?php the_field('subtitle'); ?></h3>
                <?php the_content(); ?>
            </div>
        </div>
        <div class="row">
            <?php
                query_posts( array( 'post_type' => 'service', 'posts_per_page' => -1 ) );
                if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
            <div class="col-md-3 aligncenter service">
                <div class="crop portrait">
                    <img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>"/>
                </div>
                <h6 class="dark">Day of Coordination</h6>
                <a class="btn btn-gold" href="<?php the_permalink(); ?>"><span>View Details</span></a>
            </div>
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>
        <hr>
        <div class="row">
            <div class="content extra-narrow aligncenter">
                <h3 style="margin-bottom:60px;"><?php the_field('cta_title'); ?></h3>
                <?php the_field('cta_description'); ?>
                <a class="btn btn-gold" href="<?php the_field('cta_link'); ?>" style="margin-top:30px;"><span><?php the_field('cta_text'); ?></span></a>
            </div>
        </div>
    </section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
