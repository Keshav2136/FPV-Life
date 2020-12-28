<?php

/*********/
/* Atlas */
/*********/

define('__THEMEDIR__', ossn_route()->themes . 'atlas/');

ossn_register_callback('ossn', 'init', 'ossn_atlas_theme_init');

function ossn_atlas_theme_init(){	
	
	//add bootstrap
	ossn_new_css('bootstrap.min', 'css/bootstrap/bootstrap.min.css');
	//ossn_new_js('bootstrap.min', 'js/bootstrap/bootstrap.min.js');
	
	ossn_new_css('ossn.default', 'css/core/default');
	ossn_new_css('ossn.admin.default', 'css/core/administrator');

	//load bootstrap
	ossn_load_css('bootstrap.min', 'admin');
	ossn_load_css('bootstrap.min');

	ossn_load_css('ossn.default');
	ossn_load_css('ossn.admin.default', 'admin');
	
	ossn_extend_view('ossn/admin/head', 'ossn_atlas_admin_head');
	ossn_extend_view('ossn/site/head', 'ossn_atlas_head');
    ossn_extend_view('js/opensource.socialnetwork', 'js/atlas');	
	ossn_extend_view('profile/newsfeed/info', 'atlas/info');

	ossn_register_admin_sidemenu('admin:theme:atlas', 'admin:theme:atlas', ossn_site_url('administrator/settings/atlas'), ossn_print('admin:sidemenu:themes'));
	ossn_register_site_settings_page('atlas', 'settings/admin/atlas');

if(ossn_isAdminLoggedin()) {
		ossn_register_action('atlas/settings', __THEMEDIR__ . 'actions/settings.php');

//Sanitizing of latest friends widget #6
	
	if(ossn_isLoggedin()){
		ossn_add_hook('newsfeed', 'sidebar:right', 'atlas_latest_members_widget');
		ossn_add_hook('newsfeed', 'sidebar:right', 'atlas_latest_friends_widget');	
	}
}
}
function atlas_latest_members_widget($hook, $type, $return){
	$widget_content = ossn_plugin_view('atlas/members_widget');
	$widget = ossn_plugin_view('widget/view', array(
					'title' => ossn_print('atlas:latest:members'),
					'contents' => $widget_content
	));	
	$return[] = $widget;
	return $return;
}

function atlas_latest_friends_widget($hook, $type, $return){
	$widget_content = ossn_plugin_view('atlas/friends_widget');
	$widget = ossn_plugin_view('widget/view', array(
					'title' => ossn_print('atlas:latest:friends'),
					'contents' => $widget_content
	));	
	$return[] = $widget;
	return $return;
}

function ossn_atlas_head(){
	$head	 = array();
	
	$head[]  = ossn_html_css(array(
					'href' => '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
			  ));	
	$head[]  = ossn_html_css(array(
					'href' =>  'https://fonts.googleapis.com/css?family=PT+Sans:400italic,700,400'
			  ));		
	$head[]  = ossn_html_js(array(
					'src' => ossn_theme_url() . 'vendors/bootstrap/js/bootstrap.min.js'
			  ));
	$head[]  = ossn_html_css(array(
					'href' => '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/css/jquery-ui.css'
			  ));	
	return implode('', $head);
}
function ossn_atlas_admin_head(){
	$head	 = array();	
	$head[]  = ossn_html_css(array(
					'href' => '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
			  ));	
	$head[]  = ossn_html_css(array(
					'href' =>  '//fonts.googleapis.com/css?family=Roboto+Slab:300,700,400'
			  ));		
	$head[]  = ossn_html_js(array(
					'src' => ossn_theme_url() . 'vendors/bootstrap/js/bootstrap.min.js'
			  ));
	$head[]  = ossn_html_css(array(
					'href' => '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/css/jquery-ui.css'
			  ));
	return implode('', $head);
}
