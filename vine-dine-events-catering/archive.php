<?php

/* Template Name: Our Food page */

get_header();

$page_hero_img_url = get_the_post_thumbnail_url();
$intro_text = get_field('introduction_text');
$num = get_field('number');

?>
    <!-- Hero header -->
    <?php get_template_part('components/section', 'page-hero'); ?>

<div class="container row-gap">

<!-- Breadcrumb -->
    <?php get_template_part('components/section', 'breadcrumb'); ?>

    <!-- Page Title -->
    <div class="row justify-content-center">
        <div class="col-lg-8 gap-48">
            <h1>Our Food</h1>
        </div>
    </div>

    <!-- Intro text -->
    <div class="row">
        
            <div class="col-lg-6 offset-lg-2">
                <p>Below are a few of our sample menus to whet your appetite. However these are just examples, please do not feel constrained by these, we would welcome the opportunity to create bespoke dishes for you!</p>
            </div>
        
    </div>

    <div class="row food-grid row-gap">

        <?php
        if (have_posts()) :

            while (have_posts()) : the_post(); ?>
                <div class="col-xl-4 col-md-6">

                    <!-- container -->
                    <div class="post-card-container-max-width">
                    
                        <!-- contents -->
                        <a href="<?php echo the_guid(); ?>" class="post-card">

                            <!-- image -->
                            <div class="post-card-img-wrapper">
                                <?php echo the_post_thumbnail(); ?>
                            </div>
                            <!-- image end -->

                            <!-- overlay -->
                            <span class="post-card-overlay">

                                <!-- overlay label -->
                                <span class="post-card-overlay-label"><?php echo the_title('<h3>', '</h3>'); ?></span>
                                <!-- overlay label end -->

                            </span>
                            <!-- overlay end -->

                            <!-- clipping mask -->
                            <div class="post-card-clip-mask"></div>
                            <!-- clipping mask end -->

                        </a>
                        <!-- contents end -->

                        <a href="<?php echo the_guid(); ?>" class="post-card-label"><?php echo the_title('<h3>', '</h3>'); ?></a>
                    </div>
                </div>
        <?php endwhile;
        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif;
        ?>

    </div>
</div>
<?php get_footer(); ?>