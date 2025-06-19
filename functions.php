<?php
if (! defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}
function НАЗВАНИЕ_ТЕМЫ_setup()
{
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}

add_action('after_setup_theme', 'НАЗВАНИЕ_ТЕМЫ_setup');
function НАЗВАНИЕ_ТЕМЫ_scripts() {
	//* Образец подключения стилей и скриптов:
	// wp_enqueue_style('style-name', get_stylesheet_uri(), array(), _S_VERSION);
	// wp_enqueue_script('newscript', get_template_directory_uri() . '/js/custom_script.js');
}
add_action('wp_enqueue_scripts', 'НАЗВАНИЕ_ТЕМЫ_scripts');
