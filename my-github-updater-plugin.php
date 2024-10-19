<?php
/*
Plugin Name: My GitHub Updater Plugin
Description: A simple WordPress plugin with GitHub update functionality.
Version: 1.0.2
Author: Your Name
*/

// Load the Plugin Update Checker library
if (!class_exists('Puc_v4_Factory')) {
    require plugin_dir_path(__FILE__) . 'plugin-update-checker/plugin-update-checker.php';
}

// Initialize the update checker
add_action('init', 'my_plugin_init_updater');
function my_plugin_init_updater() {
    // Ensure the update checker class is available
    if (class_exists('Puc_v4_Factory')) {
        $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
            'https://github.com/Alif-i/my-github-updater-plugin', // GitHub repository URL.
            __FILE__, // Full path to the main plugin file.
            'my-github-updater-plugin' // Plugin slug.
        );

        // Optional: Set the branch that contains the stable release.
        $myUpdateChecker->setBranch('main'); // Change to 'main' or another branch if needed.
    }
}
