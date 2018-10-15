<?php

/**
 * wp-route initialisation
 */
function wp_routes_init(){
  $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
  $current_route = trim($uri_parts[0], '/');
  
  // Route Rule Examples
  // if ( $current_route == 'special/my-custom-api' ) {
  //    include get_template_directory() . '/my-api/index.php';
  //     die();
  // }
  // if ( $current_route == 'secret_uri_1234/my-cron-sheduled-page' ) {
  //     include get_template_directory() . '/my-cron-tasks/task1.php';
  //     die();
  // }
  // 
  // Place your routing rules below this line
  
}
add_action( 'template_redirect', 'wp_routes_init' );
