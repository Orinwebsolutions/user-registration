<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.linkedin.com/in/amila-priyankara-523b64120/
 * @since      1.0.0
 *
 * @package    Wp_Login_Regis
 * @subpackage Wp_Login_Regis/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wp_Login_Regis
 * @subpackage Wp_Login_Regis/includes
 * @author     Amila Priyanakara <amilapriyankara16@gmail.com>
 */
class Wp_Login_Regis_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		if(!get_option('users_can_register'))
		{
			$postArray = [];
			update_option('users_can_register', true);
			update_option('default_role', 'subscriber');

			// Create post object
			$user_profile = array(
				'post_title'    => 'User Profile',
				'post_content'  => '[login_regis_user_profile]',
				'post_status'   => 'publish',
				'post_type'		=> 'page',
				'post_author'   => 1,
			);
   
			// Insert the post into the database
			$userProPostID = wp_insert_post( $user_profile );

			// Create post object
			$userProEditPostID = array(
				'post_title'    => 'User Profile Edit',
				'post_content'  => '[login_regis_user_profile_edit]',
				'post_status'   => 'publish',
				'post_type'		=> 'page',
				'post_author'   => 1,
			);
   
			// Insert the post into the database
			$userProPostEditID = wp_insert_post( $userProEditPostID );
			array_push($postArray, $userProPostID, $userProPostEditID);
			update_option('wp_login_reig', $postArray);
			// update_option('wp_login_reig', $userProPostEditID);
		}
	}

}
