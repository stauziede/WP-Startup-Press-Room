<?php
/**
 * Team Post Type
 *
 * @package   Team_Post_Type
 * @license   GPL-2.0+
 */
/**
 * Register post types and taxonomies.
 *
 * @package Team_Post_Type
 */

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
			'name'               => __( 'Press Releases', 'wp-startup-press-room' ),
			'singular_name'      => __( 'Press Release', 'wp-startup-press-room' ),
			'add_new'            => __( 'Add new PR', 'wp-startup-press-room' ),
			'add_new_item'       => __( 'Add new Press Release', 'wp-startup-press-room' ),
			'edit_item'          => __( 'Edit Press Release', 'wp-startup-press-room' ),
			'new_item'           => __( 'New Press Release', 'wp-startup-press-room' ),
			'view_item'          => __( 'View Press Release', 'wp-startup-press-room' ),
			'search_items'       => __( 'Search Press Release', 'wp-startup-press-room' ),
			'not_found'          => __( 'No Press Release found', 'wp-startup-press-room' ),
			'not_found_in_trash' => __( 'No Press Release in the trash', 'wp-startup-press-room' ),
		);
		$supports = array(
			'title',
			'editor',
			'thumbnail',
			'revisions',
		);
		$args = array(
			'labels'          => $labels,
			'supports'        => $supports,
			'public'          => true,
			'capability_type' => 'post',
			'rewrite'         => array( 'slug' => 'press-release', ), // Permalinks format
			'menu_position'   => 30,
			'menu_icon'       => 'dashicons-analytics',
            
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
			'name'                       => __( 'PR Categories', 'wp-startup-press-room' ),
			'singular_name'              => __( 'PR Category', 'wp-startup-press-room' ),
			'menu_name'                  => __( 'PR Categories', 'wp-startup-press-room' ),
			'edit_item'                  => __( 'Edit PR Category', 'wp-startup-press-room' ),
			'update_item'                => __( 'Update PR Category', 'wp-startup-press-room' ),
			'add_new_item'               => __( 'Add New PR Category', 'wp-startup-press-room' ),
			'new_item_name'              => __( 'New PR Category Name', 'wp-startup-press-room' ),
			'parent_item'                => __( 'Parent PR Category', 'wp-startup-press-room' ),
			'parent_item_colon'          => __( 'Parent PR Category:', 'wp-startup-press-room' ),
			'all_items'                  => __( 'All PR Categories', 'wp-startup-press-room' ),
			'search_items'               => __( 'Search PR Categories', 'wp-startup-press-room' ),
			'popular_items'              => __( 'Popular PR Categories', 'wp-startup-press-room' ),
			'separate_items_with_commas' => __( 'Separate PR categories with commas', 'wp-startup-press-room' ),
			'add_or_remove_items'        => __( 'Add or remove PR categories', 'wp-startup-press-room' ),
			'choose_from_most_used'      => __( 'Choose from the most used PR categories', 'wp-startup-press-room' ),
			'not_found'                  => __( 'No PR categories found.', 'wp-startup-press-room' ),
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