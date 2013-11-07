<?php
//-----------------------------------------------------------------------//
// Plugin Name: Hampus Persson - Custom Admin Login Screen
// Plugin URI: http://hmps.se
// Description: This plugin customizes the WP admin login screen
// Version: 1.0
// Author: Hampus Persson
// Author URI: http://hmps.se
// License: GPLv2
//-----------------------------------------------------------------------//

//-----------------------------------------------------------------------//
// Add custom logo to the login screen
//
// Since we need the path to the directory of the plugin the backgroun-image
// can't be set in the CSS-file.
//-----------------------------------------------------------------------//
function hp_login_enqueue_styles() {
	wp_enqueue_style( 'login', plugins_url( 'css/styles.css' , __FILE__ ), false );
	?>
	<style type="text/css">
		.login #login h1 a {
			background-image: url( <?php echo plugins_url( 'images/hp-logo.png' , __FILE__ ); ?> );
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'hp_login_enqueue_styles' );

function the_url( $url ) {
	return 'http://hmps.se';
}
add_filter( 'login_headerurl', 'the_url' );