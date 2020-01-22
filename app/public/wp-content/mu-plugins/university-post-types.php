<?php 

function university_post_types(){
    // Event post type

    register_post_type('event', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-image-filter'
    ));

    // Program post type
    register_post_type('program', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-awards'
    ));

    // Professor post type
    register_post_type('professor', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Professors',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));

    // Campus post type

    register_post_type('flock', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'flocks'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Flocks',
            'add_new_item' => 'Add New Flock',
            'edit_item' => 'Edit Flock',
            'all_items' => 'All Flocks',
            'singular_name' => 'Flock'
        ),
        'menu_icon' => 'dashicons-location-alt'
    ));
}

add_action('init', 'university_post_types');

?>