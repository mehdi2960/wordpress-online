<?php
add_action('cmb2_admin_init', 'cmb2_pishro_product');
/**
 * Define the metabox and field configurations.
 */
function cmb2_pishro_product()
{

    /**
     * Initiate the metabox
     */
    $video_pro = new_cmb2_box(array(
        'id' => 'pishro_product',
        'title' => __('ویدیو معرفی دوره', 'cmb2'),
        'object_types' => array('product'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    $video_pro->add_field(array(
        'name' => 'آپلود ویدیو',
        'desc' => 'آپلود ویدیو شما',
        'id' => 'pishro_video_product',
        'type' => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
    ));

    $video_pro->add_field(array(
        'name' => 'آپلود پوستر',
        'desc' => 'آپلود پوستر شما',
        'id' => 'pishro_poster_product',
        'type' => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
    ));
//
//    $time = new_cmb2_box(array(
//        'id' => 'pishro_video_time_metabox',
//        'title' => __('تایم ویدیو', 'cmb2'),
//        'object_types' => array('tv'), // Post type
//        'context' => 'side',
//        'priority' => 'high',
//        'show_names' => true, // Show field names on the left
//        // 'cmb_styles' => false, // false to disable the CMB stylesheet
//        // 'closed'     => true, // Keep the metabox closed by default
//    ));
//    $time->add_field(array(
//        'name' => 'تایم ویدیو',
//        'desc' => 'تایم ویدیو را وارد کنید',
//        'id' => 'pishro_video_time',
//        'type' => 'text',
//    ));

}
