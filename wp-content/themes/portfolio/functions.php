<?php


// désactive l'éditeur Gutenberg dans wordpress
add_filter('use_block_editor_for_post', '__return_false');

//activer les img sur les articles
add_theme_support('post-thumbnails');