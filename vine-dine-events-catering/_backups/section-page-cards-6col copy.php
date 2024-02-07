<?php
$plc_left = get_field('page_link_card_left');
$plc_left_page_id = $plc_left->ID;
$plc_left_ft_img_url = get_the_post_thumbnail_url($plc_left_page_id);
$plc_left_page_url = get_post_permalink($plc_left_page_id);
$plc_left_page_title = esc_html($plc_left->post_title);


$plc_right = get_field('page_link_card_right');
$plc_right_page_id = $plc_right->ID;
$plc_right_ft_img_url = get_the_post_thumbnail_url($plc_right_page_id);
$plc_right_page_url = get_post_permalink($plc_right_page_id);
$plc_right_page_title = esc_html($plc_right->post_title);
?>

<div class="row row-gap-sm">
<h2 id="what-we-do">What we do</h2>
    <!-- Page Link Card (left) -->
    <div class="page-link-card-img-wrapper col-md-6">

        <?php if ($plc_left) : ?>
            <?php if ($plc_left_ft_img_url) : ?>

                <!-- container -->
                <div class="post-card-container">

                    <!-- contents -->
                    <a href="<?php echo $plc_left_page_url; ?>" class="post-card">

                        <!-- image -->
                        <div class="post-card-img-wrapper">
                            <img src="<?php echo $plc_left_ft_img_url; ?>" class="page-link-card-img" />
                        </div>
                        <!-- image end -->

                        <!-- overlay -->
                        <span class="post-card-overlay">

                            <!-- overlay label -->
                            <span class="post-card-overlay-label">
                                <h3><?php echo $plc_left_page_title; ?></h3>
                            </span>
                            <!-- overlay label end -->

                        </span>
                        <!-- overlay end -->

                        <!-- clipping mask -->
                        <div class="post-card-clip-mask"></div>
                        <!-- clipping mask end -->
                    </a>

                    <!-- static title -->
                    <h3><a href="<?php echo $plc_left_page_url; ?>"><?php echo $plc_left_page_title; ?></a></h3>
                    <!-- static title end -->
                </div>
                <!-- container end -->

            <?php endif; ?>
        <?php endif; ?>
    </div>

    <!-- Page Link Card (left) end -->

    <!-- Page Link Card (right) -->
    <div class="page-link-card-img-wrapper col-md-6">

        <?php if ($plc_right) : ?>
            <?php if ($plc_right_ft_img_url) : ?>

                <!-- container -->
                <div class="post-card-container">

                    <!-- contents -->
                    <a href="<?php echo $plc_right_page_url; ?>" class="post-card">

                        <!-- image -->
                        <div class="post-card-img-wrapper">
                            <img src="<?php echo $plc_right_ft_img_url; ?>" class="page-link-card-img" />
                        </div>
                        <!-- image end -->

                        <!-- overlay -->
                        <span class="post-card-overlay">

                            <!-- overlay label -->
                            <span class="post-card-overlay-label">
                                <h3><?php echo $plc_right_page_title; ?></h3>
                            </span>
                            <!-- overlay label end -->

                        </span>
                        <!-- overlay end -->

                        <!-- clipping mask -->
                        <div class="post-card-clip-mask"></div>
                        <!-- clipping mask end -->
                    </a>

                    <!-- static title -->
                    <h3><a href="<?php echo $plc_right_page_url; ?>"><?php echo $plc_right_page_title; ?></a></h3>
                    <!-- static title end -->
                </div>
                <!-- container end -->

            <?php endif; ?>
        <?php endif; ?>
    </div>

    <!-- Page Link Card (right) end -->

</div>