<?php
/**
 * Template Name: Product Holder 
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

	<div class="home">
		<!-- <div class="banner">
			<img src="<?php echo get_field('product_range_img') ?>" />			
		</div> -->


<ul class="products">
	<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
</ul><!--/.products-->

<br style="clear: both;"/><br style="clear: both;"/>




		<!--div class="blue-bg">
			<div class="container">
				<div class="pholder pholder-1">
					<div class="pholder-left">
						<?php the_field('product_summary_1')?>
					</div>
					<div class="pholder-right">
						<img src="<?php echo get_field('product_img_1')?>" />
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="green-bg">
			<div class="container">
				<div class="pholder pholder-2">
					<div class="pholder-left">
						<img src="<?php echo get_field('product_img_2')?>" />
					</div>
					<div class="pholder-right">
						<?php the_field('product_summary_2')?>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="brown-bg">
			<div class="container">
				<div class="pholder pholder-3">
					<div class="pholder-left">
						<?php the_field('product_summary_3')?>
					</div>
					<div class="pholder-right">
						<img src="<?php echo get_field('product_img_3')?>" />
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div--><!-- #primary -->

<?php
get_footer();
