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
            <div class="content">
                <?php the_content(); ?>
            </div>
            <div class="aligncenter" style="margin-top:60px;">
                <a class="btn btn-gold btn-lg" href="<?php echo home_url(); ?>/services"><span>Return to Main Gallery</span></a>
            </div>
        </div>
    </section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
