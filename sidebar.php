<img class="fw" src="<?php the_field('profile_image', 'option');?>" alt="Brandy Maddison"/>
<h3 class="script" style="margin-top:30px;">Meet Brandy</h3>
<p><?php the_field('sidebar_text', 'option');?></p>
<a class="btn btn-gold btn-block" href="<?php the_field('top_cta_link', 'option'); ?>"><span><?php the_field('top_cta_text', 'option'); ?></span></a>
<ul class="social-nav social-dark">
    <li class="social-btn"><a href="<?php the_field('facebook_url', 'option'); ?>"><i class="icon icon-facebook"></i></a></li>
    <li class="social-btn"><a href="<?php the_field('twitter_url', 'option'); ?>"><i class="icon icon-twitter"></i></a></li>
    <li class="social-btn"><a href="<?php the_field('pinterest_url', 'option'); ?>"><i class="icon icon-pinterest"></i></a></li>
    <li class="social-btn"><a href="<?php the_field('instagram_url', 'option'); ?>"><i class="icon icon-instagram"></i></a></li>
</ul>
<h6 class="aligncenter">The Latest on Instagram</h6>
<div class="insta-feed col-2">
    <?php $pull_cnt = 4; ?>
    <?php require_once( trailingslashit( get_template_directory() ). 'inc/instafeed.php' ); ?>
</div>
<h6 class="aligncenter">Categories</h6>
<ul class="categories">
    <?php wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => false,
        'title_li' => ''
    ) ); ?>
</ul>
<a class="btn btn-gold btn-block" href="<?php the_field('bottom_cta_link', 'option'); ?>"><span><?php the_field('bottom_cta_text', 'option'); ?></span></a>
