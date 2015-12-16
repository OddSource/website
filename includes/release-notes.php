<?php

if(!defined('PROJECT_DIRECTORY') || !defined('PROJECT_PREFIX'))
{
	header('Location: /');
	exit();
}

$file = PROJECT_DIRECTORY.DIRECTORY_SEPARATOR.'RELEASE.TXT';

if(!file_exists($file))
{
	header('HTTP/1.0 404 Not Found', true, 404);
	exit();
}

include 'release-notes-function.php';

$originalContents = file_get_contents($file);

?>
<h2>Release Notes</h2>
<span class="small">(<a href="changelog.txt" class="small">plain text version</a>)</span><br />
<br />
<?php echo format_release_notes($originalContents, PROJECT_PREFIX); ?>
<?php



?>
