<div class="row row-gap-sm">
    <?php
    $card_fields = array(
        'card_link_3col_1',
        'card_link_3col_2',
        'card_link_3col_3',
    );

    foreach ($card_fields as $index => $field) :
        $card = get_field($field);
        if ($card) :
            $card_id = $card->ID;
            $ft_img_url = get_the_post_thumbnail_url($card_id);
            $card_url = get_post_permalink($card_id);
            $card_title = esc_html($card->post_title);
    ?>
            <div class="page-link-card-img-wrapper col-lg-4">
                <?php if ($ft_img_url) : ?>
                    <div class="post-card-container">
                        <a href="<?php echo $card_url; ?>" class="post-card">
                            <div class="post-card-img-wrapper">
                                <img src="<?php echo $ft_img_url; ?>" class="page-link-card-img" />
                            </div>
                            <span class="post-card-overlay">
                                <span class="post-card-overlay-label">
                                    <h3><?php echo $card_title; ?></h3>
                                </span>
                            </span>
                            <div class="post-card-clip-mask"></div>
                        </a>
                        <h3><a href="<?php echo $card_url; ?>"><?php echo $card_title; ?></a></h3>
                    </div>
                <?php endif; ?>
            </div>
    <?php
        endif;
    endforeach;
    ?>
</div>