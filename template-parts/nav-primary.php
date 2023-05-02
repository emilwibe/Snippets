<?php
  wp_nav_menu(array(
    'container_id' => 'nav-primary',
    'container_class' => 'nav primary is-hidden',
    'theme_location' => 'nav_primary',
    'container' => 'nav',
    'items_wrap' => '<ul>%3$s</ul>'
  ));  