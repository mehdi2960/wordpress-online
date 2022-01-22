<?php
add_action('cmb2_admin_init', 'cmb2_pishro_product_teacher');
/**
 * Define the metabox and field configurations.
 */
function cmb2_pishro_product_teacher()
{

    /**
     * Initiate the metabox
     */
    $teacher_pro = new_cmb2_box(array(
        'id' => 'pishro_product_teacher',
        'title' => __('درباره مدرس', 'cmb2'),
        'object_types' => array('product'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    $teacher_pro->add_field(array(
        'name' => 'تصویر مدرس',
        'id' => 'pishro_teacher_product_pic',
        'type' => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
    ));

    $teacher_pro->add_field(array(
        'name' => 'نام و نام خانوادگی',
        'desc' => 'نام و نام خانوادگی مدرس را وارد نمایید.',
        'id' => 'pishro_teacher_product_name',
        'type' => 'text',
    ));

    $teacher_pro->add_field(array(
        'name' => 'رزومه مدرس',
        'id' => 'pishro_teacher_product_cv',
        'type' => 'textarea',
    ));
}
