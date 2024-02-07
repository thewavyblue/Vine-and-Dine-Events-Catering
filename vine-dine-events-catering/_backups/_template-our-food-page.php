<?php

/* Template Name: Our Food page */

$page_hero_img_url = get_the_post_thumbnail_url();

get_header();

?>

<div class="container-fluid row-gap">

    <!-- Hero header -->
    <?php get_template_part('components/section', 'page-hero'); ?>

<pre><?php var_dump($post); ?></pre>


    <!-- Page Title -->
    <div class="row justify-content-center">
        <div class="col-8 gap-48">
            <?php echo the_title('<h1>', '</h1>'); ?>
            
        </div>
    </div>


    <!-- Text & Image 50/50 -->
    <?php get_template_part('components/section', 'text-single-col-left'); ?>

    <div class="row food-grid">


        <?php
        if (have_posts()) :

            while (have_posts()) : the_post(); ?>
                <div class="col-xl-4 col-md-6">
                    <div class="post-card">
                        <div class="post-card-img">
                            <?php echo the_post_thumbnail(); ?>
                        </div>
                        <?php echo the_title('<h3>', '</h3>'); ?>
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