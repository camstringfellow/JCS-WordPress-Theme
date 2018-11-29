<?php

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<!--=== DONATE HERO ===-->
<?php if ( has_post_thumbnail() ) { ?>

<section id="awards-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php echo $thumbnail_url; ?>'); background-repeat: repeat; background-size: cover; margin-top: 56px; padding: 100px 0;" data-type="background" data-speed="5">
    <div class="col-sm-12 hero-text">
        <h1><?php the_title(); ?></h1>
    </div><!-- col-sm-7 -->
</section>

<?php } else { //Fall back image ?>

<section id="awards-hero" data-type="background" data-speed="5">
    <div class="col-sm-12 hero-text">
        <h1>Contact Page</h1>
    </div><!-- col-sm-7 -->
</section>

<?php } ?>