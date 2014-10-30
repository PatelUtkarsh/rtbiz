<?php
/**
 * Don't load this file directly!
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Description of class-rt-biz
 *
 * @author udit
 */

if ( ! class_exists( 'Rt_Biz_Plugin_Upgrader_Skin' ) ) {

	if ( ! class_exists( 'Plugin_Upgrader' ) ) {
		require_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
	}
	require_once( ABSPATH . 'wp-admin/includes/file.php' );


	/**
	 * Class Rt_Biz_Plugin_Upgrader_Skin
	 * this class is used to upgrade or download plugins check function rtBiz_install_plugin in class-rt-biz
	 */
	class Rt_Biz_Plugin_Upgrader_Skin extends WP_Upgrader_Skin {

		function __construct( $args = array() ) {
			$defaults = array( 'type' => 'web', 'url' => '', 'plugin' => '', 'nonce' => '', 'title' => '' );
			$args     = wp_parse_args( $args, $defaults );

			$this->type = $args['type'];
			$this->api  = isset( $args['api'] ) ? $args['api'] : array();
			parent::__construct( $args );
		}

		public function request_filesystem_credentials( $error = false ) {
			return true;
		}

		public function error( $errors ) {
			die( $errors );
		}

		public function header() {
		}

		public function footer() {
		}

		public function feedback( $string ) {
		}
	}
}
