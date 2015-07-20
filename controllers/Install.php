<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Install extends CI_Controller  {
	/**
	 *
	 * Codeigniter Install Mysql
	 * Developed by: www.joelferreira.eu
	 * Licence MIT
	 * Check project: https://github.com/joelviseu/codeigniter-start-mysql 
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