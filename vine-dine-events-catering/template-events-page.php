<?php

/* Template Name: Events page */

get_header();

?>

    <!-- Hero header -->
    <?php get_template_part('components/section', 'page-hero'); ?>

<div class="container row-gap">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

    <?php endwhile;
    else : endif; ?>

    <!-- Page content below this line -->

    <!-- Breadcrumb -->
    <?php get_template_part('components/section', 'breadcrumb'); ?>

    <div class="col">
        <!-- Page Title -->
        <?php get_template_part('components/section', 'page-title'); ?>

        <!-- Text & Image 50/50 -->
        <?php get_template_part('components/section', 'text-image-5050'); ?>

        <!-- Text & Image 50/50 -->
        <?php get_template_part('components/section', 'text-image-5050-2'); ?>

        <!-- Text & Image 50/50 -->
        <?php get_template_part('components/section', 'text-image-5050-3'); ?>

        <!-- Text & Image 50/50 -->
        <?php get_template_part('components/section', 'text-image-5050-4'); ?>

        <!-- Text & Image 50/50 -->
        <?php get_template_part('components/section', 'text-image-5050-5'); ?>
    </div>
</div>


<?php get_footer(); ?>