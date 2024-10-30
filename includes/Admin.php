<?php

namespace Bulk\Page\Maker;

/**
 * Admin class
 */
class Admin {
	
	/**
	 * the class constructor
	 * @return  void
	 */
	public function __construct() {
		$bulkpage = new Admin\Bulk_Page();

		$this->dispatch_actions( $bulkpage );
		new Admin\Menu( $bulkpage );
	}

	public function dispatch_actions( $bulkpage ) {
		add_action( 'admin_init', [ $bulkpage, 'form_handler' ] );
		add_action( 'admin_post_bpm-delete-action', [ $bulkpage, 'delete_page' ] );
	}
}