<?

/*
Plugin Name: Mobile Devices
Plugin URI:
Description: Declares a plugin that will create a custom post type displaying mobile devices reviews.
Version: 1.0
Author: Matveev Vitaliy
Author URI:
License: GPLv2
*/

define('ALLOW_UNFILTERED_UPLOADS', true);


function create_mobile_device_review()
{
	$labels = array(
		'name' => 'Mobile devices',
		'singular_name' => 'Mobile devices',
		'add_new' => 'Add device',
		'all_items' => 'All devices',
		'add_new_item' => 'Add new device',
		'edit_item' => 'Edit device info',
		'new_item' => 'New device',
		'view_item' => 'View device',
		'search_item' => 'Search for device',
		'not_found' => 'No devices found',
		'not_found_in_trash' => "No devices found in trash",
		'parent_item_colon' => 'Parent Item',		
		);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrute' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'support' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revision',
			),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 15,
		'supports' => array('title', 'editor', 'thumbnail', 'excert', 'comments'),
		'menu_icon' => plugins_url( 'images/icon.png', __FILE__ ),
		'has_archive' => true,
		'exclude_from_search' => false,
		);
	register_post_type('mobile', $args);
}

add_action( 'init', 'create_mobile_device_review' );

/* Filter the single_template with our custom function*/
/*add_action("template_redirect", 'my_theme_redirect');

function my_theme_redirect() {
    global $wp;
    $plugindir = dirname( 'FILE' );
    //print_r ($wp->query_vars["post_type"]);
  //  exit;
    //A Specific Custom Post Type
    if ($wp->query_vars["post_type"] == 'mobile') 
    {
        $templatefilename = 'single-mobile.php';
         $return_template = $plugindir . $templatefilename;
        return $return_template;
    }
}*/

?>