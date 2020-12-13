<?php

namespace App;

add_action( 'init', function() {
    /**
     * Post types
     */
    register_extended_post_type('referenzen', [
        'menu_position' => 6,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'labels' => [
            'name' => 'Referenzen',
            'menu_name' => 'Referenzen',
        ],
        'archive' => [
            'nopaging' => true,
        ],
        'show_in_rest' => true,
    ], [
        'singular' => 'Referenz',
        'plural'   => 'Referenzen',
        'slug'     => 'referenzen',
    ]);

    register_extended_post_type('expertise', [
        'menu_position' => 6,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'labels' => [
            'name' => 'Expertisen',
            'menu_name' => 'Expertise',
        ],
        'archive' => [
            'nopaging' => true,
        ],
        'show_in_rest' => true,
    ], [
        'singular' => 'Expertise',
        'plural'   => 'Expertisen',
        'slug'     => 'expertise',
    ]);

    register_extended_post_type('testimonial', [
        'menu_position' => 6,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'labels' => [
            'name' => 'Testimonials',
            'menu_name' => 'Testimonials',
        ],
        'archive' => [
            'nopaging' => true,
        ],
        'show_in_rest' => true,
    ], [
        'singular' => 'Testimonial',
        'plural'   => 'Testimonials',
        'slug'     => 'testimonial',
    ]);


    /**
     * Taxonomies
     */
    register_extended_taxonomy('category-ref', 'referenzen', [
        'meta_box' => 'simple',
        'show_admin_column' => true,
    ], [
        'singular' => 'Kategorie',
        'plural'   => 'Kategorien',
    ]);

    register_extended_taxonomy('category-exp', 'expertise', [
        'meta_box' => 'simple',
        'show_admin_column' => true,
    ], [
        'singular' => 'Kategorie',
        'plural'   => 'Kategorien',
    ]);

    register_extended_taxonomy('category-tes', 'testimonial', [
        'meta_box' => 'simple',
        'show_admin_column' => true,
    ], [
        'singular' => 'Kategorie',
        'plural'   => 'Kategorien',
    ]);
});
