<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

  <div id="banner">
        	 <?php dynamic_sidebar('sidebar-5'); ?>
        </div>
        <div id="main_contentarea">
        	<div id="contentarea">
            
            <?php
$args = array (
    'post_type'              => 'treatmentmsg',    
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

            	<div align="center">
                	<span class="provide"><?php echo $query->post->post_title;?></span><br />
<span class="lorem"><?php echo $query->post->post_content;?></span>
                </div>
                
                <?php  }    }  ?>
                <div id="option">
                <?php
$args = array (
    'post_type'              => 'Welcome',    
    'order'                  => 'ASC',
    'posts_per_page'         => '2',
);

// The Query
$query = new WP_Query( $args );
// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
?>  

                	<div id="option1" align="left">
                    	<span class="opt_img">  <?php echo the_post_thumbnail(); ?></span>
                        <span class="welcome"> <?php echo $query->post->post_title;?></span><br />
<span class="dolor"><?php echo $query->post->post_content;?></span><br /><br />

<span class="read"><a href="#">Read More</a></span>
                    </div>
                   <?php  }   }  ?>
                    <div id="option3">
                    	<div id="clock" align="center">
                        	<span class="clock_img"><img src="<?php echo get_template_directory_uri(); ?>/images/clock.png" width="38" height="42" border="0" align="absbottom" /></span><span class="office">Office Hours:</span>
                        </div>
                        <div id="clock1" align="center">
                        	<span class="mon"><?php dynamic_sidebar('sidebar-8'); ?> </span>

                        </div>
                        <span class="welcome">Testimonial</span><br />
                        
                        <?php
$args = array (
    'post_type'              => 'testimonial',    
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
                        
                        <div id="test">
                        <div id="testimonial">
                        	<div id="testimonial_inner">
                            	<?php echo $query->post->post_content;?>
                            </div>
                  </div>
                  <div id="icon">
                            	<img src="<?php echo get_template_directory_uri(); ?>/images/icon.png" />
                            </div><br />
                        <span class="peter"><?php echo $query->post->post_title;?></span>
                        </div>
                        
                        <?php   }   }  ?>
                    </div><div style="clear:both;"></div>
                </div>
            </div><div style="clear:both;"></div>
        </div>
<?php
//get_sidebar();
get_footer();
