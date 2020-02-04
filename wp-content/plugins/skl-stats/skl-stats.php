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
    }

    function activate(){

    }
    function deactivate(){
        
    }
    function uninstall(){
        
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