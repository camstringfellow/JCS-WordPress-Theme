<?php

$scholarship_year       = get_field('scholarship_year');
$sv_soccer_name         = get_field('sv_soccer_name');
$sv_soccer_image        = get_field('sv_soccer_image');
$sv_art_name            = get_field('sv_art_name');
$sv_art_image           = get_field('sv_art_image');
$cn_soccer_name         = get_field('cn_soccer_name');
$cn_soccer_image        = get_field('cn_soccer_image');

?>


<!--=== RECIPIENTS ===-->
<section id="recipients">
    <div class="container">
        <h2><span id="purple"><?php echo $scholarship_year; ?></span> Scholarship Recipients</h2>
        <div class="row">

            <div class="col-sm-4">
                <h3>Spring Valley Soccer</h3>
                <img src="<?php echo $sv_soccer_image['url']; ?>" alt="<?php echo $sv_soccer_image['alt']; ?>">
                <h4 id="purple"><?php echo $sv_soccer_name; ?></h4>
            </div><!-- col -->

            <div class="col-sm-4">
                <h3>Spring Valley Art &amp; Writing</h3>
                <img src="<?php echo $sv_art_image['url']; ?>" alt="<?php echo $sv_art_image['alt']; ?>">
                <h4 id="purple"><?php echo $sv_art_name; ?></h4>
            </div><!-- col -->

            <div class="col-sm-4">
                <h3>Cardnial Newman Soccer</h3>
                <img src="<?php echo $cn_soccer_image['url']; ?>" alt="<?php echo $cn_soccer_image['alt']; ?>">
                <h4 id="purple"><?php echo $cn_soccer_name; ?></h4>
            </div><!-- col -->

        </div><!-- row -->
    </div><!-- container -->
</section><!-- recipients -->