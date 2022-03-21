<?php
/*
  Plugin Name: Prueba Api
  Plugin URI: https://ayphu.com/
  Description: Api de prueba, de demostración para la página
  Version: 1.0.0
  Author: Jean Carlos
  Author URI: https://ayphu.com/
  License: GPLv2 or later
  Text Domain: prueba
*/

add_action( 'rest_api_init', function(){
  register_rest_route( 'prueba/v1', '/persona/', [
    'methods' => 'GET',
    'callback' => 'api_prueba',
  ]);
  register_rest_route( 'prueba/v1', '/persona/1', [
    'methods' => 'GET',
    'callback' => 'primera_persona',
  ]);
  register_rest_route( 'prueba/v1', '/persona/2', [
    'methods' => 'GET',
    'callback' => 'segunda_persona',
  ]);
  register_rest_route( 'prueba/v1', '/persona/3', [
    'methods' => 'GET',
    'callback' => 'tercera_persona',
  ]);
  register_rest_route( 'prueba/v1', '/persona/4', [
    'methods' => 'GET',
    'callback' => 'cuarta_persona',
  ]);
  register_rest_route( 'prueba/v1', '/persona/5', [
    'methods' => 'GET',
    'callback' => 'quinta_persona',
  ]);
});

function api_prueba(WP_REST_Request $request){
  $object = new stdClass();
  $object-> status = 202; 
  $object-> resultado = [new stdClass(), new stdClass(), new stdClass(), new stdClass(), new stdClass()];
  $object-> resultado[0]-> id= 1;
  $object-> resultado[0]-> name='Rick Sanchez';
  $object-> resultado[0]-> status = 'Vivo';
  $object-> resultado[0]-> species = 'Humano';
  $object-> resultado[0]-> gender = 'Hombre';
  $object-> resultado[0]-> location = new stdClass();
  $object-> resultado[0]-> location->name='Estacion Ricks';
  $object-> resultado[0]-> location->location='Espacio';
  $object-> resultado[0]-> image="https://rickandmortyapi.com/api/character/avatar/1.jpeg";

  $object-> resultado[1]-> id= 2;
  $object-> resultado[1]-> name='Morty Smith';
  $object-> resultado[1]-> status = 'Vivo';
  $object-> resultado[1]-> species = 'Humano';
  $object-> resultado[1]-> gender = 'Hombre';
  $object-> resultado[1]-> location = new stdClass();
  $object-> resultado[1]-> location->name='Estacion Ricks';
  $object-> resultado[1]-> location->location='Espacio';
  $object-> resultado[1]-> image="https://rickandmortyapi.com/api/character/avatar/2.jpeg";

  $object-> resultado[2]-> id= 3;
  $object-> resultado[2]-> name='Summer Smith';
  $object-> resultado[2]-> status = 'Vivo';
  $object-> resultado[2]-> species = 'Humano';
  $object-> resultado[2]-> gender = 'Mujer';
  $object-> resultado[2]-> location = new stdClass();
  $object-> resultado[2]-> location->name='Planeta Tierra';
  $object-> resultado[2]-> location->location='Casa';
  $object-> resultado[2]-> image="https://rickandmortyapi.com/api/character/avatar/3.jpeg";

  $object-> resultado[3]-> id= 4;
  $object-> resultado[3]-> name='Beth Smith';
  $object-> resultado[3]-> status = 'Vivo';
  $object-> resultado[3]-> species = 'Humano';
  $object-> resultado[3]-> gender = 'Mujer';
  $object-> resultado[3]-> location = new stdClass();
  $object-> resultado[3]-> location->name='Planeta Tierra (Otra dimensión)';
  $object-> resultado[3]-> location->location='Casa (Otra dimensión)';
  $object-> resultado[3]-> image="https://rickandmortyapi.com/api/character/avatar/4.jpeg";

  $object-> resultado[4]-> id= 5;
  $object-> resultado[4]-> name='Jerry Smith';
  $object-> resultado[4]-> status = 'Vivo';
  $object-> resultado[4]-> species = 'Humano';
  $object-> resultado[4]-> gender = 'Hombre';
  $object-> resultado[4]-> location = new stdClass();
  $object-> resultado[4]-> location->name='Planeta Tierra (Otra dimensión)';
  $object-> resultado[4]-> location->location='Casa (Otra dimensión)';
  $object-> resultado[4]-> image="https://rickandmortyapi.com/api/character/avatar/5.jpeg";

  return $object;
}

function primera_persona(WP_REST_Request $request){  
  $object = new stdClass();
  $object-> id= 1;
  $object-> name='Rick Sanchez';
  $object-> status = 'Vivo';
  $object-> species = 'Humano';
  $object-> gender = 'Hombre';
  $object-> location = new stdClass();
  $object-> location->name='Estacion Ricks';
  $object-> location->location='Espacio';
  $object-> image="https://rickandmortyapi.com/api/character/avatar/1.jpeg";

  return $object;
}
function segunda_persona(WP_REST_Request $request){  
  $object = new stdClass();
  $object->id= 2;
  $object->name='Morty Smith';
  $object->status = 'Vivo';
  $object->species = 'Humano';
  $object->gender = 'Hombre';
  $object->location = new stdClass();
  $object->location->name='Estacion Ricks';
  $object->location->location='Espacio';
  $object->image="https://rickandmortyapi.com/api/character/avatar/2.jpeg";
  return $object;
}
function tercera_persona(WP_REST_Request $request){  
  $object = new stdClass();
  $object-> id= 3;
  $object-> name='Summer Smith';
  $object-> status = 'Vivo';
  $object-> species = 'Humano';
  $object-> gender = 'Mujer';
  $object-> location = new stdClass();
  $object-> location->name='Planeta Tierra';
  $object-> location->location='Casa';
  $object-> image="https://rickandmortyapi.com/api/character/avatar/3.jpeg";
  return $object;
}
function cuarta_persona(WP_REST_Request $request){  
  $object = new stdClass();
  $object-> id= 4;
  $object-> name='Beth Smith';
  $object-> status = 'Vivo';
  $object-> species = 'Humano';
  $object-> gender = 'Mujer';
  $object-> location = new stdClass();
  $object-> location->name='Planeta Tierra (Otra dimensión)';
  $object-> location->location='Casa (Otra dimensión)';
  $object-> image="https://rickandmortyapi.com/api/character/avatar/4.jpeg";
  return $object;
}
function quinta_persona(WP_REST_Request $request){  
  $object = new stdClass();
  $object-> id= 5;
  $object-> name='Jerry Smith';
  $object-> status = 'Vivo';
  $object-> species = 'Humano';
  $object-> gender = 'Hombre';
  $object-> location = new stdClass();
  $object-> location->name='Planeta Tierra (Otra dimensión)';
  $object-> location->location='Casa (Otra dimensión)';
  $object-> image="https://rickandmortyapi.com/api/character/avatar/5.jpeg";

  return $object;
}


?> 