<?php

if(!defined('NWTS_INCLUDED_MAIL_PHP'))
{
	define('NWTS_INCLUDED_MAIL_PHP', true);
	
	require_once 'object.php';
	
	require_once 'naming.php';
	
	require_once 'log.php';
	
	define('NWTS_PHP_MAILER_DIR', dirname(__FILE__).DIRECTORY_SEPARATOR.'phpmailer'.DIRECTORY_SEPARATOR);
	
	require_once NWTS_PHP_MAILER_DIR.'class.phpmailer.php';
	
	interface EmailerSource
	{
		public function & getMailer();
	}
	
	class GmailEmailerSource extends Object implements EmailerSource
	{
		private $username;
		private $password;
		private $fromName;
		private $fromEmail;
		
		public function __construct($username, $password, $fromName, $fromEmail)
		{
			$this->username = $username;
			$this->password = $password;
			$this->fromName = $fromName;
			$this->fromEmail = $fromEmail;
		}
		
		public function & getMailer()
		{
			$mail = new PHPMailer(true);
			$mail->IsSMTP();
			$mail->SMTPAuth   = true;
			$mail->SMTPSecure = 'tls';
			$mail->Host       = 'smtp.gmail.com';
			$mail->Port       = 587;
			$mail->Username   = $this->username;
			$mail->Password   = $this->password;
			
			$mail->SetFrom($this->fromEmail, $this->fromName);
			$mail->AddReplyTo($this->fromEmail, $this->fromName);
			
			return $mail;
		}
	}

	require_once dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR.'config/mail.inc.php';
}
	
?>
