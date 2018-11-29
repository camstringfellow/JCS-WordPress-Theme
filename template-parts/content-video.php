<?php

$video_url          = get_field('video_url');

?>

<!--=== VIDEOS ===-->
<section id="video">
    <div class="container">
        <div class="row">

            <div class="col-sm-8 offset-2">
                <h2>Corey's <span id="purple">Videos</span></h2>
                <iframe width="100%" height="415" src="<?php echo $video_url; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div><!-- col -->

        </div><!-- row -->
    </div><!-- container -->
</section><!-- video -->