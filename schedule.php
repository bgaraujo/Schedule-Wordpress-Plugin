<?php
/**
 * @package Schedule
 */
/*
Plugin Name: Schedule
Plugin URI: https://github.com/bgaraujo
Description: Aprovaçao de horarios.
Version: 1.0
Author: Bruno Gomes
Author URI: https://github.com/bgaraujo
Text Domain: Schedule
*/
if(! defined('ABSPATH') ){
    exit;
}

// Inclui classes
$path = dirname( __FILE__ );
$diretorio = dir($path);
while($arquivo = $diretorio -> read()){
    if($arquivo != '.' and $arquivo != '..' and  strripos($arquivo,".php") > 0 and strripos($arquivo,"ajax") === false )
        include_once dirname( __FILE__ )."/".$arquivo;
}
$diretorio -> close();

// Incluir forms
$path = dirname( __FILE__ ).'/forms';
$diretorio = dir($path);
while($arquivo = $diretorio -> read()){
    if($arquivo != '.' and $arquivo != '..')
        include_once dirname( __FILE__ ).'/forms/'.$arquivo;
}
$diretorio -> close();

// Executar ao instalar
register_activation_hook( __FILE__, "ScheduleCreateOptions");

// Executar ao remover
register_deactivation_hook(__FILE__,"ScheduleDeleteOptions");

//Bootstrap css
wp_enqueue_style( 'css', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" );

//Adiciona nossos JS

wp_enqueue_script('firebase-js', 'https://www.gstatic.com/firebasejs/5.4.2/firebase.js');
wp_enqueue_script('firebase-app-js', 'https://www.gstatic.com/firebasejs/5.4.2/firebase-app.js');
wp_enqueue_script('firebase-database-js', 'https://www.gstatic.com/firebasejs/5.4.2/firebase-database.js');
wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
wp_enqueue_script('my-js', plugin_dir_url(__FILE__) . 'code.js?'.time());