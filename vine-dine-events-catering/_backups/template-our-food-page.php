<?php

/* Template Name: Our food page (not in use) */

$page_hero_img_url = get_the_post_thumbnail_url();
$intro_text = get_field('introduction_text');

get_header();

?>
    <!-- Hero header -->
    <?php get_template_part('components/section', 'page-hero'); ?>

<div class="container row-gap">

        <!-- Breadcrumb -->
        <?php get_template_part('components/section', 'breadcrumb'); ?>


    <!-- Page Title -->
    <div class="row justify-content-center">
        <div class="col-8 gap-48">
            <h1>Our Food</h1>
        </div>
    </div>

    <!-- Intro text -->
    <div class="row justify-content-left">
        <pre><?php var_dump($intro_text); ?></pre>

        <?php if ($intro_text) : ?>
            <div class="col-4 offset-md-1">
                <p><?php echo $intro_text; ?></p>
            </div>
        <?php endif; ?>
    </div>

    <div class="row food-grid row-gap">

    <?php
    $args = array(
        'post_type' => 'menus', // Replace with your custom post type name
        'posts_per_page' => -1, // Number of posts to display (1 for the latest post)
        'orderby' => 'date', // Order by date
        'order' => 'DESC', // Display in descending order (latest first)
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
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