<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proving
 */

?>


	</div><!-- #content -->
	<?php if(is_page_template('homepage.php') || is_page_template('contact.php')) {?>
	<div class="parallax">
		<div class="container">
			<!-- <div class="contact-footer">
				<div class="contact-title">
					<?php dynamic_sidebar('contact_title') ?>
				</div>

				<div class="f-contact-left">
					<?php dynamic_sidebar('contact-left') ?>
				</div>
				<div class="f-contact-right">
					<?php dynamic_sidebar('contact-right') ?>
				</div>
				<div class="clear"></div>
			</div> -->
		</div>
	</div>
	<?php } ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="footer-inner">
				<div class="footers">
					<p>&copy; <?php echo date("Y");?> Shimmy Shimmy Coconut  |  Terms of Service  |  Privacy  |  <a href="http://www.shimmyshimmycoconut.co.uk/contact/">Contact Us</a></p>
				</div>
				<div class="clear"></div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/js/jquery-2.1.1.js"></script>
<script src="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/js/main.js"></script> <!-- Resource jQuery -->
<script src="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/js/owl.carousel.js"></script>
<script src="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/js/viewportchecker.js"></script>
<script type="text/javascript">
if ($(window).width() > 400) {
jQuery(document).ready(function() {
	jQuery('.fade-in').addClass("hidden").viewportChecker({
	   	classToAdd: 'visible animated flipInX', // Class to add to the elements when they are visible
	   	offset: 200
	   });
	jQuery('.left-in').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
	    offset: 400
	   });
	jQuery('.left-in-q').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
	    offset: 200
	   });
	jQuery('.right-in-q').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInRight', // Class to add to the elements when they are visible
	    offset: 200
	   });
	jQuery('.right-in').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInRight', // Class to add to the elements when they are visible
	    offset: 400
	   });
});
}
</script>
<script>
		$(document).ready(function(){
      		$("#testimonial").owlCarousel({
      			items:1,
      			autoPlay:true,
      			pagination:true
      		});
     	});
</script>


</body>
</html>
