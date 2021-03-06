<?php
/**
 * Created by PhpStorm.
 * User: Vagenas Panagiotis <pan.vagenas@gmail.com>
 * Date: 17/10/2014
 * Time: 8:20 μμ
 */

namespace bestprice\menu_pages\panels;

if ( ! defined( 'WPINC' ) ) {
	exit( 'Do NOT access this file directly: ' . basename( __FILE__ ) );
}

use xd_v141226_dev\menu_pages\panels\panel;

class map extends panel {
	/**
	 * @var string Heading/title for this panel.
	 * @extenders Should be overridden by class extenders.
	 */
	public $heading_title = 'Map Fields';

	/**
	 * @var string Content/body for this panel.
	 * @extenders Should be overridden by class extenders.
	 */
	public $content_body = '';

	/**
	 * @var string Additional documentation for this panel.
	 * @extenders Can be overridden by class extenders.
	 */
	public $documentation = '';

	public function __construct( $instance, $menu_page ) {
		parent::__construct( $instance, $menu_page );
		/**
		 * Add the content
		 */
		$this->content_body  = $this->©views->view( $this, 'map_panel.php' );
		$this->documentation = $this->©views->view( $this, 'documentation_map.php' );
	}
} 