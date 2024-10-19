<?php
/*
Plugin Name: My GitHub Updater Plugin
Description: A simple WordPress plugin with GitHub update functionality.
Version: 1.0.0
Author: Your Name
*/

// Load the Plugin Update Checker library
if ( !class_exists('Puc_v4_Factory') ) {
    require_once plugin_dir_path(__FILE__) . 'plugin-update-checker/plugin-update-checker.php';
}

// Initialize the update checker
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/Alif-i/my-github-updater-plugin', // Your GitHub repo URL
    __FILE__, // Full path to the main plugin file
    'my-github-updater-plugin' // Plugin slug
);

// Set the branch if you are using "main"
$myUpdateChecker->setBranch('main');

// Add debug output to view what’s happening with the update check
$myUpdateChecker->addResultFilter('puc_debugResult');
