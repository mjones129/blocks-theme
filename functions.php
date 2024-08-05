<?php
//register custom block style
function mobile_styles() {
  register_block_style('core/group', array(
    'name' => 'desktop-only',
    'label' => 'Desktop Only'
  ));
  register_block_style('core/group', array(
    'name' => 'phone-only',
    'label' => 'Phone Only'
  ));
  wp_enqueue_block_style('core/group', array(
    'handle' => 'custom-core-group',
    'path' => get_theme_file_path('assets/css/blocks/core-group.css'),
    'src' => get_theme_file_uri('assets/css/blocks/core-group.css'),
  ));
}
add_action('init', 'mobile_styles');


