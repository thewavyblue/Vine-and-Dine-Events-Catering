<?php
$homepage_contact_form = get_field('homepage_contact_form');
?>

    <div class="row justify-content-center">
        <div class="col-lg-12 col-pad">
        
                <h2 id="request-a-brochure">Request a brochure</h2>
                <p>Submitting your details below ensures we can supply you with the most relevant brochure for your requirements.</p>
                <?php echo do_shortcode('[custom_wpform_with_acf field_name="homepage_contact_form"]'); ?>
        
        </div>
    </div>
