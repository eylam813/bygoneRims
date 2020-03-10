<?php


/**
 * Change number of products that are displayed per page (shop page)
 */

// function bygone_theme_loop_shop_per_page($cols)
// {
//     // $cols contains the current number of products per page based on the value stored on Options -> Reading
//     // Return the number of products you wanna show per page.
//     $cols = 9;
//     return $cols;
// }

// add_filter('loop_shop_per_page', 'bygone_theme_loop_shop_per_page', 20);

function bygone_theme_loop_shop_per_page( $bygone_theme_loop_shop_per_page ) { 
    // make filter magic happen here... 
    return $bygone_theme_shop_per_page; 
}; 
add_filter( 'loop_shop_per_page', 'bygone_theme_loop_shop_per_page', 10, 1 ); 



/**
 * Change number or products per row to 3
 */

if (!function_exists('loop_columns')) {
    function loop_columns()
    {
        return 3; // 3 products per row
    }
}
add_filter('loop_shop_columns', 'loop_columns', 999);

// disable woocommerce default styling
add_filter('woocommerce_enqueue_styles', '__return_empty_array');


function bygone_theme_woocommerce_login_form()
{
?>

    <p><strong>Don't forget your password!!!</strong></p>

<?php
}
add_action('woocommerce_login_form', 'bygone_theme_woocommerce_login_form');


/**
 * Show cart contents / total Ajax
 */

function woocommerce_header_add_to_cart_fragment($fragments)
{
    global $woocommerce;

    ob_start();

?>
    <div class="mini-cart-wrapper">
        <?php woocommerce_mini_cart(); ?>
    </div>
<?php
    $fragments['.mini-cart-wrapper'] = ob_get_clean();
    return $fragments;
}

add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

/**
 * @snippet       Hide Menu Mini-Cart Widget Dropdown Content
 * @how-to        Get CustomizeWoo.com FREE
 * @sourcecode    https://businessbloomer.com/?p=73060
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.4.3
 */

add_filter( 'woocommerce_widget_cart_is_hidden', '__return_true' );