<?php

if(!defined('NWTS_INCLUDED_SQL_PHP'))
{
	define('NWTS_INCLUDED_SQL_PHP', true);
	
	require_once 'object.php';
	
	require_once 'naming.php';
	
	require_once 'log.php';
	
	interface DataSource
	{
		public function & getConnection();
	}
	
	class DataSourceImpl extends Object implements DataSource
	{
		private $url = '';
		private $username = '';
		private $password = '';
		
		public function __construct($url, $username=null, $password=null)
		{
			$this->url = $url;
			$this->username = $username;
			$this->password = $password;
		}
		
		public function & getConnection()
		{
			$connection = new PDO($this->url, $this->username, $this->password, array(PDO::ATTR_PERSISTENT => true));
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $connection;
		}
	}

	require_once dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR.'config/sql.inc.php';
}

?>
