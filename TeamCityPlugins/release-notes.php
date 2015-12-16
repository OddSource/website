<?php

define('PROJECT_DIRECTORY', dirname(__FILE__));

require 'header.php';

require '../includes/release-notes-function.php';

$lspContents = file_get_contents(PROJECT_DIRECTORY.DIRECTORY_SEPARATOR.'RELEASE_TC_LINUX.TXT');
$sbnContents = file_get_contents(PROJECT_DIRECTORY.DIRECTORY_SEPARATOR.'RELEASE_TC_SBN.TXT');

?>
<h2>Release Notes</h2>
There are separate release notes for each TeamCity plugin: <a href="#LinuxSystemProperties">LinuxSystemProperties</a> | <a href="#SharedBuildNumber">Shared Build Number</a><br />
<br />
<h2><a name="LinuxSystemProperties"></a>Linux System Properties</h2>
<span class="small">(<a href="RELEASE_TC_LINUX.TXT" class="small">plain text version</a>)</span><br />
<br />
<?php echo format_release_notes($lspContents, 'TC_LINUX'); ?>

<hr style="color:#009400; background-color:#AAAAAA; border-width:0px; height:1px;" />
<br />

<h2><a name="SharedBuildNumber"></a>Shared Build Number</h2>
<span class="small">(<a href="RELEASE_TC_SBN.TXT" class="small">plain text version</a>)</span><br />
<br />
<?php echo format_release_notes($sbnContents, 'TC_SBN'); ?>

<hr style="color:#009400; background-color:#AAAAAA; border-width:0px; height:1px;" />
<br />

<?php

require 'footer.php';

?>
