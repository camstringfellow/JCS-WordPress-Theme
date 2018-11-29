<?php 

$about_corey_image      = get_field('about_corey_image');
$about_corey_text       = get_field('about_corey_text');

?>

<!--=== ABOUT COREY ===-->
<section id="corey">
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <h2>About <span id="purple">Corey</span></h2>
                <p class="lead"><?php echo $about_corey_text; ?></p>
            </div>

            <div class="col-sm-6">
                <img src="<?php echo $about_corey_image['url']; ?>" alt="<?php echo $about_corey_image['alt']; ?>">
            </div>

        </div><!-- row -->
    </div><!-- container -->
</section><!-- corey -->