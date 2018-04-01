<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package proving
 */

get_header(); ?>

	<div class="breadcrumb">
		<div class="container">
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
				<?php if( get_post_type() == 'coporate' ) { ?>
			    	<a href="<?php echo esc_url (home_url('/')) ?>">Home</a> > <a href="<?php echo esc_url (home_url('/')) ?>coperate-events">Coporate Events</a> > <?php  the_title(); ?>
			    <?php } ?>
			    <?php if( get_post_type() == 'dry' ) { ?>
			    	<a href="<?php echo esc_url (home_url('/')) ?>">Home</a> > <a href="<?php echo esc_url (home_url('/')) ?>dry-hire">Dry Hire</a> > <?php  the_title(); ?>
			    <?php } ?>
			    <?php if( get_post_type() == 'live' ) { ?>
			     	<a href="<?php echo esc_url (home_url('/')) ?>">Home</a> > <a href="<?php echo esc_url (home_url('/')) ?>live-events">Live Events</a> > <?php  the_title(); ?>
			    <?php } ?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="corporate service">
		<div class="white-bg">
			<div class="container">
				<div class="main-service">
					<h1><?php  the_title(); ?></h1>
					<?php
					while ( have_posts() ) : the_post();

					the_content();

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
		<div class="green-bg">
			<div class="container">
				<div class="strapline">
					<span class="qoute">Need advice or a quote? Get in touch today</span><div class="btn">Contact Us</div>
				</div>
			</div>
		</div>

<?php
get_footer();
