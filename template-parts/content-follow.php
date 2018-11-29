<?php 

$facebook_link      = get_field('facebook_link');

?>

<!--=== FOLLOW US ===-->
<section id="follow">
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <p class="lead">Follow us on Facebook.</p>
            </div><!-- col -->

            <div class="col-sm-4">
                <a class="btn btn-lg btn-block" href="<?php echo $facebook_link; ?>">
                    Click here to follow us!
                </a>
            </div><!-- col -->

        </div><!-- row -->
    </div><!-- container -->
</section><!-- follow -->
