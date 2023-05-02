<?php
  //REGISTER MENUS
  add_action('after_setup_theme', function() {
    register_nav_menus(array(
        'nav_primary' => 'Primary'
    ));
  });