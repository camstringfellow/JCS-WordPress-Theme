<?php

$stats_image            = get_field('stats_image');
$stats_title            = get_field('stats_title');

?>

<!--=== SCOLARSHIP STATS ===-->
<section id="stats">
    <div class="container">

        <div class="section-header">
            
            <?php  if( !empty($stats_image) ) : ?>
            
            <img src="<?php echo $stats_image['url']; ?>" alt="<?php echo $stats_image['alt']; ?>">
            
            <?php endif; ?>
            
            <h2><?php echo $stats_title; ?></h2>
            
        </div><!-- section-header -->

        <div class="row">
            
            <?php $loop = new WP_Query( array( 'post_type' => 'scholarship_stat', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
            
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="col-sm-3">
                <i class="<?php the_field('scholarship_stats_icon'); ?>"></i>
                <h4><?php the_title(); ?></h4>
            </div>
            
            <?php endwhile; wp_reset_query(); ?>

        </div><!-- row -->
    </div><!-- container -->
</section><!-- stats -->
