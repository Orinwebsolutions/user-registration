<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.linkedin.com/in/amila-priyankara-523b64120/
 * @since      1.0.0
 *
 * @package    Wp_Login_Regis
 * @subpackage Wp_Login_Regis/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Login_Regis
 * @subpackage Wp_Login_Regis/public
 * @author     Amila Priyanakara <amilapriyankara16@gmail.com>
 */
class Wp_Login_Regis_Public {

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

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Login_Regis_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Login_Regis_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		if(is_page(get_option('wp_login_reig')))
		{
			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-login-regis-public.css', array(), $this->version, 'all' );
			wp_enqueue_style( $this->plugin_name.'boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), $this->version, 'all' );
			$user = wp_get_current_user();
			if ( is_user_logged_in() && in_array('subscriber', $user->roles) ) {
				wp_enqueue_style( $this->plugin_name.'custom-subscriber', plugin_dir_url( __FILE__ ) . 'css/wp-login-regis-public-custom-01.css', array(), $this->version, 'all' );
			}
		}

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Login_Regis_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Login_Regis_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		if(is_page(get_option('wp_login_reig')))
		{
			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-login-regis-public.js', array( 'jquery' ), $this->version, false );
			wp_enqueue_script( $this->plugin_name.'boostrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), $this->version, false );
			$post = get_post(get_option('wp_login_reig')[1]);
			$localize_array = array(
				'page_path' => $post->post_name,
				'ajaxurl' => admin_url( 'admin-ajax.php' )
			);
			wp_localize_script( $this->plugin_name, 'localize_obj', $localize_array );
			// wp_enqueue_script( 'localize_handle' );
		}

	}

	public function wp_login_regis_redirects( $url, $request, $user )
	{
		if ( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) 
		{
			if ( $user->has_cap( 'subscriber' ) )
			{

				if(!empty($user->get( 'user_active_status' )))
				{
					$profilePages = get_option('wp_login_reig');
					$url = get_permalink($profilePages[0]);
					// $url = home_url( '/members-only/' );
				}
				else
				{
					wp_safe_redirect(wp_login_url(get_permalink())."?login=notverified"); 
					wp_logout();
					exit;
				}
			} 
			else
			{
				$url = admin_url();
			}
		}
		return $url;
	}

	public function wp_logout_regis_redirects()
	{
		wp_safe_redirect(wp_login_url(get_permalink()));
		exit;
	}

}
