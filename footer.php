<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JCS_Memorial
 */

?>

<?php wp_footer(); ?>
 
<!--=== FOOTER ===-->
<footer>
    <div class="container">
        <div class="row">

            <div class="col-sm-3">
                <p class="lead"><a href="/">JCS Memorial</a></p>
            </div><!-- col -->

            <div class="col-sm-6">
                <nav class="navbar-expand">
                    <?php
                        wp_nav_menu( array(

                                'theme_location'    => 'primary',
                                'container'         => 'ul',
                                'container_class'   => 'navbar', //not doing anything?
                                'menu_class'        => 'nav navbar-nav', 

                        ) );
                    ?>
                </nav>
            </div><!-- col -->

            <div class="col-sm-3">
                <p>&copy; JCS Memorial Scholarship Fund</p>
            </div><!-- col -->

        </div><!-- row -->
    </div><!-- container -->
</footer>
 
<!--=== BOOTSTRAP CORE JAVASCRIPT ===-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.1.min.js"></script>
<!-- used for nav dropdown? -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
