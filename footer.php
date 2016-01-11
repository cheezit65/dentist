<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		<div id="main_footer">
        	<div id="footer">
            	<div id="foot1">
                	<img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" /><br />
<span class="copy">© 2014 | Privacy Police</span><br />
<span class="list1">
	<ul>
    	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'navigation_infor' ) ); ?>
    </ul>
</span>
                </div>
                <div id="foot2">
                	<span class="address">Address</span><br />
<span class="sco"><?php dynamic_sidebar('sidebar-6'); ?></span>
                </div>
                <div id="foot3">
                		<span class="address" >Contact Us</span><br />
                        <span class="sco"><?php dynamic_sidebar('sidebar-7'); ?>
                        </span>
                </div>
                <div id="foot4">
                <span class="address">Follow Us</span><br />
              <span class="mon"> <?php dynamic_sidebar('sidebar-9'); ?> </span>
                </div>
            </div><div style="clear:both;"></div>
        </div>
    </div>
</body>
</html>

	<?php wp_footer(); ?>
