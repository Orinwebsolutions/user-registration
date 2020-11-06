<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.linkedin.com/in/amila-priyankara-523b64120/
 * @since      1.0.0
 *
 * @package    Wp_Login_Regis
 * @subpackage Wp_Login_Regis/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Login_Regis
 * @subpackage Wp_Login_Regis/admin
 * @author     Amila Priyanakara <amilapriyankara16@gmail.com>
 */
class Wp_Login_Regis_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-login-regis-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-login-regis-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function userMetaActivation(WP_User $user) {

	if($user->roles[0] == 'subscriber')
	{
	?>
	<h2>User Active</h2>
		<table class="form-table">
			<tr>
				<th><label for="user_active_status">User Active</label></th>
				<td>
					<input
						type="checkbox"
						value="1"
						<?php checked('1', get_user_meta($user->ID, 'user_active_status', true)); ?>
						name="user_active_status"
						id="user_active_status"
					>
					<span class="description">User activity status</span>
				</td>
			</tr>
			<tr>
				<th><label for="child_name">Child name</label></th>
				<td>
					<input 
						type="text" 
						name="child_name" 
						id="child_name" 
						value="<?php echo get_user_meta($user->ID, 'child_name', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
			<tr>
				<th><label for="child_age">Child age</label></th>
				<td>
					<input 
						type="text" 
						name="child_age" 
						id="child_age" 
						value="<?php echo get_user_meta($user->ID, 'child_age', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
			<tr>
				<th><label for="child_gender">Child's gender</label></th>
				<td>
					<select name="child_gender" id="child_gender">
						<option value="male" <?php selected( get_user_meta($user->ID, 'child_gender', true), 'male' ); ?>>Male</option>
						<option value="female" <?php selected( get_user_meta($user->ID, 'child_gender', true), 'female' ); ?>>Female</option>
					</select>
				</td>
			</tr>
			<tr>
				<th><label for="home_address">Home address</label></th>
				<td>
				<input 
						type="text" 
						name="home_address" 
						id="home_address" 
						value="<?php echo get_user_meta($user->ID, 'home_address', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
			<tr>
				<th><label for="home_city">City</label></th>
				<td>
					<input 
						type="text" 
						name="home_city" 
						id="home_city" 
						value="<?php echo get_user_meta($user->ID, 'home_city', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
			<tr>
				<th><label for="home_state">State</label></th>
				<td>
					<input 
						type="text" 
						name="home_state" 
						id="home_state" 
						value="<?php echo get_user_meta($user->ID, 'home_state', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
			<tr>
				<th><label for="home_zip">Zip</label></th>
				<td>
					<input 
						type="text" 
						name="home_zip" 
						id="home_zip" 
						value="<?php echo get_user_meta($user->ID, 'home_zip', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
			<tr>
				<th><label for="emergency_contact">Main emergency contact number</label></th>
				<td>
					<input 
						type="text" 
						name="emergency_contact" 
						id="emergency_contact" 
						value="<?php echo get_user_meta($user->ID, 'emergency_contact', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
			<tr>
				<th><label for="user_occupation">Occupation</label></th>
				<td>
					<input 
						type="text" 
						name="user_occupation" 
						id="user_occupation" 
						value="<?php echo get_user_meta($user->ID, 'user_occupation', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
			<tr>
				<th><label for="user_employer">Employer</label></th>
				<td>
					<input 
						type="text" 
						name="user_employer" 
						id="user_employer" 
						value="<?php echo get_user_meta($user->ID, 'user_employer', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
			<tr>
				<th><label for="user_work_phone">Work phone</label></th>
				<td>
					<input 
						type="text" 
						name="user_work_phone" 
						id="user_work_phone" 
						value="<?php echo get_user_meta($user->ID, 'user_work_phone', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>											
		</table>
	<h2>Spouse details</h2>
		<table class="form-table">			
			<tr>
				<th><label for="user_spouse_name">Spouse Name</label></th>
				<td>
					<input 
						type="text" 
						name="user_spouse_name" 
						id="user_spouse_name" 
						value="<?php echo get_user_meta($user->ID, 'user_spouse_name', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
			<tr>
				<th><label for="user_spouse_working">Is working</label></th>
				<td>
					<input
						type="checkbox"
						value="1"
						<?php checked('1', get_user_meta($user->ID, 'user_spouse_working', true)); ?>
						name="user_spouse_working"
						id="user_spouse_working"
					>
				</td>
			</tr>
			<?php if (!get_user_meta($user->ID, 'user_spouse_working', true)){$hidden_row = 'hidden';} ?>
			<tr class="<?= $hidden_row ?>">
				<th><label for="user_spouse_occupation">Occupation</label></th>
				<td>
					<input 
						type="text" 
						name="user_spouse_occupation" 
						id="user_spouse_occupation" 
						value="<?php echo get_user_meta($user->ID, 'user_spouse_occupation', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
			<tr class="<?= $hidden_row ?>">
				<th><label for="user_spouse_employer">Employer</label></th>
				<td>
					<input 
						type="text" 
						name="user_spouse_employer" 
						id="user_spouse_employer" 
						value="<?php echo get_user_meta($user->ID, 'user_spouse_employer', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
			<tr class="<?= $hidden_row ?>">
				<th><label for="user_spouse_work_phone">Work phone</label></th>
				<td>
					<input 
						type="text" 
						name="user_spouse_work_phone" 
						id="user_spouse_work_phone" 
						value="<?php echo get_user_meta($user->ID, 'user_spouse_work_phone', true); ?>" 
						class="regular-text"
					>
				</td>
			</tr>
		</table>
	<h2>Other notes</h2>	
		<table class="form-table">		
			<tr>
				<th><label for="user_child_diff_note">Does your child have any difficulties in learning that you know of, or an impairment in vision, hearing or speaking?</label></th>
				<td>
					<textarea name="user_child_diff_note" id="user_child_diff_note" rows="5" cols="30"><?php echo esc_textarea(get_user_meta($user->ID, 'user_child_diff_note', true)); ?></textarea>
				</td>
			</tr>
			<tr>
				<th><label for="user_child_health_note">Does you child have any allergies or health conditions that we need to be aware of?</label></th>
				<td>
					<textarea name="user_child_health_note" id="user_child_health_note" rows="5" cols="30"><?php echo esc_textarea(get_user_meta($user->ID, 'user_child_health_note', true)); ?></textarea>
				</td>
			</tr>			
			<tr>
				<th><label for="user_child_note">Do you have any concerns or any other important information about your child that we should know of?</label></th>
				<td>
					<textarea name="user_child_note" id="user_child_note" rows="5" cols="30"><?php echo esc_textarea(get_user_meta($user->ID, 'user_child_note', true)); ?></textarea>
				</td>
			</tr>																																		
		</table>
	<?php
		}
	}

	public function userMetaActivationSave($userId) {
		if (!current_user_can('edit_user', $userId)) {
			return;
		}
		$user = get_userdata( $userId );
		
		if($user->roles[0] == 'subscriber')
		{
			$this->updateUserMeta($_REQUEST, $userId);
			$headers = array('Content-Type: text/html; charset=UTF-8');
			$site_title = get_bloginfo( 'name' );
			$site_url = get_site_url( '/' );
			$receiver; $subject; $body;
			if($_REQUEST['user_active_status'])
			{
				$receiver = $user->user_email;
				$subject = 'Your account been activated';
				$body = 'Hi '.$user->user_nicename.',<br/><br/> 
				Now your account has been activated, You can use your username('.$user->user_login.')
				and password to <a href="'.esc_url( wp_login_url( get_permalink() ) ).'" alt="Login">login</a> to the site.<br/><br/>
				Regards,<br/><a href="'.$site_url.'">'.$site_title.'</a>';
			}
			else
			{
				$receiver = $user->user_email;
				$subject = 'Your account been deactivated';
				$body = 'Hi '.$user->user_nicename.',<br/><br/> 
				You account now deactivated.<br/><br/>
				Regards,<br/><a href="'.$site_url.'">'.$site_title.'</a>';
			}
			$result = wp_mail( $receiver, $subject, $body, $headers );
		}
	}

	public function update_sender_email_name( $original_email_address )
	{
		return 'Oasis Montessori Schools';
	}

	public function updateUserMeta($requests, $userId)
	{
		$cus_meta_keys = [
			"child_name", "child_age", "child_gender", "home_address", "home_city","home_state","home_zip",
		"emergency_contact","user_occupation","user_employer","user_work_phone","user_spouse_name","user_spouse_occupation",
		"user_spouse_employer","user_spouse_work_phone","user_child_diff_note","user_child_health_note","user_child_note"
		];
		$cus_meta_keys_text_area = ["user_child_diff_note","user_child_health_note","user_child_note"];

		foreach ($requests as $key => $value) {
			if( in_array($key, $cus_meta_keys))
			{
				if(in_array($key, $cus_meta_keys) && !in_array($key, $cus_meta_keys_text_area))
				{
					$escape_val = sanitize_text_field($value);
				}
				else
				{
					$escape_val = sanitize_textarea_field($value);
				}
				update_user_meta($userId, $key, $escape_val);
			}
		}
		update_user_meta($userId, 'user_active_status', $requests['user_active_status']);
	}

	public function custom_error_message($user, $username, $password) {
		if(isset($_GET['login']) && $_GET['login'] == 'notverified')
		{
			$user = new WP_Error( 'denied', 'Your account approval is still pending. You will receive an email once the administrator approves your account!!' );
		}
		return $user;
	}

	public function register_login_register_shortcodes()
	{
		add_shortcode('login_regis_user_profile', array($this, 'userProfileShortCode'));
		add_shortcode('login_regis_user_profile_edit', array($this, 'userProfileShortCodeEdit'));
	}

	public function userProfileShortCode()
	{
		$userProfilePage;
		$pageIDs = get_option('wp_login_reig');
		if ( is_user_logged_in() ) {
			$userProfile = get_user_by('ID', get_current_user_id());
			$userProfilePage .= '<div class="row">';
			$userProfilePage .= '<div class="col-sm-12 col-margins">';
			$userProfilePage .= 'Welcome '.$userProfile->display_name.'!';
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-margins">';
			$userProfilePage .= '<img src="'.esc_url( get_avatar_url( $userProfile->ID ) ).'"/>';
			$userProfilePage .= '</div>';
			if($userProfile->first_name)
			{
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>First name</label> : '.$userProfile->first_name;
			$userProfilePage .= '</div>';
			}
			if($userProfile->last_name)
			{
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Last name</label> : '.$userProfile->last_name;
			$userProfilePage .= '</div>';
			}
			if($userProfile->user_email)
			{
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Email</label> : '.$userProfile->user_email;
			$userProfilePage .= '</div>';
			}
			if($userProfile->display_name)
			{			
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Display name<l/abel> : '.$userProfile->display_name;
			$userProfilePage .= '</div>';
			}
			$userProfilePage .= '<div class="col-sm-12 col-md-12 col-margins"><h2>Child details</h2></div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Child Name</label> : '.get_user_meta($userProfile->ID, 'child_name', true);
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Child Age</label> : '.get_user_meta($userProfile->ID, 'child_age', true);
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-12 col-margins">';
			$userProfilePage .= '<label>Child Gender</label> : '.get_user_meta($userProfile->ID, 'child_gender', true);
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-12 col-margins"><h2>Current Address</h2></div>';			
			$userProfilePage .= '<div class="col-sm-12 col-md-3 col-margins">';
			$userProfilePage .= '<label>Home Address</label> : '.get_user_meta($userProfile->ID, 'home_address', true);
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-3 col-margins">';
			$userProfilePage .= '<label>City</label> : '.get_user_meta($userProfile->ID, 'home_city', true);;
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-3 col-margins">';
			$userProfilePage .= '<label>State</label> : '.get_user_meta($userProfile->ID, 'home_state', true);;
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-3 col-margins">';
			$userProfilePage .= '<label>Zip<l/abel> : '.get_user_meta($userProfile->ID, 'home_zip', true);;
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Emergency Contact</label> : '.get_user_meta($userProfile->ID, 'emergency_contact', true);;
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Occupation</label> : '.get_user_meta($userProfile->ID, 'user_occupation', true);;
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Employer<l/abel> : '.get_user_meta($userProfile->ID, 'user_employer', true);;
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Work phone</label> : '.get_user_meta($userProfile->ID, 'user_work_phone', true);;
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-12 col-margins"><h2>Spouse details</h2></div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Spouse Name</label> : '.get_user_meta($userProfile->ID, 'user_spouse_name', true);
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Occupation</label> : '.get_user_meta($userProfile->ID, 'user_spouse_occupation', true);
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Employer</label> : '.get_user_meta($userProfile->ID, 'user_spouse_employer', true);
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= '<label>Work phone</label> : '.get_user_meta($userProfile->ID, 'user_spouse_work_phone', true);
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-12 col-margins"><h2>Other details</h2></div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins"><label>Does your child have any difficulties in learning that you know of, or an impairment in vision, hearing or speaking?</label>  : </div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= get_user_meta($userProfile->ID, 'user_child_diff_note', true);
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins"><label>Does you child have any allergies or health conditions that we need to be aware of?</label> : </div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= get_user_meta($userProfile->ID, 'user_child_health_note', true);
			$userProfilePage .= '</div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins"><label>Do you have any concerns or any other important information about your child that we should know of?</label> : </div>';
			$userProfilePage .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePage .= get_user_meta($userProfile->ID, 'user_child_note', true);
			$userProfilePage .= '</div>';												
			
			
			$userProfilePage .= '<div class="col-sm-12 col-md-3 offset-md-9 col-margins">';
			$userProfilePage .= '<a class="custom_btn" href="'. esc_url( get_permalink( $pageIDs[1] ) ).'">Edit user profile</a>';
			$userProfilePage .= '</div>';
			$userProfilePage .= '</div>';
		} else {
			$userProfilePage = 'You have not logged-in. To view profile use <a href="'.esc_url( wp_login_url( get_permalink() ) ).'" alt="Login">login</a> page.';
		}
		return $userProfilePage;
	}

	public function userProfileShortCodeEdit()
	{
		global $post;
		$userProfilePageEdit;
		$user = wp_get_current_user();
		// if($user->roles[0] == )
		if ( is_user_logged_in() && in_array('subscriber', $user->roles) ) {
			
			$userProfile = get_user_by('ID', get_current_user_id());
			$gender = get_user_meta($userProfile->ID, 'child_gender', true);
			if($gender == 'male')
			{
				$options = '<option value="male" selected="selected">Male</option><option value="female">Female</option>';;
			}
			else
			{
				$options = '<option value="male">Male</option><option value="female" selected="selected">Female</option>';;
			}

			$userProfilePageEdit = '<div class="row">';
			$userProfilePageEdit .= '<div class="col-sm-12 col-margins">';
			$userProfilePageEdit .= 'Welcome '.$userProfile->display_name.'!';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<form name="user-profile-update" id="user-profile-update" method="post" action="'.admin_url( 'admin-post.php' ).'" enctype="multipart/form-data">';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<img src="'.esc_url( get_avatar_url( $userProfile->ID ) ).'"/><br/>';
			$userProfilePageEdit .= '<label>User profile image</label> <input type="file" id="user_profile" name="user_profile" accept="image/*">';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>First name</label> : <input class="form-control" type="text" name="first_name" value="'.(($userProfile->first_name) ? $userProfile->first_name : "").'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Last name</label> : <input class="form-control" type="text" name="last_name" value="'.(($userProfile->last_name) ? $userProfile->last_name : "").'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins" style="margin-left:0;">';
			$userProfilePageEdit .= '<label>Nick name</label> : <input class="form-control" type="text" name="nickname" value="'.(($userProfile->nickname) ? $userProfile->nickname : "").'"/>';
			$userProfilePageEdit .= '</div>';

			$userProfilePageEdit .= '<div class="col-sm-12 col-md-12 col-margins"><h2>Child details</h2></div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Child Name</label> : <input class="form-control" type="text" name="child_name" value="'.get_user_meta($userProfile->ID, 'child_name', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Child Age</label> : <input class="form-control" type="text" name="child_age" value="'.get_user_meta($userProfile->ID, 'child_age', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Child Gender</label> : <select class="form-control" name="child_gender" id="child_gender">';
			$userProfilePageEdit .= $options;
			$userProfilePageEdit .= '</select>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-12 col-margins"><h2>Current Address</h2></div>';			
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-12 col-margins">';
			$userProfilePageEdit .= '<label>Home Address</label> : <input class="form-control" type="text" name="home_address" value="'.get_user_meta($userProfile->ID, 'home_address', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>City</label> : <input class="form-control" type="text" name="home_city" value="'.get_user_meta($userProfile->ID, 'home_city', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>State</label> : <input class="form-control" type="text" name="home_state" value="'.get_user_meta($userProfile->ID, 'home_state', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Zip</label> : <input class="form-control" type="text" name="home_zip" value="'.get_user_meta($userProfile->ID, 'home_zip', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Emergency Contact</label> : <input class="form-control" type="text" name="emergency_contact" value="'.get_user_meta($userProfile->ID, 'emergency_contact', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Occupation</label> :  <input class="form-control" type="text" name="user_occupation" value="'.get_user_meta($userProfile->ID, 'user_occupation', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Employer</label> :  <input class="form-control" type="text" name="user_employer" value="'.get_user_meta($userProfile->ID, 'user_employer', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Work phone</label> :  <input class="form-control" type="text" name="user_work_phone" value="'.get_user_meta($userProfile->ID, 'user_work_phone', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-12 col-margins"><h2>Spouse details</h2></div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Spouse Name</label> : <input class="form-control" type="text" name="user_spouse_name" value="'.get_user_meta($userProfile->ID, 'user_spouse_name', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Occupation</label> : <input class="form-control" type="text" name="user_spouse_occupation" value="'.get_user_meta($userProfile->ID, 'user_spouse_occupation', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Employer</label> : <input class="form-control" type="text" name="user_spouse_employer" value="'.get_user_meta($userProfile->ID, 'user_spouse_employer', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<label>Work phone</label> : <input class="form-control" type="text" name="user_spouse_work_phone" value="'.get_user_meta($userProfile->ID, 'user_spouse_work_phone', true).'"/>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-12 col-margins"><h2>Other details</h2></div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins"><label>Does your child have any difficulties in learning that you know of, or an impairment in vision, hearing or speaking?</label>  : </div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<textarea class="form-control" name="user_child_diff_note" id="user_child_diff_note" rows="5" cols="30">';
			$userProfilePageEdit .= esc_textarea(get_user_meta($user->ID, 'user_child_diff_note', true)).'</textarea>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins"><label>Does you child have any allergies or health conditions that we need to be aware of?</label> : </div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<textarea class="form-control" name="user_child_health_note" id="user_child_health_note" rows="5" cols="30">';
			$userProfilePageEdit .= get_user_meta($userProfile->ID, 'user_child_health_note', true).'</textarea>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins"><label>Do you have any concerns or any other important information about your child that we should know of?</label> : </div>';
			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins">';
			$userProfilePageEdit .= '<textarea class="form-control" name="user_child_note" id="user_child_note" rows="5" cols="30">';
			$userProfilePageEdit .= get_user_meta($userProfile->ID, 'user_child_note', true).'</textarea>';
			$userProfilePageEdit .= '</div>';												

			$userProfilePageEdit .= '<div class="col-sm-12 col-md-6 col-margins text-center">';
			$userProfilePageEdit .= '<input class="btn btn-primary" type="submit" name="profileupdate" value="Save profile"/>';
			$userProfilePageEdit .= '<input type="hidden" name="redirect" value="'.get_permalink($post->ID).'">';
			$userProfilePageEdit .= '<input type="hidden" name="action" value="save_profile">';
			$userProfilePageEdit .= '<input type="hidden" name="profile_update" value="'.wp_create_nonce( 'save-cus-profile' ).'" />';
			$userProfilePageEdit .= '</form>';
			$userProfilePageEdit .= '</div>';
			$userProfilePageEdit .= '</div>';
		} else {
			$userProfilePageEdit = 'You have not authorized to view this page. Please <a href="'.esc_url( wp_registration_url( get_permalink() ) ).'" alt="Register">register</a>.';
		}
		return $userProfilePageEdit;
	}

	
	public function save_profile_details()
	{
		if( !wp_verify_nonce( $_POST['profile_update'], 'save-cus-profile') || empty($_POST['action']) )
		{
			return;
		}

		$this->updateUserMeta($_POST, get_current_user_id());
		$this->updateExtraMeta($_POST,$_FILES, get_current_user_id());
		wp_safe_redirect($_POST['redirect']);
		exit;
	}

	public function updateExtraMeta($post, $file, $userId)
	{
		global $wpdb;
		update_user_meta($userId, 'first_name', $post['first_name']);
		update_user_meta($userId, 'last_name', $post['last_name']);
		if(!empty($post['nickname']))
		{
			update_user_meta($userId, 'nickname', $post['nickname']);
		}

		$profile_image_id = $this->uploadProfileImage($file);
		$existingprofileimageID = get_user_meta($userId, $wpdb->get_blog_prefix() .'user_avatar', true);
	
		if(!empty($existingprofileimageID) && !empty($profile_image_id))
		{
			wp_delete_attachment($existingprofileimageID);
			update_user_meta($userId, $wpdb->get_blog_prefix() . 'user_avatar', $profile_image_id);
		}
		if(empty($existingprofileimageID) && !empty($profile_image_id))
		{
			update_user_meta($userId, $wpdb->get_blog_prefix() . 'user_avatar', $profile_image_id);
		}
		

	}

	public function uploadProfileImage($file)
	{
		$wordpress_upload_dir = wp_upload_dir();
		// $wordpress_upload_dir['path'] is the full server path to wp-content/uploads/2017/05, for multisite works good as well
		// $wordpress_upload_dir['url'] the absolute URL to the same folder, actually we do not need it, just to show the link to file
		$i = 1; // number of tries when the file with the same name is already exists
		
		$profilepicture = $file['user_profile'];
		$new_file_path = $wordpress_upload_dir['path'] . '/' . $profilepicture['name'];
		$new_file_mime = mime_content_type( $profilepicture['tmp_name'] );

		while( file_exists( $new_file_path ) ) {
			$i++;
			$new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $profilepicture['name'];
		}
		
		// looks like everything is OK
		if( move_uploaded_file( $profilepicture['tmp_name'], $new_file_path ) ) {
		
		
			$upload_id = wp_insert_attachment( array(
				'guid'           => $new_file_path, 
				'post_mime_type' => $new_file_mime,
				'post_title'     => preg_replace( '/\.[^.]+$/', '', $profilepicture['name'] ),
				'post_content'   => '',
				'post_status'    => 'inherit'
			), $new_file_path );
		
			// wp_generate_attachment_metadata() won't work if you do not include this file
			require_once( ABSPATH . 'wp-admin/includes/image.php' );
		
			// Generate and save the attachment metas into the database
			wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );

			return $upload_id;
		}
	}

	public function user_image($args, $id_or_email)
	{
		global $wpdb;
		$currentAvatar = wp_get_attachment_image_src(get_user_meta($id_or_email, $wpdb->get_blog_prefix() .'user_avatar', true));
		$args['url'] = $currentAvatar[0];
		if(!empty($currentAvatar))
		{
			$args['url'] = $currentAvatar[0];
		}
	
		return $args;

	}

	public function userRegisterActivate($user_id)
	{
		update_user_meta($user_id, 'user_active_status', '1');
	}	

}
