<?php
/**
* Template Name: About
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
            <h3 class="aligncenter" style="margin-bottom:60px;"><?php the_field('subtitle'); ?></h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="mobile-crop circle">
                    <img class="fw" src="<?php bloginfo('template_directory'); ?>/img/brandy-maddison.jpg" alt="Brandy Maddison"/>
                </div>
            </div>
            <div class="col-md-8">
                <h2>Brandy Maddison</h2>
                <h5 style="margin-top:-15px;">Owner&nbsp;&nbsp;|&nbsp;&nbsp;Planner&nbsp;&nbsp;|&nbsp;&nbsp;Florist&nbsp;&nbsp;|&nbsp;&nbsp;Stylist</h5>
                <?php the_content(); ?>
                <a class="btn btn-gold" href="<?php the_field('cta_link'); ?>" style="margin-top:30px;"><span><?php the_field('cta_text'); ?></span></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="content extra-narrow aligncenter">
                <h3 style="margin-bottom:60px;"><?php the_field('features_title'); ?></h3>
                <div class="logo-list wrapper" style="margin-bottom:60px;">
                    <div class="wrapper-inner">
                        <a href="http://issuu.com/adore.magazine/docs/adore-springsummer-2016-final/3?e=8326376/34597566" target="_blank">
                            <img class="fw" src="<?php bloginfo('template_directory'); ?>/img/logo-adore.png" alt="Adore Okanagen Wedding &amp; Style Magazine"/>
                        </a>
                    </div>
                    <div class="wrapper-inner">
                        <a href="http://www.stylemepretty.com/canada-weddings/british-columbia/penticton/2015/10/12/navy-copper-mountaintop-wedding-inspiration/" target="_blank">
                            <img class="fw" src="<?php bloginfo('template_directory'); ?>/img/logo-smp.png" alt="Style Me Pretty"/>
                        </a>
                    </div>
                    <div class="wrapper-inner">
                        <img class="fw" src="<?php bloginfo('template_directory'); ?>/img/logo-vv.png" alt="Vale &amp; Vine"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
