<?php
/**
 * Template Name: Innerpage
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

$back =  get_field('banner');


get_header(); ?>

	<div class="inner">
		<div class="banner" style="background-image:url('<?php echo $back ?>')">
		
		</div>
		<div class="white-bg">
			<div class="container">
				<div class="home-inner">
					<div class="home-title">
						<h1><?php the_title() ?></h1>
					</div>
					<?php
					while ( have_posts() ) : the_post();

					the_content();

					endwhile; // End of the loop.
					?>
			<div class="button-sec-2">
				<a href="<?php echo esc_url( home_url('/')) ?><?php echo the_field('btn_link_1')?>" class="btn-b btn-b-1"><?php echo the_field('btn_text_1')?></a>
				<a href="<?php echo esc_url( home_url('/')) ?><?php echo the_field('btn_link_2')?>" class="btn-b btn-b-2"><?php echo the_field('btn_text_2')?></a>
				<a href="<?php echo esc_url( home_url('/')) ?><?php echo the_field('btn_link_3')?>" class="btn-b btn-b-3"><?php echo the_field('btn_text_3')?></a>
				<div class="clear"></div>
			</div>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
