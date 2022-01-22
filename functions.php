<?php
function add_theme_scripts()
{

    wp_enqueue_style('all', get_template_directory_uri() . '/css/all.css', array(), false, 'all');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), false, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), false, 'all');

    wp_enqueue_script('jq', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), false, true);
    wp_enqueue_script('owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

////////////////////////////////////////////////////////////////////////////
function pishro_setup_theme()
{
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');

//    add_theme_support( 'wc-product-gallery-zoom' );
//    add_theme_support( 'wc-product-gallery-lightbox' );
//    add_theme_support( 'wc-product-gallery-slider' );
//
    add_image_size('article',313,181,true);
    add_image_size('tv_large',820,548,true);
    add_image_size('tv_small',265,165,true);
    add_image_size('product',400,190,true);

    register_nav_menus( array(
        'header_menu' => 'منوی اصلی',
        'footer_menu' => 'منوی فوتر',
    ) );
}
add_action('after_setup_theme','pishro_setup_theme');

/////////////////////////////////Excerpt Content////////////////////////////

function coustom_excerpt_length()
{
    return 20;
}
add_filter('excerpt_length','coustom_excerpt_length',999);

/////////////////////////////////////remove-dots/////////////////////////

function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

/////////////////////////////////////Widget Abzarak/////////////////////////

function pishro_widgets() {
    register_sidebar( array(
        'name'          => __( 'ناحیه کناری بلاگ' ),
        'id'            => 'pishro_blog',
        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'ناحیه کناری آرشیو محصولات' ),
        'id'            => 'pishro_product',
        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'pishro_widgets' );
//////////////////////////////////////////////////////////////////////////
/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

//////////////////////////////////////Add Teacher Tab//////////////////////

add_filter( 'woocommerce_product_tabs', 'woocommerce_product_teacher' );
function woocommerce_product_teacher( $tabs ) {
    // Adds the new tab
    $tabs['course_teacher'] = array(
        'title' 	=> __( 'مدرس', 'woocommerce' ),
        'priority' 	=> 20,
        'callback' 	=> 'woocommerce_product_teacher_content'
    );
    /////////////Remove Tab/////////////
    unset($tabs['additional_information']);
    //////////////////////////
    return $tabs;
}
function woocommerce_product_teacher_content() {
   $teacher_name=get_post_meta(get_the_ID(),'pishro_teacher_product_name',true);
   if (!empty($teacher_name)){
       ?>
       <div class="course-teacher">
           <?php
              $teacher_pic=get_post_meta(get_the_ID(),'pishro_teacher_product_pic',true);
              if (!empty($teacher_pic)){
                  ?>
                  <div class="teacher-pic">
                      <img src="<?php echo $teacher_pic;?>" alt="">
                  </div>
                  <?php
              }
           ?>
           <div class="teacher-about">
               <h5><?php echo $teacher_name;?></h5>
               <?php
               $teacher_about=get_post_meta(get_the_ID(),'pishro_teacher_product_cv',true);
               if (!empty($teacher_about)){
                   echo $teacher_about;
               }
               ?>
           </div>
       </div>
      <?php
   }
}

//////////////////////////////////////Add Lessen Tab/////////////////////////
add_filter( 'woocommerce_product_tabs', 'woocommerce_product_course_list' );
function woocommerce_product_course_list( $tabs ) {
    // Adds the new tab
    $tabs['course_list'] = array(
        'title' 	=> __( ' جلسات دوره', 'woocommerce' ),
        'priority' 	=> 10,
        'callback' 	=> 'woocommerce_product_teacher_course_list'
    );
    return $tabs;
}

function woocommerce_product_teacher_course_list(){
    include "admin/content-tab-lessen.php";
}

///////////////////////////////////////////////
//-------------- THEME SETTING --------------//
///////////////////////////////////////////////
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Theme Setting',
        'menu_title' => 'Theme Setting',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'	 => false,
        'icon_url'   => 'dashicons-images-dokmeh',
        'position'   => 3
    ));
}
//////////////////////////////////////////////////////////////

/* WooCommerce: Free Products */
add_filter( 'woocommerce_get_price_html', 'novinadmin_price_zero', 100, 2 );

function novinadmin_price_zero( $price, $product ){

    if ( '0' === $product->get_price()  ) {
        $price = 'رایگان';
    }
    return $price;
}

//////////////////////////////Removes Checkout Fields///////////////////////////////
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    return $fields;
}
////////////////////////////////////////َAbzarak Kelasic/////////////////////////////////////////

add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

/////////////////////////////////////////////////////////////////////////////////
require_once 'inc/tv-posttype.php';
require_once 'inc/video-tv.php';
require_once 'inc/video-product.php';
require_once 'inc/teacher-product.php';
require_once 'inc/lessen-teacher.php';