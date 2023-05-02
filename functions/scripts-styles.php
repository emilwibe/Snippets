<?php
  //SCRIPTS AND STYLES
  add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('core-styles', get_template_directory_uri() . '/dist/css/core.min.css');
    wp_enqueue_script('scripts-footer', get_template_directory_uri() . '/dist/js/scripts-footer.js', '', '', true);
    wp_enqueue_script('particles-js', get_template_directory_uri() . '/dist/js/particles.js', '', array('scripts-footer'), true);
    wp_enqueue_script('highlightJS', get_template_directory_uri() . '/dist/js/highlightjs.js', '', '', true);
  });

  //DISABLE DEFAULT GUTENBERG STYLES
add_action('wp_print_styles', 'deactivate_gutenberg_stylesheet');

function deactivate_gutenberg_stylesheet(){
  wp_dequeue_style('wp-block-library');
  wp_deregister_style('wp-block-library');
}