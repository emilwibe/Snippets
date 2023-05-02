<?php
  //REGISTER WIDGETS
  add_action('widgets_init', function(){
    register_sidebar(array(
      'name' => __('Primary Widgets'),
      'id' => 'prim_widgets',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget_heading">',
      'after_title' => '</h2>'
    ));
  });