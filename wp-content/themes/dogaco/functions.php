<?php

add_theme_support('menus');

register_sidebar(
    array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    )
);

add_theme_support('post-thumbnails');

function shortcode_tw() {
    return '<a href="http://twitter.com/taguchi">@taguchi</a>をフォローしてね！';
}
add_shortcode('tw', 'shortcode_tw');

function add_scripts() {
	wp_enqueue_script(
    'main-script',
    get_template_directory_uri() . '/js/main.js',
    '01',
    true
  );

  wp_enqueue_style(
    'post-css',
    get_template_directory_uri() . '/css/style.css',
    "",
    '01' 
  );
}
add_action('wp_print_scripts', 'add_scripts');
