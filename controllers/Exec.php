<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Exec extends CI_Controller  {
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
		$this->_logardb();
	}
	
	private function _logardb()
	{
		$dsn = 'mysqli://'.$_POST['username'].':'.$_POST['password'].'@'.$_POST['hostname'];
		$this->load->database($dsn);
		$this->load->dbutil();
		try {
			$dbs = $this->dbutil->list_databases();
			if(count($dbs)>0){
				foreach ($dbs as $dbx)
				{				
					if($dbx==$_POST['database'])
					{   
						if(isset($_POST['force'])){
							$mysqli = new mysqli($_POST['hostname'], $_POST['username'],$_POST['password'], $_POST['database']);
							$mysqli->query("DROP DATABASE xcms");
							//echo 'Database DROP!<br/>';
							$this->dbforge->create_database($_POST['database']);
							//echo 'Database created!<br/>';
							$this->_execute();						
						}
						else
						{
							echo '<script>alert("Table Exist-ForceOverWrite");window.location.href="'.base_url().'/";</script>';
							//echo "Tables imported successfully<br/>";
							exit();
						}						
					}
					else
					{
						$this->load->dbforge();
						if ($this->dbforge->create_database($_POST['database']))
						{
							//echo 'Database created!<br/>';
							$this->_execute();
						}
					}
				}
			}
		} 
		catch (Exception $e) {
			echo "ERRO";
		}
	}
	private function _execute()
	{
		$dsn = 'mysqli://'.$_POST['username'].':'.$_POST['password'].'@'.$_POST['hostname'].'/'.$_POST['database'];
		$this->load->database($dsn);
		$this->db->reconnect();
		$mysqli = new mysqli($_POST['hostname'], $_POST['username'],$_POST['password'], $_POST['database']);
		if(isset($_POST['dummy']))
		{
			$filename = base_url().'demo/dummy.sql';
		}
		else
		{
			$filename = base_url().'demo/empty.sql';
		}
		$lines = file($filename);
		$templine='';
		foreach ($lines as $line)
		{
			if (substr($line, 0, 2) == '--' || $line == '')
				continue;
			$templine .= $line;
			if (substr(trim($line), -1, 1) == ';')
			{
				$mysqli->query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
				$templine = '';
			}
		}
		echo '<script>alert("INSTALL successfully");window.location.href="'.base_url().'";</script>';
		//echo "Tables imported successfully<br/>";
		exit();
	}
	
	private function _content()
	{
		$content ="<?php defined('BASEPATH') OR exit('No direct script access allowed');";
		$content .='$active_group = \'default\';';
		$content .='$query_builder = TRUE;';
		$content .='$db[\'default\'] = array(';
		$content .="
				'dsn'	=> '',
				'hostname' => '',
				'username' => '',
				'password' => '',
				'database' => '',
				'dbdriver' => 'mysqli',
				'dbprefix' => '',
				'pconnect' => FALSE,
				'db_debug' => TRUE,
				'cache_on' => FALSE,
				'cachedir' => '',
				'char_set' => 'utf8',
				'dbcollat' => 'utf8_general_ci',
				'swap_pre' => '',
				'encrypt' => FALSE,
				'compress' => FALSE,
				'stricton' => FALSE,
				'failover' => array(),
				'save_queries' => TRUE
		);";
		return $content;				
	}
}