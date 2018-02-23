<?php
/**
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package proving
 */

get_header(); ?>

	<div class="light-green-bg">
		<div class="container">
			<div class="inner-title">
				<h1><?php echo get_the_title(); ?></h1>
			</div>
		</div>
	</div>
	<div class="container">
		<?php the_content(); ?>
	</div>
<?php
get_footer();
