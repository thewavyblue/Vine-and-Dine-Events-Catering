<?php

/* Template Name: Contact page */

get_header();
$text_field = get_field("text_field");
$contact_form = get_field('contact_form');

// Form Contact details settings
$phone = get_field("phone_no");
$email = get_field("email_address");
$addr = get_field("address");
$location = get_field("map");
?>
    <!-- Hero header -->
    <?php get_template_part('components/section', 'page-hero'); ?>

<div class="container row-gap">

    <!-- Breadcrumb -->
    <?php get_template_part('components/section', 'breadcrumb'); ?>
    
    <!-- Page title -->
    <div class="row">
        <div class="col-lg-6 offset-lg-2">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>


    <!-- Contact form -->
    <div class="row contact-page">
        <div class="col-lg-5 offset-lg-2">
            <h2>Send us a message</h2>
            <?php echo do_shortcode('[custom_wpform_with_acf field_name="contact_form"]'); ?>
        </div>

        <!-- Text (2 column) -->
        <div class="col-lg-3 offset-lg-1 gap-48">
            <div class="contact-details">
                <?php echo ($text_field); ?>
            </div>
            <ul class="contact-details">
                <li class="info" id="phone"><i class="fa-solid fa-phone"></i><?php echo ($phone); ?></li>
                <!-- <li class="info" id="email"><i class="fa-solid fa-envelope"></i><?php echo ($email); ?></li> -->
                <span class="group-col"><i class="fa-solid fa-location-dot"></i>
                    <li class="info" id="address"><?php echo ($addr); ?></li>
                </span>
            </ul>
            <div id="location">
                <?php if ($location) : ?>
                    <?php echo ($location); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>