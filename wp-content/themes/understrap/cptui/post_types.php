<?php 
function cptui_register_my_cpts() {

	/**
	 * Post Type: Case Studies.
	 */

	$labels = [
		"name" => __( "Case Studies", "understrap" ),
		"singular_name" => __( "Case Study", "understrap" ),
	];

	$args = [
		"label" => __( "Case Studies", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "case-studies",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "case-studies", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "case_studies", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
