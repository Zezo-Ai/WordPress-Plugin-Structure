<?php
/*
Plugin Name: ساختار افزونه وردپرس
Plugin URI: https://Weblan3er.com
Description: ساختار افزونه وردپرس (WordPress Plugin Structure) یک کیت شروع کامل برای توسعه افزونه‌های وردپرس است. این قالب شامل ساختار سازمان‌یافته‌ای است که به شما کمک می‌کند افزونه‌هایی مقیاس‌پذیر و قابل نگهداری بسازید. از ویژگی‌های این کیت می‌توان به مدیریت انواع پست سفارشی، پشتیبانی از وظایف زمان‌بندی (Cron Jobs)، ادغام با REST API و قابلیت ترجمه اشاره کرد. مناسب برای توسعه‌دهندگانی که به دنبال شروع سریع و منظم پروژه‌های افزونه‌ نویسی هستند.
Version: 1.0
Author: مهدی مشکوری
Author URI: https://Weblan3er.com
*/

// Prevent direct file upload
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Upload plugin files
require_once plugin_dir_path( __FILE__ ) . 'includes/admin/class-admin.php';

// Launch the plugin
function wordPress_plugin_structure_init() {
    // Loading management classes
    $admin = new wordPress_plugin_structure_Admin();
    $admin->init();
}

add_action( 'plugins_loaded', 'wordPress_plugin_structure_init' );

?>