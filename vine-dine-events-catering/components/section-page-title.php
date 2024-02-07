<?php

$p_title = get_field('paragraph_title');

?>

<div class="row justify-content-center">
    <div class="col-8 gap-48">

        <!-- Page Title -->
        <?php if ($p_title) : ?>
            <h2><?php echo $p_title; ?></h2>
        <?php endif; ?>
    </div>
</div>