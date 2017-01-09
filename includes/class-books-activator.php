<?php
/**
 * Fired during plugin activation
 *
 * @link       lolwa
 * @since      1.0.0
 *
 * @package    Books
 * @subpackage Books/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Books
 * @subpackage Books/includes
 * @author     Abhishek Kaushik <abhishek.kaushik@news.co.uk>
 */
class Books_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

	}

	protected function create_books_table() {
		global $wpdb;
		$table_name      = $wpdb->prefix . 'genremeta';
		$charset_collate = $wpdb->get_charset_collate();
		$sql             = "CREATE TABLE $table_name (
			meta_id bigint(20)  NOT NULL AUTO_INCREMENT,
			genre_id bigint(20) DEFAULT 0 NOT NULL,
			meta_key varchar(255),
			meta_value longtext,
			PRIMARY KEY (meta_id),
			INDEX (genre_id),
			INDEX (meta_key),
		) $charset_collate;";

		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		dbDelta( $sql );
	}
}
