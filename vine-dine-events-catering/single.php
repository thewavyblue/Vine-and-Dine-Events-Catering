<?php

/* Template Name: Menus page */

get_header();

?>

    <!-- Hero header -->
    <?php get_template_part('components/section', 'page-hero'); ?>

<div class="container row-gap">

        <!-- Breadcrumb -->
        <?php get_template_part('components/section', 'breadcrumb'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-lg-6 offset-lg-2">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>

    <?php endwhile;
    else : endif; ?>

    <!-- Menu Text -->
    <?php get_template_part('components/section', 'text-menu'); ?>

</div>

<?php get_footer(); ?>