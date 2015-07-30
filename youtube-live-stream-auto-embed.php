<?php
/*
Plugin Name: Youtube Live Stream Auto Embed
Plugin URI: http://www.wordpressyoutubelivestream.com/plugin/youtube-live-stream-auto-embed-wordpress-plugin/
Description: Automatically embed live Youtube streams, No need to update your live stream embed code ever again. Works with <em>YouTube Data API v3</em>.
Author: SM Wordpress Youtube Live Stream
Version: 1.0.1
Author URI: http://www.wordpressyoutubelivestream.com/
License: GPLv2 or later

Copyright 2015 SM Wordpress Youtube Live Stream
*/

	defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );
	
	if (!class_exists('Youtube_Live_Auto_Embed')) {

    class Youtube_Live_Auto_Embed {}

/*-----------------------------------------------------------------------------------*/
/* Youtube Live Plugin CSS */
/*-----------------------------------------------------------------------------------*/

	add_action( 'wp_enqueue_scripts', 'yt_live_stylesheet' );

    	function yt_live_stylesheet() {
        	wp_enqueue_style( 'youtube-live', plugins_url('assets/css/youtube-live-style.css', __FILE__) );
    }

	add_action( 'admin_enqueue_scripts', 'yt_admin_stylesheet' );

    	function yt_admin_stylesheet() {
        	wp_enqueue_style( 'youtube-live', plugins_url('admin/css/admin-options.css', __FILE__) );
    }

/*-----------------------------------------------------------------------------------*/
/* Create Youtube Player Admin Menu */
/*-----------------------------------------------------------------------------------*/

	add_action( 'admin_menu', 'youtube_live_menu' );
 
		function youtube_live_menu() {
			
    		add_options_page( 'Youtube Live Plugin Options', 'YouTube Live', 'manage_options', 'youtube-live', 'youtube_live_plugin_options' );
	}
 
		function youtube_live_plugin_options() {
			
    		if ( !current_user_can( 'manage_options' ) )  {
        		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    		include __DIR__."/admin/options.php";
	} 

/*-----------------------------------------------------------------------------------*/
/* Youtube Live Player Shortcode */
/*-----------------------------------------------------------------------------------*/

	function yt_live_shortcode(){
	
		ob_start();
	
			include "includes/shortcode.php"; 
	
		return ob_get_clean();
	}
	add_shortcode('youtube-live', 'yt_live_shortcode');

	}