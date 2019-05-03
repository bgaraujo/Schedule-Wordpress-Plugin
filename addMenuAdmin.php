<?php
add_action( 'admin_menu', 'ilovecupons_plugin_menu' );

/*
    Create menu painel admin
*/
function ilovecupons_plugin_menu () {
    add_menu_page(
        'Gerenciar consultas', //page_title
        'Gerenciar consultas', //menu_title
        'manage_options', //capability
        'ScheduleGroup', //menu_slug
        'ScheduleForm', //function 
        'dashicons-smiley' //icon_url
    );
    
    add_submenu_page(
        'ScheduleGroup', //parent_slug
        'Configurar firebase', //page_title
        'Configurar firebase', //menu_title
        'manage_options', //capability
        'ScheduleGroup2', //menu_slug
        'ScheduleFirebaseEditForm' //function
    );
}
