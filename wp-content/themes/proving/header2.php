<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proving
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Kalam|Raleway|Varela+Round" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/css/animate.css" />
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/css/demo.css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
<script src="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/js/modernizr.js"></script> <!-- Modernizr -->

<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/css/style.css"> <!-- Resource style -->

<link rel="stylesheet" href="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/css/owl.theme.css">
<link rel="stylesheet" href="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/css/shimmy.css">

<link rel="stylesheet" href="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/proving.css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]|| function(){
  (i[r].q=i[r].q|| []).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-76749313-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'proving' ); ?></a> -->

	<!-- <header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="header-top">
				<div class="logo">
					<a href="<?php echo esc_url( home_url('/')) ?>"><img src="<?php echo esc_url( home_url('/')) ?>wp-content/uploads/2017/10/shimmy3.jpg"></a>
				</div>
				<div class="header-right">
					<div class="head-contact">
						<div class="head-top">
							<div class="top-head-cont">
                <i class="fa fa-facebook" aria-hidden="true"></i><i class="fa fa-twitter" aria-hidden="true"></i><i class="fa fa-linkedin" aria-hidden="true"></i>
                <div class="shopcont">
                	<?php if ( is_user_logged_in() ) {?><a href=" http://www.shimmyshimmycoconut.co.uk/my-account/">My Account</a><?php } else { ?><a href=" http://www.shimmyshimmycoconut.co.uk/my-account/">Sign in</a> <?php } ?>   |  <a href="http://www.shimmyshimmycoconut.co.uk/basket/">My Basket <i class="fa fa-shopping-basket" aria-hidden="true"></i></a></div>
              </div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="head-bottom">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
						<!-- <div class="clear"></div> -->
					<!-- </div> -->
				<!-- </div>
				<div class="clear"></div>
			</div>
		</div> -->
	<!-- </header><!-- #masthead -->
    <header class="header">
        <div class="header-logo">
            <a href="<?php echo esc_url( home_url('/')) ?>"><img src="<?php echo esc_url( home_url('/')) ?>wp-content/themes/proving/img/logo.png"/></a>
        </div>
        <div class="nav">
            <nav role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </nav><!-- #site-navigation -->
        </div>
        <div class="basket">
            <a href="<?php echo esc_url( home_url('/')) ?>basket">Basket</a>
        </div>
    </header>

	<div id="content" class="site-content">
