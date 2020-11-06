<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://www.linkedin.com/in/amila-priyankara-523b64120/
 * @since      1.0.0
 *
 * @package    Wp_Login_Regis
 * @subpackage Wp_Login_Regis/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Wp_Login_Regis
 * @subpackage Wp_Login_Regis/includes
 * @author     Amila Priyanakara <amilapriyankara16@gmail.com>
 */
class Wp_Login_Regis_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		if(get_option('users_can_register'))
		{
			update_option('users_can_register', false);
			if( !empty(get_option('wp_login_reig')) ){
				if(is_array(get_option('wp_login_reig')))
				{
					foreach (get_option('wp_login_reig') as $postId) {
						wp_delete_post($postId);
					}
				}
				else
				{
					wp_delete_post(get_option('wp_login_reig'));
				}
			}
			delete_option('wp_login_reig');
		}
	}

}
