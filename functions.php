<?php
/*
 * All the functions are in the PHP files in the `functions/` folder.
 */

if ( ! defined('ABSPATH') ) {
  exit;
}
require get_template_directory() . '/functions/cleanup.php';
require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/action-hooks.php';
require get_template_directory() . '/functions/navbar.php';
require get_template_directory() . '/functions/dimox-breadcrumbs.php';
require get_template_directory() . '/functions/widgets.php';
require get_template_directory() . '/functions/search-widget.php';
require get_template_directory() . '/functions/index-pagination.php';
require get_template_directory() . '/functions/split-post-pagination.php';

add_action('woocommerce_after_shop_loop_item', 'add_learn_more_button', 20);

function add_learn_more_button() {
  global $product;
  
  // Add a "Learn More" button that links to the product page
  echo '<a href="' . get_permalink($product->get_id()) . '" class="button learn-more">Learn More</a>';
}
function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

/**
* Ensure the shop wrapper is open.
*/
function mytheme_woocommerce_wrapper_start() {
echo '<section id="main" class="woocommerce">';
}

/**
* Ensure the shop wrapper is closed.
*/
function mytheme_woocommerce_wrapper_end() {
echo '</section>';
}

add_action('woocommerce_before_main_content', 'mytheme_woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'mytheme_woocommerce_wrapper_end', 10);
