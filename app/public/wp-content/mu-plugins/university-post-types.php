<?php

function university_post_types() {
    register_post_type('event', [
        'supports' => [
            'title', 'editor', 'excerpt',
        ],
        'rewrite' => [
            'slug' => 'events'
        ],
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Events',
            'add_new' => 'Add New Event',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event',
            'search_items' => 'Search Events',
        ],
        'menu_icon' => 'dashicons-calendar-alt'
    ]);
}

add_action('init', 'university_post_types');