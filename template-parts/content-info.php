<?php 

$scholarship_info_image = get_field('scholarship_info_image');
$scholarship_info_title = get_field('scholarship_info_title');
$scholarship_info_text  = get_field('scholarship_info_text');

?>


<!--=== SCHOLARSHIP INFO ===-->
<section id="scholarship-info">
    <div class="container">

        <div class="section-header">
           
            <?php  if( !empty($scholarship_info_image) ) : ?>
            
            <img src="<?php echo $scholarship_info_image['url']; ?>" alt="<?php echo $scholarship_info_image['alt']; ?>">
            
            <?php endif; ?>
            
            <h2><?php echo $scholarship_info_title; ?></h2>
        </div>

        <p class="lead"><?php echo $scholarship_info_text; ?></p>

    </div><!-- container -->
</section><!-- scholarship-info -->