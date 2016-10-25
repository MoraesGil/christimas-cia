<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
'menu' => __( 'menu', 'Ciadonatal' ),
) );

 

//habilitar thumbnails
add_theme_support('post-thumbnails');

//especialidades
add_image_size ('imagens_especialidades', 100, 100, true);

//imagens dos medicos
add_image_size ('imagens_equipe', 165, 165, true);

//imagens medicos internas
add_image_size ('imagens_medicos', 200, 200, true);
