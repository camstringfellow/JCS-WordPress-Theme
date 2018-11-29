<?php

/* Template Name: Home Page */

get_header();

?>

<!--=== HERO ===-->
<?php get_template_part( 'template-parts/content', 'main-hero' ); ?>

<!--=== FOLLOW ===-->
<?php get_template_part( 'template-parts/content', 'follow' ); ?>

<!--=== SCHOLARSHIP INFO ===-->
<?php get_template_part( 'template-parts/content', 'info' ); ?>

<!--=== SCHOLARSHIP STATS ===-->
<?php get_template_part( 'template-parts/content', 'stats' ); ?>

<!--=== CURRENT SCHOLARSHIP RECIPIENTS ===-->
<?php get_template_part( 'template-parts/content', 'recipients' ); ?>

<!--=== VIDEO ===-->
<?php get_template_part( 'template-parts/content', 'video' ); ?>

<!--=== ABOUT COREY ===-->
<?php get_template_part( 'template-parts/content', 'about' ); ?>

<?php 

get_footer(); 

?>

