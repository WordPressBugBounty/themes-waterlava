<?php
/**
 * Theme Functions
 *
 * @author Jegstudio
 * @package waterlava
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'WATERLAVA_VERSION' ) || define( 'WATERLAVA_VERSION', '1.3.0' );
defined( 'WATERLAVA_DIR' ) || define( 'WATERLAVA_DIR', trailingslashit( get_template_directory() ) );

defined( 'GUTENVERSE_COMPANION_REQUIRED_VERSION' ) || define( 'GUTENVERSE_COMPANION_REQUIRED_VERSION', '1.0.5' );
defined( 'GUTENVERSE_LIBRARY_SERVER' ) || define( 'GUTENVERSE_LIBRARY_SERVER', 'https://gutenverse.com' );

require get_parent_theme_file_path( 'inc/autoload.php' );

Waterlava\Init::instance();
