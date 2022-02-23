<?php


// désactive l'éditeur Gutenberg dans wordpress
add_filter('use_block_editor_for_post', '__return_false');

//activer les img sur les articles
add_theme_support('post-thumbnails');

//enregistrer un seul custom post type pour mes livres
register_post_type('books', [
    'label' => 'Livres',
    'labels'=> [
        'name' => 'Mes livres',
    ],
    'description' => 'Résumé des livres',
    'menu_position' => 10,
    'menu_icon' => 'dashicons-book',
    'public' => true
]);

//enregistrer un custom post pour mes projets
register_post_type('Projets', [
    'label' => 'Projets',
    'labels' => [
        'name' => 'Mes projets',
    ],
    'description' => 'Mes projets d\'études en Infographie',
    'menu_position' => 5,
    'menu_icon' => 'dashicons-open-folder',
    'public' => true,
    'supports' => ['thumbnail', 'editor', 'title'],
]);