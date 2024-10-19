<?php
/*
Plugin Name: My GitHub Updater Plugin
<<<<<<< HEAD
Plugin URI: https://github.com/Alif-i/my-github-updater-plugin
Description: A plugin that auto-updates from a GitHub repository.
Version: 1.0.0
Author: Your Name
*/

require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/Alif-i/my-github-updater-plugin/',
	__FILE__,
	'my-github-updater-plugin'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');
