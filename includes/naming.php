<?php

if(!defined('NWTS_INCLUDED_NAMING_PHP'))
{
	require_once 'object.php';
	
	define('NWTS_INCLUDED_NAMING_PHP', true);
	
	class NamingContext
	{
		private static $objects = array();
		
		public static function register($name, Object & $object)
		{
			if(array_key_exists($name, NamingContext::$objects))
				throw new NamingException('Object '.$name.' already registered');
			
			NamingContext::$objects[ $name ] = $object;
		}
		
		public static function & lookup($name, $type=null)
		{
			if(!array_key_exists($name, NamingContext::$objects))
				throw new NamingException('Object '.$name.' not found');
			
			$object =& NamingContext::$objects[ $name ];
			
			if($type != null && is_string($type) && strlen($type) && !($object instanceof $type))
				throw new NamingException('Object '.$name.' instance of '.get_class($object).', expected '.$type);
			
			return $object;
		}
		
		private function __construct()
		{
			throw new Exception('NamingContext is a static class.');
		}
	}
	
	class NamingException extends Exception
	{
		public function __construct($message)
		{
			parent::__construct($message);
		}
	}
}

?>