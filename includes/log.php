<?php

if(!defined('NWTS_INCLUDED_LOG_PHP'))
{
	define('NWTS_INCLUDED_LOG_PHP', true);
	
	define('NWTS_LOG_DIR', dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR.'logs');
	
	function write_log($type, $level, $message, Exception & $throwable = NULL)
	{
		if($throwable != null)
			$message = $message . ' at ' . $throwable->getFile() . ':' . $throwable->getLine() . "\r\n" . $throwable->getTraceAsString();
		
		file_put_contents(NWTS_LOG_DIR.DIRECTORY_SEPARATOR.$type.'.log', date('Y-m-d H:i:s', time()).' '.$level.' '.$message."\r\n", FILE_APPEND | LOCK_EX);
	}
}

?>