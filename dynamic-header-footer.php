<?php
/**
 * Plugin Name:     Dynamic Header Footer
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     dynamic-header-footer
 * Domain Path:     /languages
 * Version:         0.2
 *
 * @package         Dynamic_Header_Footer
 */

require_once 'class-dynamic-header-footer.php';
require_once 'class-dhf-admin-ui.php';

define( 'DHF_VER', '0.2' );
define( 'DHF_DIR', plugin_dir_path( __FILE__ ) );
define( 'DHF_URL', plugins_url( '/', __FILE__ ) );
define( 'DHF_PATH', plugin_basename( __FILE__ ) );
