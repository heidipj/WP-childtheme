<?php

/*additional functions*/

function load_fonts() {
            wp_register_style('googleFonts', 'Open+Sans:300italic,400italic,600italic,400,300,600,700');
            wp_enqueue_style( 'googleFonts');
        }
 
    add_action('wp_print_styles', 'load_fonts');
    
?>