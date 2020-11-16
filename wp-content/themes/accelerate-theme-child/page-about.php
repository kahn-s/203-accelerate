<?php
/**
 * The template for displaying the custom about page.
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
<section id ="hero">
    <div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<p> Accelerate is a strategy and marketing agency located in the heart of NYC.  Our goal is to build businesses by making our clients visible and making their customers smile.</p>
			<?php endwhile; // end of the loop. ?>
</section>
	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
            <div id="about-service">
                <?php while ( have_posts() ) : the_post(); 
                    $our_service_1 = get_field('service_type_1');
                    $our_service_2 = get_field('service_type_2');
                    $our_service_3 = get_field('service_type_3');
                    $our_service_4 = get_field('service_type_4');
                    $description_1 = get_field('service_description_1');
                    $description_2 = get_field('service_description_2');
                    $description_3 = get_field('service_description_3');
                    $description_4 = get_field('service_description_4');
				    $service_icon_1 = get_field('service_icon_1');
                    $service_icon_2 = get_field('service_icon_2');
                    $service_icon_3 = get_field('service_icon_3');
                    $service_icon_4 = get_field('service_icon_4');?>
			    <article class="about-services">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                <section id=content-wrapper>
                   
                        <div class="service-right">
                            <h2><?php echo $our_service_1; ?></h2>
                            <?php echo $description_1; ?>
                        </div>      
                        <div class="icon-left">
                            <?php echo wp_get_attachment_image($service_icon_1, $size);?>
                        </div>
                        <div class="service-left">
                            <h2><?php echo $our_service_2; ?></h2>
                            <?php echo $description_2; ?>
                        </div>
                        <div class="icon-right">
                            <?php echo wp_get_attachment_image($service_icon_2, $size);?>
                        </div>
                        <div class="service-right">
                            <h2><?php echo $our_service_3; ?></h2>
                            <?php echo $description_3; ?>
                        </div>
                        <div class="icon-left">   
                            <?php echo wp_get_attachment_image($service_icon_3, $size);?>
                        </div>
                        <div class="service-left">
                            <h2><?php echo $our_service_4; ?></h2>
                            <?php echo $description_4; ?>
                        </div>
                        <div class="icon-right">
                            <?php echo wp_get_attachment_image($service_icon_4, $size);?>
                        </div>
                </section>
                </article>
                <?php endwhile; // end of the loop. ?>
            </div>  <!-- .contact-form -->
        </div><!-- .main-content -->

    </div><!-- #primary -->
  
<nav id="navigation" class="container">
    <div class="center"><p>Interested in working with us?</p>
    <a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
    </div>
</nav>

<?php get_footer(); ?>

	