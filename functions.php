<?php 

function xenos() {
   wp_enqueue_style('tailwindcss', '//cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css');
   wp_enqueue_script('alpine-js', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js');
}

add_action('wp_enqueue_scripts', 'xenos');

function features() {
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'features');


?>