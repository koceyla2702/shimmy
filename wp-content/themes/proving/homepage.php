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

			<!-- <div class="family">
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
			</div> -->

			<div class="home__info pink">
				<span class="pink-title">RAW, KEFIR,<br/>PROBIOTIC PRODUCTS</span>
				<img class="swiggle-blue" src="/wp-content/themes/proving/img/swiggle-blue.svg"/>
				<span class="pink-title">GLUTEN AND<br/>DAIRY FREE</span>
				<img class="swiggle-blue" src="/wp-content/themes/proving/img/swiggle-blue.svg"/>
				<span class="pink-title">FRESHLY MADE<br/>IN SMALL BATCHES</span>
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
								echo "<li><div class='image_top'><a class='home__products--link' href='$link'><div class='home__products--background'></div><img src='$image'/></a></div><div class='icon_content'><h3>$title</h3><div class='product__info'>$info</div><a class='add' href='$link'><span>READ MORE</span></a></div></li>";
							}
							?>
					</ul>
				</div>
			</div>
			<br class="clearfix"/>
		</div>

		<div class="content-block pink">
			<h3>WHAT IS KEFIR?</h3>
			<p>A health food, kefir contains many probiotic, bioactive compounds and as many as 30 strains of good bacteria that can help fight against illness, bacteria, carcinogens and more. It is a delicious, tangy drink often made with kefir grains and fermented milk.</p>
		</div>

		<div class="content-block teal">
			<h3>WHY ARE WE DIFFERENT?</h3>
			<p>Shimmy Shimmy Coconut produces kefir made with fresh young coconut water/meat fermented in a warm environment with good bacteria to create super high level probiotic products that are fantastic for the gut and wellbeing of the body.<br/>  They are lactose and gluten free – no dairy or grains used.</p>
		</div>

		<div class="content-block pink">
			<h3>WHAT ARE THE BENEFITS?</h3>
			<p>Coconut kefir water and yoghurt supplies your gut with really beneficial bacteria that improve your immune system, digestive system and can help fight infection.</p>
			<p>There are billions of “gut-friendly” bacteria in every bottle and jar, containing vitamins  B & C, Omega 3 & 6, magnesium, potassium, calcium and iron.</p>
			<p>It aids the breakdown and removal of harmful toxins and supports cell regeneration.</p>
		</div>

	</div><!-- #primary -->

<?php
get_footer();
