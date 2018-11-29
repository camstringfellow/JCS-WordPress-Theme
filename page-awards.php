<?php

/* Template Name: Awards Page */

get_header();

?>

<!--=== HERO ===-->
<?php get_template_part( 'template-parts/content', 'awards-hero' ); ?>

<!--=== AWARDS ===-->
<?php get_template_part( 'template-parts/content', 'awards-loop' ); ?>

<?php 

get_footer(); 

?>