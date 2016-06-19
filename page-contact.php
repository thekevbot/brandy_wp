<?php
/**
* Template Name: Contact
*/
 ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    <section class="container">
        <div class="banner">
            <h1 class="page-head"><span>Say Hello</span></h1>
            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>"/>
        </div>
        <div class="row">
            <h3 class="aligncenter" style="margin-bottom:60px;"><?php the_field('subtitle');?></h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?php the_content(); ?>
                <ul class="icon-list">
                    <li><i class="icon icon-phone lg"></i><?php the_field('phone_number', 'option');?></li>
                    <li><i class="icon icon-mail lg"></i><a href="mailto:<?php the_field('email', 'option');?>"><?php the_field('email', 'option');?></a></li>
                </ul>
                <img class="aligncenter" src="<?php bloginfo('template_directory'); ?>/img/logo-lbb.png" alt="Little Black Book Member 2016" style="margin-top:60px;" />
            </div>
            <div class="col-md-7">
                <form class="form-base" id="c-form" action='https://www.getform.org/f/4a71dba0-4a34-41d1-b828-c3b29fd0b417' method="POST" validate>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-name">First + Last Name *</label>
                                <input type="text" class="form-control input-lg" id="c-name" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-fiance">Fiance(e)'s Name *</label>
                                <input type="text" class="form-control input-lg" id="c-fiance" name="fiance-name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-email">Email *</label>
                                <input type="email" class="form-control input-lg" id="c-email" name="email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-phone">Phone *</label>
                                <input type="text" class="form-control input-lg" id="c-phone"  name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-dateLoc">Wedding Date + Location *</label>
                                <input type="text" class="form-control input-lg" id="c-dateLoc" name="date-location" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-guestBudget">Expected Guest + Budget</label>
                                <input type="text" class="form-control input-lg" id="c-guestBudget" name="guest-budget">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-found">How did you hear about us?</label>
                                <input type="text" class="form-control input-lg" id="c-found" name="how-found">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="c-commPref">Email or Phone Communication</label>
                                <input type="text" class="form-control input-lg" id="c-commPref" name="contact-pref">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c-services">Services you are interested in</label>
                        <input type="text" class="form-control input-lg" id="c-services" name="services">
                    </div>
                    <div class="form-group">
                        <label for="c-details">Tell us a little about the design and details of your wedding!</label>
                        <textarea class="form-control" rows="5" id="c-details" name="details"></textarea>
                    </div>
                    <button class="btn btn-gold btn-block lg aligncenter" type="submit"><span>Submit</span></button>
                </form>
            </div>
        </div>
    </section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
