<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
	<div id="wrapper">
    	<div id="main_header">
        	<div id="main_header1">
            	<div id="header1">
                
                	<?php
$args = array (
    'post_type'              => 'Logo',    
    'order'                  => 'ASC',
    'posts_per_page'         => '1',
);

// The Query
$query = new WP_Query( $args );
// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
?>  
                	<div id="header1_left">
                    	<a href="index.html"><?php echo the_post_thumbnail(); ?></a>
                    </div>
                    <?php   }  }   ?>
                    <div id="header1_right">
                    SCHEDULE<br />

APPOINTMENT
                    </div><div style="clear:both;"></div>
                </div>
            </div>
            <div id="main_navigation">
            	<div id="navigation">
                	<div id="navigation_left" class="list">
                    	<ul>
                        	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'navigation_infor' ) ); ?>
                        </ul>
                    </div>
                    <div id="navigation_right">
                    	
                   <?php dynamic_sidebar('sidebar-4'); ?>

                    </div><div style="clear:both;"></div>
                </div>
            </div>
        </div>