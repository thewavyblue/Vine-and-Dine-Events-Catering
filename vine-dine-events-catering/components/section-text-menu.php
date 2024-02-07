<?php

$text_block = get_field('text_block');
$inpage_link = get_field('in-page_link');
$text_starters = get_field('text_starters');
$text_mains = get_field('text_mains');
$text_desserts = get_field('text_desserts');
$text_veg = get_field('text_veg');

?>

<div class="row row-gap">

    <!-- Display text -->
    <div class="col-lg-6 offset-lg-2">
        <?php if ($text_block) : ?>

            <?php echo $text_block; ?></p>

        <?php endif; ?>


        <!-- inpage link -->

        <?php if ($inpage_link) : ?>
            <a href="<?php echo $inpage_link['url']; ?>" class="inpage-link"><?php echo $inpage_link['title']; ?><svg id="icon-arrow-link" xmlns="http://www.w3.org/2000/svg" width="54" height="9" viewBox="0 0 54 9" fill="none">
<path d="M54.3536 4.85355C54.5488 4.65829 54.5488 4.34171 54.3536 4.14645L51.1716 0.964466C50.9763 0.769204 50.6597 0.769204 50.4645 0.964466C50.2692 1.15973 50.2692 1.47631 50.4645 1.67157L53.2929 4.5L50.4645 7.32843C50.2692 7.52369 50.2692 7.84027 50.4645 8.03553C50.6597 8.2308 50.9763 8.2308 51.1716 8.03553L54.3536 4.85355ZM0 5H54V4H0V5Z" fill="black"/>
</svg></a>
        <?php endif; ?>
    </div>



    <?php if ($text_starters) : ?>
        <div class="col-lg-6 offset-lg-2 menu-list">
        <?php echo $text_starters; ?>
        </div>
    <?php endif; ?>

    <?php if ($text_mains) : ?>
        <div class="col-lg-6 offset-lg-2 menu-list">
            <?php echo $text_mains; ?>
        </div>
    <?php endif; ?>

    <?php if ($text_desserts) : ?>
        <div class="col-lg-6 offset-lg-2 menu-list">
            <?php echo $text_desserts; ?>
        </div>
    <?php endif; ?>

    <?php if ($text_veg) : ?>
        <div class="col-lg-6 offset-lg-2 menu-list" id="vegetarian-vegan-menu">
            <?php echo $text_veg; ?>
        </div>
    <?php endif; ?>

</div>