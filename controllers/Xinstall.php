<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Xinstall extends MX_Controller  {
	/**
	 * Index controller for WEBSITE module.
	 *
	 * XCMSv1.0;
	 * Developed by: www.uxcritivo.com
	 * Licence MIT
	 * Check project: uxcritivo.github.io/xcms 
	 * 
	 */
	function __construct()
	{
		parent::__construct();				
	}
	public function index()
	{
		$this->_remap();
	}
	
	public function _remap()
	{
		
		$this->load->view('install');
		
	}
	
}