<?php

$site_title             = get_field('site_title');
$site_subtitle          = get_field('site_subtitle');

?>

<!--=== HERO ===-->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">

                <div class="col-sm-12 hero-text">
                    <h1><?php echo $site_title; ?></h1>
                    <p><?php echo $site_subtitle; ?></p>
                    <p><a class="btn btn-lg" href="http://jcsmemorial.org/contact/" role="button">Donate &raquo;</a></p>
                </div><!-- col-sm-7 -->

            </div><!-- row -->
        </div><!-- container -->
    </article>
</section>