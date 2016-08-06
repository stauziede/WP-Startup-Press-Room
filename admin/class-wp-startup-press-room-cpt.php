<?php

/**
* Create the Press Realease custom post type
**/

class PR_Post_Type_Registrations {
	public $post_type = 'press-release';
	public $taxonomies = array( 'type' );
	public function init() {
		// Add the PR post type and taxonomies
		add_action( 'init', array( $this, 'register' ) );
	}
	/**
	 * Initiate registrations of post type and taxonomies.
	 *
	 * @uses Team_Post_Type_Registrations::register_post_type()
	 * @uses Team_Post_Type_Registrations::register_taxonomy_category()
	 */
	public function register() {
		$this->register_post_type();
		$this->register_taxonomy_category();
	}
	/**
	 * Register the custom post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	protected function register_post_type() {
		$labels = array(
			'name'               => __( 'Press Releases', 'press-release' ),
			'singular_name'      => __( 'Press Release', 'press-release' ),
			'add_new'            => __( 'Add new PR', 'press-release' ),
			'add_new_item'       => __( 'Add new Press Release', 'press-release' ),
			'edit_item'          => __( 'Edit Press Release', 'press-release' ),
			'new_item'           => __( 'New Press Release', 'press-release' ),
			'view_item'          => __( 'View Press Release', 'press-release' ),
			'search_items'       => __( 'Search Press Release', 'press-release' ),
			'not_found'          => __( 'No Press Release found', 'press-release' ),
			'not_found_in_trash' => __( 'No Press Release in the trash', 'press-release' ),
		);
		$supports = array(
			'title',
			'editor',
			'thumbnail',
			'custom-fields',
			'revisions',
		);
		$args = array(
			'labels'          => $labels,
			'supports'        => $supports,
			'public'          => true,
			'capability_type' => 'post',
			'rewrite'         => array( 'slug' => 'press-release', ), // Permalinks format
			'menu_position'   => 30,
			'menu_icon'       => 'dashicons-id',
		);
		$args = apply_filters( 'pr_post_type_args', $args );
		register_post_type( $this->post_type, $args );
	}
	/**
	 * Register a taxonomy for PR Categories.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
	 */
	protected function register_taxonomy_category() {
		$labels = array(
			'name'                       => __( 'PR Categories', 'press-release' ),
			'singular_name'              => __( 'PR Category', 'press-release' ),
			'menu_name'                  => __( 'PR Categories', 'press-release' ),
			'edit_item'                  => __( 'Edit PR Category', 'press-release' ),
			'update_item'                => __( 'Update PR Category', 'press-release' ),
			'add_new_item'               => __( 'Add New PR Category', 'press-release' ),
			'new_item_name'              => __( 'New PR Category Name', 'press-release' ),
			'parent_item'                => __( 'Parent PR Category', 'press-release' ),
			'parent_item_colon'          => __( 'Parent PR Category:', 'press-release' ),
			'all_items'                  => __( 'All PR Categories', 'press-release' ),
			'search_items'               => __( 'Search PR Categories', 'press-release' ),
			'popular_items'              => __( 'Popular PR Categories', 'press-release' ),
			'separate_items_with_commas' => __( 'Separate PR categories with commas', 'press-release' ),
			'add_or_remove_items'        => __( 'Add or remove PR categories', 'press-release' ),
			'choose_from_most_used'      => __( 'Choose from the most used PR categories', 'press-release' ),
			'not_found'                  => __( 'No PR categories found.', 'press-release' ),
		);
		$args = array(
			'labels'            => $labels,
			'public'            => true,
			'show_in_nav_menus' => true,
			'show_ui'           => true,
			'show_tagcloud'     => true,
			'hierarchical'      => true,
			'rewrite'           => array( 'slug' => 'pr-category' ),
			'show_admin_column' => true,
			'query_var'         => true,
		);
		$args = apply_filters( 'pr_post_type_category_args', $args );
		register_taxonomy( $this->taxonomies[0], $this->post_type, $args );
	}
}