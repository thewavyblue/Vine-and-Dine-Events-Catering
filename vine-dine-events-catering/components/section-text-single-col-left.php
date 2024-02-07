<?php

$intro_text = get_field('introduction_text');

?>

<div class="row justify-content-left">

    <!-- Display text -->
    <pre><?php var_dump($intro_text); ?></pre>
    
    <?php if ($intro_text) : ?>
        <div class="col-4 offset-md-1">
            <p><?php echo $intro_text; ?></p>
            
        </div>
    <?php endif; ?>
</div>