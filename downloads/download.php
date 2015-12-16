<?php

require_once '../includes/log.php';

if(headers_sent())
{
	header('HTTP/1.0 500 Internal Server Error', true, 500);
	write_log('download', 'ERROR', 'Headers already sent');
	die('Headers already sent.');
}

if(!isset($_GET['file']))
{
	header('HTTP/1.0 404 Not Found', true, 404);
	write_log('download', 'WARN ', 'No file specified');
	exit();
}

$file = __DIR__.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR.$_GET['file'];

if(!file_exists($file))
{
	header('HTTP/1.0 404 Not Found', true, 404);
	write_log('download', 'WARN ', 'File not found: '.$file);
	exit();
}

$mysqli = new mysqli('localhost', 'javaCode', 'TrAWReXe8h6w82t', 'javaCode');

if($mysqli->connect_errno)
{
	write_log('mysql', 'ERROR', 'Failed to connect to the MySQL server ('.$mysqli->connect_errno.') '.$mysqli->connect_error);
}
else
{
	$mysqli->autocommit(false);
	
	$stmt = $mysqli->prepare('SELECT * FROM FileDownloadCounter WHERE FileName = ?');
	if(!$stmt)
	{
		write_log('mysql', 'ERROR', 'Failed to prepare statement ('.$mysqli->errno.') '.$mysqli->error);
	}
	else
	{
		$stmt->bind_param('s', $fileParam);
		$fileParam = $_GET['file'];
		
		if(!$stmt->execute())
		{
			write_log('mysql', 'ERROR', 'Failed to execute query ('.$mysqli->errno.') '.$mysqli->error);
		}
		else
		{
			$stmt->store_result();
			
			if($stmt->num_rows == 0)
			{
				$stmt->close();
				$stmt = $mysqli->prepare('INSERT INTO FileDownloadCounter (FileName, DownloadCount) VALUE (?, 1)');
			}
			else
			{
				$stmt->close();
				$stmt = $mysqli->prepare('UPDATE FileDownloadCounter SET DownloadCount = DownloadCount + 1 WHERE FileName = ?');
			}
			
			if(!$stmt)
			{
				write_log('mysql', 'ERROR', 'Failed to prepare statement ('.$mysqli->errno.') '.$mysqli->error);
			}
			else
			{
				$stmt->bind_param('s', $fileParam);
                		$fileParam = $_GET['file'];
				if(!$stmt->execute())
				{
					write_log('mysql', 'ERROR', 'Failed to execute update ('.$mysqli->errno.') '.$mysqli->error);
				}
				else
				{
					$stmt->close();
				}
			}
			
			$mysqli->commit();
		}
		
		$mysqli->close();
	}
}

$as_file = __DIR__.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR.'.as.'.$_GET['file'];
$disposition_filename = $_GET['file'];
if(file_exists($as_file) && filesize($as_file) > 2)
{
	$disposition_filename = trim(file_get_contents($as_file));
}

header('Pragma: public'); 
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0'); 
header('Cache-Control: private', false);
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="'.$disposition_filename.'"');
header("Content-Transfer-Encoding: binary");
header('Content-Length: '.filesize($file));

ob_clean(); 
flush(); 

if(!readfile($file))
{
	write_log('download', 'ERROR', 'An error occurred transmitting the file '.$file.' to the client.');
}

?>
