<?php

function tv_create_taxonomies()

{
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x('دسته بندی', 'دسته بندی'),
        'singular_name'     => _x('دسته بندی پست ها', 'دسته بندی'),
        'search_items'      => __('جستجوی دسته بندی'),
        'all_items'         => __('همه دسته بندی ها'),
        'parent_item'       => __('Parent tv Type'),
        'parent_item_colon' => __('Parent tv Type:'),
        'edit_item'         => __('ویرایش دسته بندی'),
        'update_item'       => __('آپدیت دسته بندی'),
        'add_new_item'      => __('اضافه کردن دسته بندی جدید'),
        'new_item_name'     => __('New Tour tv Name'),
        'menu_name'         => __('دسته بندی', 'wewatd'),
    );
    $args = array(
        'hierarchical'      => true,
        'label'             => 'tv Types',
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'tv'),
    );
    register_taxonomy('tv', 'tv', $args);
}


// hook into the init action and call create_taxonomies when it fires

add_action( 'init', 'tv_create_taxonomies', 0 );



function post_type_pishro_tv()
{
    $labels = array(
        'name' => __('تلویزیون', 'wewatd'),
        'singular_name' => __('تلویزیون', 'wewatd'),
        'menu_name' => 'تلویزیون',
        'name_admin_bar' => 'تلویزیون',
        'add_new' => 'Add تلویزیون',
        'add_new_item' => 'Add تلویزیون Item',
        'new_item' => 'New تلویزیون',
        'edit_item' => 'Edit تلویزیون',
        'view_item' => 'View تلویزیون',
        'all_items' => 'All تلویزیون',
        'search_items' => 'Search تلویزیون',
        'parent_item_colon' => 'Parent تلویزیون',
        'not_found' => 'No تلویزیون found',
        'not_found_in_trash' => 'No تلویزیون found in trash',
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'wewatd'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'taxonomies' => array('tv-types'),
        'query_var' => true,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'tv'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_icon' => 'dashicons-schedule',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt')
    );

    register_post_type('tv', $args);
}

add_action('init', 'post_type_pishro_tv');


