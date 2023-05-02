<?php
/*
  //PAGINATION NUMERIC
  $links = array();

  function numeric_posts_pagination (){
    if(is_singular()) {
      return;
    }
    global $wp_query;

    //STOP EXECUTION IF ONLY 1 PAGE
    if($wp_query->max_numpage <= 1){
      return;
    }

    $paged = get_query_var('paged') ? absint (get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    //ADD CURRENT PAGE TO THE ARRAY
    if($paged >= 1){
      $links[] = $paged;
    }

    //ADD THE PAGES NEXT TO CURRENT PAGE TO ARRAY
    if($paged >= 3){
      $links[] = $paged - 1;
      $links[] = $paged - 2;
    }
    if(($paged + 2) <= $max){
      $links[] = $paged + 2;
      $links[] = $paged + 1;
    }
  }

  //OUTPUT PAGINATION
echo '<nav class="pagination">';
  echo '<ul class="pagination-list">';

  //PREVIOUS POST LINK
  if (get_previous_posts_link()){
    printf( '<li class="previous" id="prevPag">%s</li>' . "\n", get_previous_posts_link() );
  }

  //LINK TO FIRST PAGE + ELLIPSES IF NECESSARY
  if(!in_array(1, $links)){
    $class = 1 == $paged ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

    if(!in_array(2, $links)){
      echo '<li>...</li>';
    }
  }

  //LINK TO CURRENT PAGE + 2 PAGES IN EITHER DIRECTION IF NECESSARY
  sort($links);

  foreach((array) $links as $link){
    $class = $paged == $link ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
  }

  //LINK TO LAST PAGE + ELLIPSES IF NECESSARY
  if(!in_array($max, $links)){
    if(!in_array($max - 1, $links)){
      echo '<li>...</li>' . "\n";
      $class = $paged == $max ? ' class="active"' : '';
      printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
  }

  //NEXT POST LINK
  if(get_next_posts_link()) {
    printf( '<li class="next" id="nextPag">%s</li>' . "\n", get_next_posts_link() );
    echo '</ul></nav>' . "\n";
  }

  echo '</ul><!--/.pagination-list-->';
echo '</nav><!--/.pagination-->';

*/


//PAGINATION NUMERIC
function numeric_posts_pagination() {
  if(is_singular()){
    return;
  }
  global $wp_query;

  //STOP EXECUTION IF ONLY 1 PAGE
  if($wp_query->max_num_pages <= 1){
    return;
  }

  $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
  $max = intval( $wp_query->max_num_pages );

  //ADD CURRENT PAGE TO ARRAY
  if ($paged >= 1){
    $links[] = $paged;
  }

  //ADD PAGES ADJACENT TO CURRENT PAGE TO ARRAY
  if ($paged >= 3 ){
    $links[] = $paged - 1;
    $links[] = $paged - 2;
  }
  if (( $paged + 2) <= $max ){
    $links[] = $paged + 2;
    $links[] = $paged + 1;
  }

  echo "\t\t" . '<nav class="l-pagination">' . "\n";
    echo "\t\t\t" . '<ul class="pagination">' . "\n";

  //PREVIOUS POST LINK
  if(get_previous_posts_link()){
    //printf('<li class="disabled" id="prevPag">%s</li>' . "\n", get_previous_posts_link());
    echo '<li><a href="' . get_previous_posts_page_link() . '"><i class="material-icons">chevron_left</i></a></li>' . "\n";
  } else {
    echo '<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>' . "\n";
  }

  //LINK TO FIRST PAGE + ELLIPSES IF NECESSARY
  if(!in_array(1, $links)){
    $class = 1 == $paged ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

    if(!in_array(2, $links)) {
      echo '<li>…</li>';
    }
  }

  //LINK TO CURRENT PAGE + 2 PAGES ADJACENT IN BOTH DIRECTIONS IF NECESSARY
  sort($links);
  foreach((array) $links as $link){
    $class = $paged == $link ? ' class="active"' : '';
    printf("\t\t\t\t" . '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
  }

  //LINK TO LAST PAGE + ELLIPSES IF NECESSARY
  if (!in_array($max, $links)){
    if (!in_array($max - 1, $links)){
      echo "\t\t" . '<li>…</li>' . "\n";
    }

    $class = $paged == $max ? ' class="active"' : '';
    printf( "\t\t\t\t" . '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
  }

  //NEXT POST LINK
  if(get_next_posts_link()){
    echo '<li><a href="' . get_next_posts_page_link() . '"><i class="material-icons">chevron_right</i></a></li>' . "\n";
  } else {
    echo '<li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>' . "\n";
  }
    echo "\t\t\t" . '</ul>' . "\n";
  echo "\t\t" . '</nav>' . "\n";
}