<?php

$hero_header = get_field('hero_header');

$hero_standfirst = get_field('hero_standfirst');

$hero_cta = get_field('hero_cta');

$home_hero_img = get_field('home_hero_image');
$home_hero_img_full = $home_hero_img['sizes']['1920'];

?>

<div class="row justify-content-end hero-section" style="background-image: url('<?php echo $home_hero_img_full; ?>');">
    <div class="hero-img-overlay"></div>
    <div class="col-10 col-lg-5 hero-text-content">

        <!-- Home Hero Header Text -->
        <?php if ($hero_header) : ?>
            <h1><?php echo $hero_header; ?></h1>
        <?php endif; ?>


        <!-- Home Hero Standfirst -->
        <?php if ($hero_standfirst) : ?>
            <p><?php echo $hero_standfirst; ?></p>
        <?php endif; ?>


        <!-- Home Hero Call to Action button -->
        <?php if ($hero_cta) : ?>
            <a href="<?php echo $hero_cta['url']; ?>" target="<?php echo $hero_cta['target']; ?>" class="btn custom-cta-btn" role="button"><?php echo $hero_cta['title']; ?></a>
        <?php endif; ?>
    </div>

</div>