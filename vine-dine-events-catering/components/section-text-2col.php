<?php

$text_area_2col = get_field('text_2-col');
$p_title = get_field('paragraph_title');

?>

<div class="row justify-content-center">
    <div class="col-lg-8 gap-48">

        <!-- Paragraph Title -->
        <?php if ($p_title) : ?>
            <h2><?php echo $p_title; ?></h2>
        <?php endif; ?>

        <!-- Text (2 column) -->
        <?php if ($text_area_2col) : ?>
            <div class="text-2col"><?php echo $text_area_2col; ?></div>
        <?php endif; ?>
    </div>
</div>