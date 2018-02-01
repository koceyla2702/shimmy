<?php
/**
 * Template Name: Homepage2
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


$slider_1 = get_field('slider_1');
$slider_2 = get_field('slider_2');
$slider_3 = get_field('slider_3');

get_header(); ?>

	<div class="home">
		<div class="slider">
			 <section class="cd-hero">
				<ul class="cd-hero-slider autoplay">
					<?php if(get_field('slider_1')) {?>
						<li class="selected">
							<div class="cd-full-width" style="background-image:url('<?php echo $slider_1 ?>');">
								<div class="container">
								<div class="slider-holder">
									<?php echo get_field('slider_content_1') ?>
									<div class="button-sec">
										<a href="<?php echo esc_url( home_url('/')) ?><?php echo the_field('btn_link_1')?>" class="btn-s btn-1"><?php echo the_field('btn_text_1')?></a>
									</div>
								</div>
								</div>
							</div> <!-- .cd-full-width -->
						</li>
					<?php } ?>
					<?php if(get_field('slider_2')) {?>
						<li class="selected">
							<div class="cd-full-width" style="background-image:url('<?php echo $slider_2 ?>');">
<div class="container">
								<div class="slider-holder">
									<?php echo get_field('slider_content_2') ?>
									<div class="button-sec">
										<a href="<?php echo esc_url( home_url('/')) ?><?php echo the_field('btn_link_3')?>" class="btn-s btn-1"><?php echo the_field('btn_text_3')?></a>
										<!--a href="<?php echo esc_url( home_url('/')) ?><?php echo the_field('btn_link_4')?>"class="btn-s btn-2"><?php echo the_field('btn_text_4')?></a-->
										<div class="clear"></div>
									</div>
								</div></div>
							</div> <!-- .cd-full-width -->
						</li>
					<?php } ?>
					<?php if(get_field('slider_3')) {?>
						<li class="selected">
							<div class="cd-full-width" style="background-image:url('<?php echo $slider_3 ?>');">
<div class="container">
								<div class="slider-holder">
									<?php echo get_field('slider_content_3') ?>
									<div class="button-sec">
										<a href="<?php echo esc_url( home_url('/')) ?><?php echo the_field('btn_link_5')?>" class="btn-s btn-1"><?php echo the_field('btn_text_5')?></a>
										<!--a href="<?php echo esc_url( home_url('/')) ?><?php echo the_field('btn_link_6')?>"class="btn-s btn-2"><?php echo the_field('btn_text_6')?></a-->
										<div class="clear"></div>
									</div>
								</div></div>
							</div> <!-- .cd-full-width -->
						</li>
					<?php } ?>
				</ul> <!-- .cd-hero-slider -->
			</section> <!-- .cd-hero -->
		</div>
		<div class="white-bg">
			<div class="container">
				<div class="home-inner">
					<div class="home-title">
						<h1><?php echo the_field('main_title') ?></h1>
						<h2><?php echo the_field('sub_title') ?></h2>
					</div>
					<?php
					while ( have_posts() ) : the_post();

					the_content();

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
		<div class="grey-bg">
			<div class="container">
				<div class="icons">
					<?php if (get_field('brand_title')) {?>
					<div class="icon-title">
						<?php echo get_field('brand_title') ?>
					</div>
					<?php } ?>
					<ul>
						<li>
							<div class="image_top">
								<a href="<?php echo the_field('service_link_1')?>"><img src="<?php echo get_field('service_img_1')?>"/></a>
							</div>
							<div class="icon_content">
								<h3><?php echo the_field('service_title_1') ?></h3>
								<?php echo the_field('service_content_1')?>
								<a class="read-more" href="<?php echo the_field('service_link_1')?>">Find Out More</a>
								<div class="clear"></div>
							</div>
						</li>
						<li>
							<div class="image_top">
								<a href="<?php echo the_field('service_link_2')?>"><img src="<?php echo get_field('service_img_2')?>"/></a>
							</div>
							<div class="icon_content">
								<h3><?php echo the_field('service_title_2') ?></h3>
								<?php echo the_field('service_content_2')?>
								<a class="read-more" href="<?php echo the_field('service_link_2')?>">Find Out More</a>
								<div class="clear"></div>
							</div>
						</li>
						<li>
							<div class="image_top">
								<a href="<?php echo the_field('service_link_3')?>"><img src="<?php echo get_field('service_img_3')?>"/></a>
							</div>
							<div class="icon_content">
								<h3><?php echo the_field('service_title_3') ?></h3>
								<?php echo the_field('service_content_3')?>
								<a class="read-more" href="<?php echo the_field('service_link_3')?>">Find Out More</a>
								<div class="clear"></div>
							</div>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
