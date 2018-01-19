<?php

/*
Plugin Name: WordPress Featured Plugins
Description: Featured Plugins List
Author: kinolanka
Author URI: https://kinolanka.com
Text Domain: pdoor
Domain Path: /languages
License: GPLv2 or later
*/

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for plugin Plugins Doorbell
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'pdoor_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function pdoor_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		// array(
		// 	'name'               => 'TGM Example Plugin', // The plugin name.
		// 	'slug'               => 'tgm-example-plugin', // The plugin slug (typically the folder name).
		// 	'source'             => dirname( __FILE__ ) . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
		// 	'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		// 	'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		// 	'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		// 	'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		// 	'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		// 	'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		// ),

		// This is an example of how to include a plugin from an arbitrary external source in your theme.
		// array(
		// 	'name'         => 'TGM New Media Plugin', // The plugin name.
		// 	'slug'         => 'tgm-new-media-plugin', // The plugin slug (typically the folder name).
		// 	'source'       => 'https://s3.amazonaws.com/tgm/tgm-new-media-plugin.zip', // The plugin source.
		// 	'required'     => true, // If false, the plugin is only 'recommended' instead of required.
		// 	'external_url' => 'https://github.com/thomasgriffin/New-Media-Image-Uploader', // If set, overrides default API URL and points to an external URL.
		// ),

		// This is an example of how to include a plugin from a GitHub repository in your theme.
		// This presumes that the plugin code is based in the root of the GitHub repository
		// and not in a subdirectory ('/src') of the repository.
		// array(
		// 	'name'      => 'Adminbar Link Comments to Pending',
		// 	'slug'      => 'adminbar-link-comments-to-pending',
		// 	'source'    => 'https://github.com/jrfnl/WP-adminbar-comments-to-pending/archive/master.zip',
		// ),

		// This is an example of how to include a plugin from the WordPress Plugin Repository.

		// https://wordpress.org/plugins/kint-debugger/
		array(
			'name'      => 'Kint Debugger',
			'slug'      => 'kint-debugger',
			'required'  => false,
		),

		// https://wordpress.org/plugins/query-monitor/
		array(
			'name'      => 'Query Monitor',
			'slug'      => 'query-monitor',
			'required'  => false,
		),

		// https://wordpress.org/plugins/simply-show-hooks/
		array(
			'name'      => 'Simply Show Hooks',
			'slug'      => 'simply-show-hooks',
			'required'  => false,
		),

		// https://wordpress.org/plugins/show-current-template/
		array(
			'name'      => 'Show Current Template',
			'slug'      => 'show-current-template',
			'required'  => false,
		),

		// https://wordpress.org/plugins/child-theme-configurator/
		array(
			'name'      => 'Child Theme Configurator',
			'slug'      => 'child-theme-configurator',
			'required'  => false,
		),

		// https://wordpress.org/plugins/simple-custom-post-order/
		array(
			'name'      => 'Simple Custom Post Order',
			'slug'      => 'simple-custom-post-order',
			'required'  => false,
		),	

		// https://wordpress.org/plugins/duplicator/
		array(
			'name'      => 'Duplicator',
			'slug'      => 'duplicator',
			'required'  => false,
		),	

		// https://wordpress.org/plugins/duplicate-post/
		array(
			'name'      => 'Duplicate Post',
			'slug'      => 'duplicate-post',
			'required'  => false,
		),	

		// https://wordpress.org/plugins/duplicate-widgets/
		array(
			'name'      => 'Duplicate Widgets',
			'slug'      => 'duplicate-widgets',
			'required'  => false,
		),

		// https://wordpress.org/plugins/duplicate-menu/
		array(
			'name'      => 'Duplicate Menu',
			'slug'      => 'duplicate-menu',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/theme-check/
		array(
			'name'      => 'Theme Check',
			'slug'      => 'theme-check',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/transients-manager/
		array(
			'name'      => 'Transient Manager',
			'slug'      => 'transients-manager',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/ari-adminer/
		array(
			'name'      => 'ARI Adminer – WordPress Database Manager',
			'slug'      => 'ari-adminer',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/stops-core-theme-and-plugin-updates/
		array(
			'name'      => 'Easy Updates Manager',
			'slug'      => 'stops-core-theme-and-plugin-updates',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins//
		
		array(
			'name'      => 'FakerPress',
			'slug'      => 'fakerpress',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/loco-translate/
		
		array(
			'name'      => 'Loco Translate',
			'slug'      => 'loco-translate',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/meta-pixie/
		
		array(
			'name'      => 'Meta Pixie',
			'slug'      => 'meta-pixie',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/php-settings/
		
		array(
			'name'      => 'PHP Settings',
			'slug'      => 'php-settings',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/post-meta-inspector/
		
		array(
			'name'      => 'Post Meta Inspector',
			'slug'      => 'post-meta-inspector',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/user-switching/
		
		array(
			'name'      => 'User Switching',
			'slug'      => 'user-switching',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/wp-crontrol/
		
		array(
			'name'      => 'WP Crontrol',
			'slug'      => 'wp-crontrol',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/aryo-activity-log/
		
		array(
			'name'      => 'Activity Log',
			'slug'      => 'aryo-activity-log',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/regenerate-thumbnails/
		array(
			'name'      => 'Regenerate Thumbnails',
			'slug'      => 'regenerate-thumbnails',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/wp-migrate-db/
		
		array(
			'name'      => 'WP Migrate DB',
			'slug'      => 'wp-migrate-db',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/wp-retina-2x/
		
		array(
			'name'      => 'WP Retina 2x',
			'slug'      => 'wp-retina-2x',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/cyr3lat/
		
		array(
			'name'      => 'Cyr to Lat enhanced',
			'slug'      => 'cyr3lat',
			'required'  => false,
		),
		
		// https://wordpress.org/plugins/wp-cerber/
		
		array(
			'name'      => 'Cerber Security & Antispam',
			'slug'      => 'wp-cerber',
			'required'  => false,
		),
		
		// This is an example of the use of 'is_callable' functionality. A user could - for instance -
		// have WPSEO installed *or* WPSEO Premium. The slug would in that last case be different, i.e.
		// 'wordpress-seo-premium'.
		// By setting 'is_callable' to either a function from that plugin or a class method
		// `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
		// recognize the plugin as being installed.
		// array(
		// 	'name'        => 'WordPress SEO by Yoast',
		// 	'slug'        => 'wordpress-seo',
		// 	'is_callable' => 'wpseo_init',
		// ),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'pdoor',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'plugins.php',            // Parent menu slug.
		'capability'   => 'manage_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => false,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'pdoor' ),
			'menu_title'                      => __( 'Install Plugins', 'pdoor' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'pdoor' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'pdoor' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'pdoor' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'pdoor'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'pdoor'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'pdoor'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'pdoor'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'pdoor'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'pdoor'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'pdoor'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'pdoor'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'pdoor'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'pdoor' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'pdoor' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'pdoor' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'pdoor' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'pdoor' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'pdoor' ),
			'dismiss'                         => __( 'Dismiss this notice', 'pdoor' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'pdoor' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'pdoor' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}
