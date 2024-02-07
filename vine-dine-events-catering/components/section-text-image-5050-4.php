<?php

$text_image_5050 = get_field('text_image_5050_4');
$text = $text_image_5050['text_col'];
$image = $text_image_5050['image_col'];

?>

<div class="row justify-content-center">

    <!-- Display text -->

    <?php if ($text) : ?>
        <div class="col-4 offset-md-1">
            <p><?php echo $text; ?></p>
        </div>
    <?php endif; ?>

    <!-- Display image -->

    <?php if ($image) : ?>

        <div class="col-4 offset-md-1 align-self-center">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <?php else : ?>
            <div class="col-4 offset-md-1 align-self-center">
            </div>
    <?php endif; ?>

</div>