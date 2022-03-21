<?php
/*
  Plugin Name: Ayphu Api
  Plugin URI: https://ayphu.com/
  Description: Jean - Luis - Adrian - Sintia
  Version: 1.0.0
  Author: Ayphu
  Author URI: https://ayphu.com/
  License: GPLv2 or later
  Text Domain: ayphu
*/

add_action( 'rest_api_init', function () {
  register_rest_route( 'ayphu/v1', '/saludo/',
    [
    'methods' => 'GET',
    'callback' => 'saludando_al_equipo',
    ]
  );

  register_rest_route( 'ayphu/v1', '/list/',
    [
    'methods' => 'GET',
    'callback' => 'my_first_api',
    ]
  );
});


function saludando_al_equipo( WP_REST_Request $request ) {
  $response = 'Hola Oscar!';
  return rest_ensure_response( $response );
}

function my_first_api( WP_REST_Request $request ) {

  $edad = $request->get_param( 'edad' );

  $object = new stdClass();
  $object->firtname = 'Luis';
  $object->lastname = 'Gago';
  $object->edad = $edad;

  return $object;
}
?>