<?php

/* Template Name: Testimonials page */

$intro_text = get_field('text_field');

get_header();

?>

    <!-- Hero header -->
    <?php get_template_part('components/section', 'page-hero'); ?>

<div class="container row-gap">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

    <?php endwhile;
    else : endif; ?>

    <!-- Breadcrumb -->
    <?php get_template_part('components/section', 'breadcrumb'); ?>

    <!-- Page Title -->
    <div class="row justify-content-center">

        <div class="col-lg-8">
            <h1><?php echo the_title(); ?></h1>
        </div>

    </div>

    <section>
        <div class="row">
            <div class="col-lg-4 offset-lg-2">
                <?php echo $intro_text ?>
            </div>
        </div>
    </section>

    <section>
        <div class="row justify-content-center testimonial-grid">
                <?php
                $args = array(
                    'post_type' => 'testimonials', // Replace with your custom post type name
                    'posts_per_page' => -1, // Number of posts to display (1 for the latest post)
                    'orderby' => 'date', // Order by date
                    'order' => 'DESC', // Display in descending order (latest first)
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();

                        $comment = get_field('comment');
                        $contributor = get_field('contributor');
                        $venue = get_field('venue');
                ?>

                        

                            <div class="col-lg-4 testimonial">
                                <p><?php echo $comment; ?></p>
                                <div class="testimonial-meta">
                                <h4><?php echo $contributor; ?></h4>
                                <h5><?php echo $venue; ?></h5>
                                </div>
                            </div>



                        <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <h3>Want to share your experience with Vine & Dine with others?</h3>
                                <p>Share your love with us by emailing XXX</p>
                            </div>
                        </div>
                    <?php endif; ?>
            </div>
    </section>
</div>


<?php get_footer(); ?>