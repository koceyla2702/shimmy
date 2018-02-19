<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs">
			<li class="description_tab">
				<a href="#tab-description"><?php echo apply_filters( 'woocommerce_product_' . description . '_tab_title', "Description", description ); ?></a>
			</li>
			<li class="benefits_tab">
				<a href="#tab-benefits"><?php echo apply_filters( 'woocommerce_product_' . 1 . '_tab_title', "Benefits", 1 ); ?></a>
			</li>
			<li class="ingredients">
				<a href="#tab-ingredients"><?php echo apply_filters( 'woocommerce_product_' . 1 . '_tab_title', "Ingredients", 1 ); ?></a>
			</li>
			<li class="more_info_tab">
				<a href="#tab-more_info"><?php echo apply_filters( 'woocommerce_product_' . more_info . '_tab_title', "Additional Information", more_info ); ?></a>
			</li>
		</ul>
		<?php foreach ( $tabs as $key => $tab ) : ?>
			<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>">
				<?php call_user_func( $tab['callback'], $key, $tab ); ?>
			</div>
		<?php endforeach; ?>
		<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--benefits panel entry-content wc-tab" id="tab-benefits">
			<?php the_field('benefits') ?>
		</div>
		<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--ingredients panel entry-content wc-tab" id="tab-ingredients">
			<?php the_field('ingredients') ?>
		</div>
		<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--more_info panel entry-content wc-tab" id="tab-more_info">
			<?php the_field('more_info') ?>
		</div>
	</div>

<?php endif; ?>
