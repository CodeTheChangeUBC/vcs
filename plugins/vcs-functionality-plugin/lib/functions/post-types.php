<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function concerts() {

	$labels = array(
		'name'                  => 'Concerts',
		'singular_name'         => 'Concert',
		'menu_name'             => 'Concerts',
		'name_admin_bar'        => 'Concert',
		'archives'              => 'Concert Archives',
		'attributes'            => 'Concert Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Concerts',
		'add_new_item'          => 'Add New Concert',
		'add_new'               => 'Add New',
		'new_item'              => 'New Concert',
		'edit_item'             => 'Edit Concert',
		'update_item'           => 'Update Concert',
		'view_item'             => 'View Concert',
		'view_items'            => 'View Concerts',
		'search_items'          => 'Search Concert',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Concerts list',
		'items_list_navigation' => 'Concerts list navigation',
		'filter_items_list'     => 'Filter concerts list',
	);
	$args = array(
		'label'                 => 'Concert',
		'description'           => 'Concerts',
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail','excerpt' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'concerts', $args );

}
add_action( 'init', 'concerts', 0 );



function members() {
	
		$labels = array(
			'name'                  => 'Choir Members',
			'singular_name'         => 'Choir Member',
			'menu_name'             => 'Choir Members',
			'name_admin_bar'        => 'Choir Member',
			'archives'              => 'Choir Member Archives',
			'attributes'            => 'Choir Member Attributes',
			'parent_item_colon'     => 'Parent Item:',
			'all_items'             => 'All Choir Members',
			'add_new_item'          => 'Add New Choir Member',
			'add_new'               => 'Add New',
			'new_item'              => 'New Choir Member',
			'edit_item'             => 'Edit Choir Member',
			'update_item'           => 'Update Choir Member',
			'view_item'             => 'View Choir Member',
			'view_items'            => 'View Choir Members',
			'search_items'          => 'Search Choir Member',
			'not_found'             => 'Not found',
			'not_found_in_trash'    => 'Not found in Trash',
			'featured_image'        => 'Featured Image',
			'set_featured_image'    => 'Set featured image',
			'remove_featured_image' => 'Remove featured image',
			'use_featured_image'    => 'Use as featured image',
			'insert_into_item'      => 'Insert into item',
			'uploaded_to_this_item' => 'Uploaded to this item',
			'items_list'            => 'Choir Members list',
			'items_list_navigation' => 'Choir Members list navigation',
			'filter_items_list'     => 'Filter choir members list',
		);
		$args = array(
			'label'                 => 'Choir Member',
			'description'           => 'Choir Members',
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail', 'editor' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'members', $args );
	
	}
	add_action( 'init', 'members', 0 );