<?php

/* Template Name: Weddings page */

get_header();

?>
<!-- Hero header -->
<?php get_template_part('components/section', 'page-hero'); ?>

<div class="container row-gap">

    <!-- Breadcrumb -->
    <?php get_template_part('components/section', 'breadcrumb'); ?>

    <!-- Text (2 column) -->
    <?php get_template_part('components/section', 'text-2col'); ?>

</div>

<?php get_footer(); ?>