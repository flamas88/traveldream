<?php
//activer le support des menus dans le thème
add_theme_support('menus');

//déclarer deux "emplacements" de menus :
//déclaration d'une fonction utilisateur qu'un va faire appeler par WP

// - un menu de header
//- un menu de footer
function register_my_menus(){
    //appel d'une méthode de wordpress
    register_nav_menus(
        array(
            'header_menu' => __('Header'),
            'footer_menu' => __('Footer'),
        )
    );
}
//Au démarrage (init), WP appelle la fonction "register_my_menus"
add_action('init', 'register_my_menus');