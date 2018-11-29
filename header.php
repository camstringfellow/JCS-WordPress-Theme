<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JCS_Memorial
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawsome icons -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/fontawesome-free-5.3.1/css/fontawesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <!-- Type Kit -->
    <link rel="stylesheet" href="https://use.typekit.net/fdm1qbx.css">

	<?php wp_head(); ?>
	
    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jcs-memorial' ); ?></a>

    <!-- HEADER -->
    <header class="site-header" role="banner">

        <!-- NAVBAR -->
        <div class="navbar navbar-expand-md bg-light navbar-light fixed-top">

          <!-- Brand -->
          <a class="navbar-brand" href="/"><span id="purple">JCS Memorial</span></a>

          <!-- Toggler/collapsibe Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">
           
            <?php
                wp_nav_menu( array(
                
                        'theme_location'    => 'primary',
                        'container'         => 'ul',
                        'container_class'   => 'navbar', //not doing anything?
                        'menu_class'        => 'nav navbar-nav', 
                
                ) );
            ?>
          
          <!-- Navbar links ===  'container_class'   => 'collapse navbar-collapse', -->
         
          </div>
              
        </div><!-- navbar -->

    </header>
