<?php
/**
 * The template for displaying a 404 error page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<div id="primary" class="content-area">
		<div class="main-content" role="main">
            <div id="content-404">
			
                <h2>Not what you expected to find?</h2>
                <p>We're sorry! That page doesn't exist or can't be found.  But no worries! You can browse our <a href ="<?php echo site_url('/blog/') ?>"><span>blog</span></a> or check out our featured <a href="<?php echo site_url('/case-studies/') ?>"><span>work</span>.</a></p>
            </div><!-- #content-404      -->
            <div id="credit">
                <p> photo by rex-way@unsplash.com</p>
            </div>      
        </div><!-- .main-content      -->
	</div><!-- #primary -->

<?php get_footer(); ?>
