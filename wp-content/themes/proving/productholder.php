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


<!-- <ul class="products">
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
</ul> -->
<!--/.products-->

<!-- <div class="home__products">
	<h2>Our shimmy products</h2>
	<img class="swiggle" src="/wp-content/themes/proving/img/swiggle.svg"/>
	<div class="container">
		<div class="icons">
			<ul>
				<?php
					$arr = array(1, 2, 3);
					foreach ($arr as &$value) {
						$link = "/" . get_field('service_link_' . $value, 2);
						$image = get_field('service_img_' . $value, 2);
						$title = get_field('service_title_' . $value, 2);
						$info = get_field('service_content_' . $value, 2);
						echo "<li><div class='image_top'><a href='$link'><img src='$image'/></a></div><div class='icon_content'><h3>$title</h3><div class='product__info'>$info</div><a class='add' href='$url'><span>+ ADD</span></a></div></li>";
					}
					?>
			</ul>
		</div>
	</div>
	<br class="clearfix"/>
</div> -->

<div class="home__products">
	<h2>Our shimmy products</h2>
	<img class="swiggle" src="/wp-content/themes/proving/img/swiggle.svg"/>
	<div class="container">
		<div class="icons">
			<ul>
				<?php
					$arr = array(1, 2, 3);
					foreach ($arr as &$value) {
						$link = "/" . get_field('service_link_' . $value, 2);
						$image = get_field('service_img_' . $value, 2);
						$title = get_field('service_title_' . $value, 2);
						$info = get_field('service_content_' . $value, 2);
						echo "<li><div class='image_top'><a class='home__products--link' href='$link'><div class='home__products--background'></div><img src='$image'/></a></div><div class='icon_content'><h3>$title</h3><div class='product__info'>$info</div><a class='add' href='$link'><span>READ MORE</span></a></div></li>";
					}
					?>
			</ul>
		</div>
	</div>
	<br class="clearfix"/>
</div>

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
