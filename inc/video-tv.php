<?php
add_action('cmb2_admin_init', 'cmb2_sample_metaboxes');
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes()
{

    /**
     * Initiate the metabox
     */
    $video = new_cmb2_box(array(
        'id' => 'test_metabox',
        'title' => __('آپلود ویدیو', 'cmb2'),
        'object_types' => array('tv'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    $video->add_field(array(
        'name' => 'آپلود ویدیو',
        'desc' => 'آپلود ویدیو شما',
        'id' => 'pishro_video_tv',
        'type' => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
    ));

    $time = new_cmb2_box(array(
        'id' => 'pishro_video_time_metabox',
        'title' => __('تایم ویدیو', 'cmb2'),
        'object_types' => array('tv'), // Post type
        'context' => 'side',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));
    $time->add_field(array(
        'name' => 'تایم ویدیو',
        'desc' => 'تایم ویدیو را وارد کنید',
        'id' => 'pishro_video_time',
        'type' => 'text',
    ));

}
