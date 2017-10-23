<?php
/**
 * Plugin action links.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package   @@pkg.name
 * @copyright @@pkg.copyright
 * @author    @@pkg.author
 * @license   @@pkg.license
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add links to the settings page to the plugin.
 *
 * @since	1.0.0
 * @param	string|string $links The links.
 * @param       string|string $file The plugin.
 * @return      string
 */
function logindesigner_seasonal_backgrounds_action_links( $links, $file ) {

	static $this_plugin;

	if ( empty( $this_plugin ) ) {

		$this_plugin = 'login-designer-seasonal-backgrounds/login-designer-seasonal-backgrounds.php';
	}

	if ( $file === $this_plugin ) {

		$settings_link = sprintf( esc_html__( '%1$s Select Background %2$s', '@@textdomain' ), '<a href="' . admin_url( 'themes.php?page=login-designer' ) . '">', '</a>' );

		array_unshift( $links, $settings_link );
	}

	return $links;
}
add_action( 'plugin_action_links', 'logindesigner_seasonal_backgrounds_action_links' , 10, 2 );
