<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
function concert_type() {

	$labels = array(
		'name'                       => 'Concert Types',
		'singular_name'              => 'Concert Type',
		'menu_name'                  => 'Concert Type',
		'all_items'                  => 'All Concert Types',
		'parent_item'                => 'Parent Concert Type',
		'parent_item_colon'          => 'Parent Concert Type:',
		'new_item_name'              => 'New Concert Type',
		'add_new_item'               => 'Add New Concert Type',
		'edit_item'                  => 'Edit Concert Type',
		'update_item'                => 'Update Concert Type',
		'view_item'                  => 'View Concert Type',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Concert Types',
		'search_items'               => 'Search Concert Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Concert Type list',
		'items_list_navigation'      => 'Concert Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'concert_type', array( 'concerts' ), $args );

}
add_action( 'init', 'concert_type', 0 );