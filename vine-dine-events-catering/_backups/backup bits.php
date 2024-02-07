


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_title(); ?>
            <?php the_content(); ?>

    <?php endwhile;
    else : endif; ?>

    <!-- Page content below this line -->

    <!-- Hero header -->
    <?php get_template_part('components/section', 'food-card-grid'); ?>


    <?php echo "This works!";?>