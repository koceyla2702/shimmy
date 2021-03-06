<?php
/**
 * The template for displaying all pages.
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

	<div class="white-bg">
			<?php if(is_product()){ ?>
				<!-- <div class="banner">
					<img src="<?php echo get_field('product_img')?>" />
				</div> -->
			<?php } ?>
			<?php if(is_product()){ ?>
				<div class="yellow-bg">
					<div class="container">
						<div class="product-inner">
							<?php woocommerce_content(); ?>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="white-bg">
					<!-- <div class="container">
						<div class="other-title">
							<h2>We have plenty more</h2>
							<img class="swiggle" src="/wp-content/themes/proving/img/swiggle.svg">
						</div>
						<div class="rel-product-holder">
							<div class="rel-prod rel-1">
								<a href="<?php echo the_field('related_product_link_1') ?>">
									<img src="<?php echo get_field('related_product_1') ?>" />
									<div class="rel-title"><?php the_field('related_product_title_1') ?></div>
								</a>
							</div>
							<div class="rel-prod rel-2">
								<a href="<?php echo the_field('related_product_link_2') ?>">
									<img src="<?php echo get_field('related_product_2') ?>" />
									<div class="rel-title"><?php the_field('related_product_title_2') ?></div>
								</a>
							</div>
							<div class="clear"></div>
						</div>
					</div> -->

					<div class="home__products related-products">
						<h2>We have plenty more</h2>
						<img class="swiggle" src="/wp-content/themes/proving/img/swiggle.svg"/>
						<div class="container max-width-800">
							<div class="icons">
								<ul>
									<li><div class='image_top'><a href='<?php echo the_field('related_product_link_1') ?>'><img src='<?php echo get_field('related_product_1') ?>'/></a></div><div class='icon_content'><h3><?php the_field('related_product_title_1') ?></h3><a class='add' href='<?php echo the_field('related_product_link_1') ?>'><span>+ ADD</span></a></div></li>
									<li><div class='image_top'><a href='<?php echo the_field('related_product_link_2') ?>'><img src='<?php echo get_field('related_product_2') ?>'/></a></div><div class='icon_content'><h3><?php the_field('related_product_title_2') ?></h3><a class='add' href='<?php echo the_field('related_product_link_2') ?>'><span>+ ADD</span></a></div></li>


								</ul>
							</div>
						</div>
						<br class="clearfix"/>
					</div>

				</div>
			<?php } else { ?>
				<div class="container">
					<?php woocommerce_content(); ?>
				</div>
			<?php } ?>
		</div>
	</div>

<?php
get_sidebar();
get_footer();
