<?php 
    /* Criado ao instalar o plugin */
    function ScheduleCreateOptions(){
        add_option( "firebaseOptions", "{}");
    }
  
    /* Remove ao apagar o plugin */
    function ScheduleDeleteOptions(){
        delete_option( "firebaseOptions" );   
    }