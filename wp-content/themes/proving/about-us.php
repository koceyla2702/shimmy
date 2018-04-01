<?php
/**
 * Template Name: About Us
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


			<!-- <div class="hero top">
				<div class="hero-blue__content">
					<h1>Meet the <span><br/>Shimmys</span></h1>
					<img class="swiggle" src="/wp-content/themes/proving/img/swiggle.svg"/>
					<h2>Crazy good for you<br>inside and out</h2>
				</div>
				<img class="hero__image" src="/wp-content/themes/proving/img/shimmy-products.png"/>
			</div> -->

			<div class="light-green-bg">
				<div class="container">
					<div class="inner-title">
						<h1><?php echo get_the_title(); ?></h1>
		                <img class="swiggle" src="/wp-content/themes/proving/img/swiggle.svg">
					</div>
				</div>
			</div>

			<div class="family">
				<div class="family-picture">
					<img src="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/img/family-pic.jpg"/>
				</div>

				<div class="hero pink">
					<div class="pink__content">
						<h2>Who we are</h2>
						<p>We are a family run business making a delicious Probiotic Kefir coconut range of water, yoghurt and raw granola.​</p>
						<div class="bullet"></div>
						<p>All our products are handmade by us at home.​</p>
						<!-- <div class="bullet"></div>
						<p>Naturally fermented</p> -->

					</div>
				</div>
			</div>
			<br class="clearfix"/>

			<!-- <div class="home__info pink">
				<span class="pink-title">RAW, KEFIR,<br/>PROBIOTIC PRODUCTS</span>
				<img class="swiggle-blue" src="/wp-content/themes/proving/img/swiggle-blue.svg"/>
				<span class="pink-title">GLUTEN AND<br/>DAIRY FREE</span>
				<img class="swiggle-blue" src="/wp-content/themes/proving/img/swiggle-blue.svg"/>
				<span class="pink-title">FRESHLY MADE<br/>IN SMALL BATCHES</span>
			</div> -->








		<!-- <div class="home__products">
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
								echo "<li><div class='image_top'><a class='home__products--link' href='$link'><div class='home__products--background'></div><img src='$image'/></a></div><div class='icon_content'><h3>$title</h3><div class='product__info'>$info</div><a class='add' href='$link'><span>READ MORE</span></a></div></li>";
							}
							?>
					</ul>
				</div>
			</div>
			<br class="clearfix"/>
		</div> -->

		<div class="about-content-wrapper">
			<div class="content-block-50 pink">
				<h3>WHY ARE WE DIFFERENT?</h3>
				<p>Our Water and Yoghurt are fermented to create billions of good bacteria.
				100% raw, plant based, natural ingredients. Water and yoghurt are vegan friendly.​</p>

				<p>Our products are not just normal coconut water, it takes 3 days for us to create the product while it ferments using the coconut meat and water mixed with the probiotics.​
				</p>
			</div>

			<div class="content-block-50 teal">
				<h3>WHAT WE BELIEVE</h3>
				<p>We truly believe the answer to a healthy gut and a healthy you is kefir fermentation using the highest source of probiotics. With our guideline amounts this could lead to a happier tummy and happier customer. ​

				 Kefir has so may benefits to the body and we believe this will be a major trend in 2018.​

				The gut can be the route to many problems e.g., skin and we want to help customers eradicate this.</p>
			</div>
	</div>

	</div><!-- #primary -->

<?php
get_footer();
