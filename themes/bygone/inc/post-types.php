<?php


function create_post_type_events()
{
    // events post type
    $labels = array(
        'name'                  => esc_html__('Events', 'bygone_theme'),
        'singular_name'         => esc_html__('Event', 'bygone_theme'),
        'menu_name'             => esc_html__('Events', 'bygone_theme'),
        'name_admin_bar'        => esc_html__('Event', 'bygone_theme'),
        'add_new'               => esc_html__('Add New', 'bygone_theme'),
        'add_new_item'          => esc_html__('Add New Event', 'bygone_theme'),
        'new_item'              => esc_html__('New Event', 'bygone_theme'),
        'edit_item'             => esc_html__('Edit Event', 'bygone_theme'),
        'view_item'             => esc_html__('View Event', 'bygone_theme'),
        'all_items'             => esc_html__('All Events', 'bygone_theme'),
        'search_items'          => esc_html__('Search Events', 'bygone_theme'),
        'parent_item_colon'     => esc_html__('Parent Events:', 'bygone_theme'),
        'not_found'             => esc_html__('No events found.', 'bygone_theme'),
        'not_found_in_trash'    => esc_html__('No events found in Trash.', 'bygone_theme'),
        'archives'              => esc_html__('Event archives', 'bygone_theme'),
        'insert_into_item'      => esc_html__('Insert into event', 'bygone_theme'),
        'uploaded_to_this_item' => esc_html__('Uploaded to this event', 'bygone_theme'),
        'filter_items_list'     => esc_html__('Filter events list', 'bygone_theme'),
        'items_list_navigation' => esc_html__('Events list navigation', 'bygone_theme'),
        'items_list'            => esc_html__('Events list', 'bygone_theme'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'events'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-calendar',
        'show_in_rest'       => true,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    );

    register_post_type('bygone_theme_event', $args);

}
// adding the above function as action 
add_action('init', 'create_post_type_events');
