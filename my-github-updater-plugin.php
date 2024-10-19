<?php
/*
Plugin Name: My GitHub Updater Plugin
Description: A simple WordPress plugin with GitHub update functionality.
Version: 1.0.0
Author: Alif
*/

/**
 * Initialize GitHub update checker.
 */
add_action('init', 'my_plugin_init_updater');
function my_plugin_init_updater() {
    if (!class_exists('Puc_v4_Factory')) {
        require_once plugin_dir_path(__FILE__) . 'plugin-update-checker/plugin-update-checker.php';
    }

    $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
        'https://github.com/Alif-i/my-github-updater-plugin.git/', // GitHub repository URL.
        __FILE__, // Full path to the main plugin file.
        'my-github-updater-plugin' // Plugin slug.
    );

    // Optional: Set the branch that contains the stable release.
    $myUpdateChecker->setBranch('main'); // Change to 'main' or another branch if needed.
}

/**
 * Register the Plugin Update Checker library.
 */
function my_plugin_register_update_checker() {
    if (!class_exists('Puc_v4_Factory')) {
        // Load the library from an external source if it's not available.
        require plugin_dir_path(__FILE__) . 'plugin-update-checker/plugin-update-checker.php';
    }
}
