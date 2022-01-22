<?php
add_action('cmb2_admin_init', 'cmb2_pishro_product_teacher_lessen');
/**
 * Define the metabox and field configurations.
 */
function cmb2_pishro_product_teacher_lessen()
{

    /**
     * Initiate the metabox
     */
    $teacher_lessen = new_cmb2_box(array(
        'id' => 'pishro_product_teacher_list',
        'title' => __('فهرست جلسات دوره', 'cmb2'),
        'object_types' => array('product'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $group_lessen=$teacher_lessen->add_field( array(
        'id'          => 'pishro_product_group_lessen',
        'type'        => 'group',
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'سرفصل' ),
            'add_button'        => __( 'افزودن سرفصل جدید', 'cmb2' ),
            'remove_button'     => __( 'حذف سرفصل', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true,
            'remove_confirm' => esc_html__( 'از حذف کردن مطمئن هستین?', 'cmb2' ),
        ),
    ) );

    $teacher_lessen->add_group_field( $group_lessen, array(
        'name' => 'عنوان سرفصل',
        'id'   => 'lessen_title',
        'type' => 'text',
    ) );

    $teacher_lessen->add_group_field( $group_lessen, array(
        'name' => 'لینک دانلود کل فصل',
        'id'   => 'pishro_dl',
        'type' => 'text',
    ) );

    $teacher_lessen->add_group_field( $group_lessen, array(
        'name' => 'مدت زمان فصل',
        'id'   => 'pishro_time',
        'type' => 'text',
    ) );

    $teacher_lessen->add_group_field( $group_lessen, array(
        'name' => 'عنوان درس را وارد کنید',
        'id'   => 'pishro_title_lessen',
        'type' => 'text',
        'repeatable'=>true,
    ) );
}