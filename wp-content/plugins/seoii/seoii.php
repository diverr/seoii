<?php
/*
Plugin Name: SEOII
Plugin URI: http://www.seii.es
Description: Funcionalidades específicas para la web
Version: 0.1
Author: David Santiago
Author URI: http://www.davidsantiago.net
*/

/*
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'events',
    array(
      'labels' => array(
        'name' => 'Eventos',
        'singular_name' => 'Evento',
        'add_new' => 'Nuevo evento',
        'add_new_item' => 'Añadir nuevo evento'
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
*/

// Create a proper EM_Event object in the database when an event-type post is
// imported with WP All import
/*
add_action('pmxi_saved_post', 'post_saved', 10, 1);
function post_saved($post_id) {
  if (class_exists(EM_Event)) {
    $event_post = get_post($post_id);

    // Only create a new event entry if the imported post is of type event and
    // there is not an existing event for this post
    $existing_event = em_get_event($event_post->ID, 'post_id');
    if ($event_post->post_type == 'event' && empty($existing_event->event_id)) {
      $event = new EM_Event();
      $event->load_postdata($event_post);
      $event->save();
    }
  }
}
*/
