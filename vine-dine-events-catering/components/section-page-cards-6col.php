<div class="row row-gap-sm">
    <h2 id="what-we-do">What we do</h2>
    <!-- Page Link Card (left) -->

    <?php
    $card_fields = array(
        'page_link_card_left',
        'page_link_card_right'
    );

    foreach ($card_fields as $index => $field) :
        $card = get_field($field);
        if ($card) :
            $card_id = $card->ID;
            $card_img_url = get_the_post_thumbnail_url($card_id);
            $card_url = get_post_permalink($card_id);
            $card_title = esc_html($card->post_title);
    ?>

            <div class="page-link-card-img-wrapper col-lg-6">
                <?php if ($card_img_url) : ?>

                    <!-- container -->

                    <div class="post-card-container">

                        <!-- contents -->
                        <a href="<?php echo $card_url; ?>" class="post-card">

                            <!-- image -->
                            <div class="post-card-img-wrapper">
                                <img src="<?php echo $card_img_url; ?>" class="page-link-card-img" />
                            </div>
                            <!-- image end -->

                            <!-- overlay -->
                            <span class="post-card-overlay">

                                <!-- overlay label -->
                                <span class="post-card-overlay-label">
                                    <h3><?php echo $card_title; ?></h3>
                                </span>
                                <!-- overlay label end -->

                            </span>
                            <!-- overlay end -->

                            <!-- clipping mask -->
                            <div class="post-card-clip-mask">
                            </div>
                            <!-- clipping mask end -->
                        </a>

                        <!-- static title -->
                        <h3><a href="<?php echo $card_url; ?>"><?php echo $card_title; ?></a>
                        </h3>
                        <!-- static title end -->
                    </div>
                    <!-- container end -->
                <?php endif; ?>
            </div>
        <?php endif;
    endforeach;
        ?>
            
</div>