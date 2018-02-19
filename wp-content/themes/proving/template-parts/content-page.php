<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package proving
 */

?>

		<?php the_title( '<h1 class="entry-title">', '</h1><img class="swiggle" src="/wp-content/themes/proving/img/swiggle.svg">' ); ?>

		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'proving' ),
				'after'  => '</div>',
			) );
		?>
