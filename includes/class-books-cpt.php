<?php
/**
 * Creating Books CPT.
 *
 * @package WordPress
 */

class Books_Cpt {
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version     = $version;
	}

	public function register_cpt() {
		$labels = [
			'name'               => _x( 'Books', 'post type general name', 'books' ),
			'singular_name'      => _x( 'Book', 'post type singular name', 'books' ),
			'menu_name'          => _x( 'Books', 'admin menu', 'books' ),
			'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'books' ),
			'add_new'            => _x( 'Add New', 'book', 'books' ),
			'add_new_item'       => __( 'Add New Book', 'books' ),
			'new_item'           => __( 'New Book', 'books' ),
			'edit_item'          => __( 'Edit Book', 'books' ),
			'view_item'          => __( 'View Book', 'books' ),
			'all_items'          => __( 'All Books', 'books' ),
			'search_items'       => __( 'Search Books', 'books' ),
			'parent_item_colon'  => __( 'Parent Books:', 'books' ),
			'not_found'          => __( 'No books found.', 'books' ),
			'not_found_in_trash' => __( 'No books found in Trash.', 'books' ),
		];

		$args = [
			'labels'             => $labels,
			'description'        => __( 'Description.', 'books' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => [ 'slug' => 'book' ],
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'taxonomies'         => [ 'album' ],
			'supports'           => [ 'title', 'editor', 'author', 'comments' ],
		];

		register_post_type( 'song', $args );
	}
}
