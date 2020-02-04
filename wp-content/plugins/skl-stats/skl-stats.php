<?php
/*
* @package skl-stats
*/
/*
Plugin Name: SKL Stats
Plugin URI:  http://sklesports.ca
Description: Tracks tournament statistics and results for SKL Esports using the RIOT API and an SQL Database.
Version:     0.1.0
Author:      Matthew Rousseaux
Author URI:  http://rousseaux.ca
License:     Proprietary
License URI: https://www.eulatemplate.com/live.php?token=dUpxMnoXiAf8hE89qgyJ0f1GGiMyZnxM
text-domain: skl-stats
*/

defined('ABSPATH') or die('Error, you tried to open this plugin outside the wordpress engine.');

class SKLStatisticsPlugin{
    function __construct(){
        //construct is like init
        add_action( 'init', array($this, 'custom_post_type'));
    }

    function activate(){
        //generate a Custom post type
        //generate a Custom categories
    }
    function deactivate(){
        
    }
    function uninstall(){
        
    }


    function custom_post_type(){
        //the definition of the custom post type for games
        register_post_type( 'game', ['public' => true, 'label'=>'Games'] );
    }
}

if (class_exists('SKLStatisticsPlugin')){
    $sklStatisticsPlugin = new SKLStatisticsPlugin();
}


//activation
register_activation_hook( __FILE__, array($sklStatisticsPlugin, 'activate'));
//deactivation
register_deactivation_hook( __FILE__, array($sklStatisticsPlugin, 'deactivate'));
//uninstall