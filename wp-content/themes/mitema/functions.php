<?php
// REGISTRO DE ESTILOS

function register_enqueue_style(){
  $theme_data = wp_get_theme();

/* Registrando estilos */
  wp_register_style('bootstrap',
  get_parent_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css'),null,
  '4.1.1', 'screen');

/* Enqueue estilos */
wp_enqueue_style('bootstrap');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

// REGISTRO DE SCRIPTS

function register_enqueue_scripts() {
  $theme_data = wp_get_theme();

/* Deregister scripts */
  wp_deregister_script('jquery' );


/* Registrando scripts */
  wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/vendor/jquery/jquery.min.js'), null, '3.3.1', true);
  wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/vendor/bootstrap/js/bootstrap.min.js'), null, '4.1.1', true);


/* Enqueue scripts */
  wp_enqueue_script('jQuery3');
  wp_enqueue_script('bootstrap');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

 ?>
