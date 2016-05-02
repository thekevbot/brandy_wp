<?php
/**
* Template Name: Home
*/
 ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    <section class="container aligncenter">
        <div class="banner banner-slider">
            <ul>
                <?php
                    if( have_rows('hero_carousel') ):
                    while( have_rows('hero_carousel') ) : the_row();
                        echo '<li><img src="' . get_sub_field('image') . '" alt=""/></li>';
                    endwhile;
                    endif;
                ?>
            </ul>
        </div>
        <div class="row">
            <div class="content narrow">
                <h2><?php the_field('subtitle'); ?></h2>
                <?php the_content(); ?>
                <a class="btn btn-gold aligncenter" href="<?php the_field('cta_link');?>" style="margin-top:30px;"><span><?php the_field('cta_text');?></span></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <?php
                if( have_rows('large_buttons') ):
                while( have_rows('large_buttons') ) : the_row();
            ?>
            <div class="col-md-4">
                <a class="btn btn-gold btn-block btn-xl" href="<?php the_sub_field('page_link');?>">
                    <span><?php the_sub_field('small_text');?> <em><?php the_sub_field('large_text');?></em></span>
                </a>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <hr>
        <div class="row">
            <h3 style="margin-bottom:30px;">The Latest on Instagram</h3>
            <div class="insta-feed col-5">
                <?php $pull_cnt = 5; ?>
                <?php require_once( trailingslashit( get_template_directory() ). 'inc/instafeed.php' ); ?>
            </div>
        </div>
    </section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
