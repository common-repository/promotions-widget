<?php   
     /* 
     Plugin Name: Promotions Widget 
     Plugin URI: http://www.wildfireapp.com 
     Description: Plugin for displaying widget from Wildfireapp
     Author: Wildfire Interactive, Inc. 
     Version: 1.0 
     Author URI: http://www.wildfireapp.com 
     */

     
function wfwidget_show() {
	
	// define url & channel_id
    $widget_url = "www.wildfireapp.com";
    $channel_id = 302;
	
	// get sponsor_id
	$sponsor_id = get_option('wfwidget_sponsor_id');
	
	if ($sponsor_id != '') {
	
		$wfwidget_output = '';

		//Build the HTML code (channelID && sponsorID)
		$wfwidget_output = '<script type="text/javascript" src="http://'.$widget_url.'/website/'.$channel_id.'/companies/'.$sponsor_id.'/widget_loader.js"></script>';

		echo $wfwidget_output;
	
	}
	
}

add_action('wp_footer', 'wfwidget_show');

//*************** Admin function ***************
function wfwidget_admin() {
	include('promotions_widget_admin.php');
}

function wfwidget_admin_actions() {
    add_options_page("Promotions Widget", "Promotions Widget", 1, "Promotions-Widget", "wfwidget_admin");
}

add_action('admin_menu', 'wfwidget_admin_actions');

?>