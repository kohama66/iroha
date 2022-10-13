<?php

function add_stylesheet() {
  wp_register_style('reset', get_template_directory_uri().'/assets/styles/reset.css', array(), '1.0', false);
  wp_enqueue_style('main', get_template_directory_uri().'/assets/styles/index.css', array('reset'), '1.0', false);
  wp_enqueue_script('script', get_template_directory_uri().'/scripts/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

function my_menu_init() {
  register_nav_menus(
      array(
    'global' => 'グローバルーメニュー',
    )
  );
}
add_action('init', 'my_menu_init');

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
