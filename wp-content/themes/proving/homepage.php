<?php
/**
 * Template Name: Homepage
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


			<div class="hero top">
				<div class="hero-blue__content">
					<h1>Meet the <span><br/>Shimmys</span></h1>
					<img class="swiggle" src="/wp-content/themes/proving/img/swiggle.svg"/>
					<h2>Crazy good for you<br>inside and out</h2>
				</div>
				<img class="hero__image" src="/wp-content/themes/proving/img/shimmy-products.png"/>
			</div>

			<div class="family">
				<div class="family-picture">
					<img src="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/img/family-pic.jpg"/>
				</div>

				<div class="hero pink">
					<div class="pink__content">
						<p>100% Raw, Kefir Probiotic products</p>
						<div class="bullet"></div>
						<p>So fresh and natural with superior  health benefits</p>
						<div class="bullet"></div>
						<p>Naturally fermented</p>
						<h2>Gluten free,<br>dairy free</h2>
					</div>
				</div>
			</div>






		<div class="home__products">
			<h2>Our shimmy products</h2>
			<img class="swiggle" src="/wp-content/themes/proving/img/swiggle.svg"/>
			<div class="container">
				<div class="icons">
					<ul>
						<?php
							$arr = array(1, 2, 3);
							foreach ($arr as &$value) {
								$link = get_field('service_link_' . $value);
								$image = get_field('service_img_' . $value);
								$title = get_field('service_title_' . $value);
								$info = get_field('service_content_' . $value);
								echo "<li><div class='image_top'><a href='$link'><img src='$image'/></a></div><div class='icon_content'><h3>$title</h3><div class='product__info'>$info</div><a class='add' href='$url'><span>+ ADD</span></a></div></li>";
							}
							?>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
