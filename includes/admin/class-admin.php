<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class wordPress_plugin_structure_Admin {
    
    public function __construct() {
        // Register menu
        add_action( 'admin_menu', array( $this, 'add_plugin_menu' ) );
    }

    public function init() {
        // Add additional functions
    }

    public function add_plugin_menu() {
        add_menu_page(
            'WordPress Plugin Structure',              // Page title
            'ساختار افزونه وردپرس',               // Menu title
            'manage_options',             // The ability of the user to see the menu
            'wordPress_plugin_structure',              // Menu slug
            array( $this, 'display_plugin_admin_page' ), // Screen display function
            'dashicons-admin-plugins',   // Menu icon
            6                             // Menu position
        );
    }

    public function display_plugin_admin_page() {
        ?>
        <div class="wrap">
            <h1>خوش آمدید به ساختار افزونه وردپرس</h1>
            <p>این صفحه مدیریت ساختار افزونه وردپرس است.</p>
        </div>
        <?php
    }
}

?>