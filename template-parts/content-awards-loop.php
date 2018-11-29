
   <!--=== AWARDS LOOP ===-->
   <section id="awards">
    <div class="container">
        <div class="row">

            <div class="col-sm-8 offset-2">

                <?php $loop = new WP_Query( array( 'post_type' => 'recipients', 'orderby' => 'post_id', 'order' => 'DSC' ) ); ?>

                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
               
                <?php
                    $recipient_title_1      = get_field('recipient_title_1');
                    $recipient_name_1      = get_field('recipient_name_1');
                    $recipient_image_1      = get_field('recipient_image_1');
                    $recipient_title_2      = get_field('recipient_title_2');
                    $recipient_name_2      = get_field('recipient_name_2');
                    $recipient_image_2      = get_field('recipient_image_2');
                    $recipient_title_3      = get_field('recipient_title_3');
                    $recipient_name_3      = get_field('recipient_name_3');
                    $recipient_image_3      = get_field('recipient_image_3');
                    $recipient_title_4      = get_field('recipient_title_4');
                    $recipient_name_4      = get_field('recipient_name_4');
                    $recipient_image_4      = get_field('recipient_image_4');
                    $recipient_title_5      = get_field('recipient_title_5');
                    $recipient_name_5      = get_field('recipient_name_5');
                    $recipient_image_5      = get_field('recipient_image_5');
                    $recipient_title_6      = get_field('recipient_title_6');
                    $recipient_name_6      = get_field('recipient_name_6');
                    $recipient_image_6      = get_field('recipient_image_6');
                ?>
               
                    <h1><?php the_title(); ?></h1>

                   <!-- NEW RECIPIENT -->
                    <?php  if( !empty($recipient_image_1) ) : ?>
                    <div class="row recipient">
                        <div class="col-sm-8">
                            <!-- Recipient Title-->
                            <h2><?php echo $recipient_title_1; ?></h2>
                            <!-- Recipient Name-->
                            <h3><?php echo $recipient_name_1; ?></h3>
                        </div>
                        <div class="col-sm-4">
                            <!-- Recipient Image -->
                            <img src="<?php echo $recipient_image_1['url']; ?>" alt="<?php echo $recipient_image_1['alt']; ?>">
                        </div><!-- col --> 
                    </div><!-- row -->
                    <?php endif; ?>

                   <!-- NEW RECIPIENT -->
                   <?php  if( !empty($recipient_image_2) ) : ?>
                    <div class="row recipient">
                        <div class="col-sm-8">
                            <!-- Recipient Title-->
                            <h2><?php echo $recipient_title_2; ?></h2>
                            <!-- Recipient Name-->
                            <h3><?php echo $recipient_name_2; ?></h3>
                        </div>
                        <div class="col-sm-4">
                            <!-- Recipient Image -->
                            <img src="<?php echo $recipient_image_2['url']; ?>" alt="<?php echo $recipient_image_2['alt']; ?>">
                        </div><!-- col --> 
                    </div><!-- row -->
                    <?php endif; ?>

                   <!-- NEW RECIPIENT -->
                    <?php  if( !empty($recipient_image_3) ) : ?>
                    <div class="row recipient">
                        <div class="col-sm-8">
                            <!-- Recipient Title-->
                            <h2><?php echo $recipient_title_3; ?></h2>
                            <!-- Recipient Name-->
                            <h3><?php echo $recipient_name_3; ?></h3>
                        </div>
                        <div class="col-sm-4">
                            <!-- Recipient Image -->
                            <img src="<?php echo $recipient_image_3['url']; ?>" alt="<?php echo $recipient_image_3['alt']; ?>">
                        </div><!-- col --> 
                    </div><!-- row -->
                    <?php endif; ?>

                    <!-- NEW RECIPIENT -->
                    <?php  if( !empty($recipient_image_4) ) : ?>
                    <div class="row recipient">
                        <div class="col-sm-8">
                            <!-- Recipient Title-->
                            <h2><?php echo $recipient_title_4; ?></h2>
                            <!-- Recipient Name-->
                            <h3><?php echo $recipient_name_4; ?></h3>
                        </div>
                        <div class="col-sm-4">
                            <!-- Recipient Image -->
                            <img src="<?php echo $recipient_image_4['url']; ?>" alt="<?php echo $recipient_image_4['alt']; ?>">
                        </div><!-- col --> 
                    </div><!-- row -->
                    <?php endif; ?>

                   <!-- NEW RECIPIENT -->
                    <?php  if( !empty($recipient_image_5) ) : ?>
                    <div class="row recipient">
                        <div class="col-sm-8">
                            <!-- Recipient Title-->
                            <h2><?php echo $recipient_title_5; ?></h2>
                            <!-- Recipient Name-->
                            <h3><?php echo $recipient_name_5; ?></h3>
                        </div>
                        <div class="col-sm-4">
                            <!-- Recipient Image -->
                            <img src="<?php echo $recipient_image_5['url']; ?>" alt="<?php echo $recipient_image_5['alt']; ?>">
                        </div><!-- col --> 
                    </div><!-- row -->
                    <?php endif; ?>

                   <!-- NEW RECIPIENT -->
                    <?php  if( !empty($recipient_image_6) ) : ?>
                    <div class="row recipient">
                        <div class="col-sm-8">
                            <!-- Recipient Title-->
                            <h2><?php echo $recipient_title_6; ?></h2>
                            <!-- Recipient Name-->
                            <h3><?php echo $recipient_name_6; ?></h3>
                        </div>
                        <div class="col-sm-4">
                            <!-- Recipient Image -->
                            <img src="<?php echo $recipient_image_6['url']; ?>" alt="<?php echo $recipient_image_6['alt']; ?>">
                        </div><!-- col --> 
                    </div><!-- row -->
                    <?php endif; ?>
                
                <?php endwhile; ?>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section>
