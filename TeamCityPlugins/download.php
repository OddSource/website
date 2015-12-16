<?php

require 'header.php';

$directory = realpath(__DIR__ . '/../downloads/files');

$lsp_file = 'linux-system-properties-0.9.14-RC1.zip';
$lsp_md5 = file_get_contents($directory . '/' . $lsp_file . '.md5');
$lsp_sha = file_get_contents($directory . '/' . $lsp_file . '.sha1');
$lsp_asc = file_get_contents($directory . '/' . $lsp_file . '.asc');

$sbn_file = 'shared-build-number-0.9.2-RC1.zip';
$sbn_md5 = file_get_contents($directory . '/' . $sbn_file . '.md5');
$sbn_sha = file_get_contents($directory . '/' . $sbn_file . '.sha1');
$sbn_asc = file_get_contents($directory . '/' . $sbn_file . '.asc');

?>
<h2>Downloads</h2>
You should always verify the signature or checksum of a downloaded file to the ones provided on this page. Use `md5sum` or `sha1sum` to calculate the MD5 or SHA checksums for comparison, or (better) use PGP and the <a href="/downloads/KEYS">KEYS</a> file to verify the signature.<br />
<br />

<h3>Linux System Properties 0.9.14 (RC1)</h3>
<a href="/download/<?php echo $lsp_file ?>"><?php echo $lsp_file ?></a><br />
MD5 Checksum: (<a href="/download/<?php echo $lsp_file ?>.md5">download</a>)<br />
<pre class="signature"><?php echo $lsp_md5; ?></pre><br />
SHA-1 Checksum: (<a href="/download/<?php echo $lsp_file ?>.sha1">download</a>)<br />
<pre class="signature"><?php echo $lsp_sha; ?></pre><br />
PGP Signature: (<a href="/download/<?php echo $lsp_file ?>.asc">download</a>)<br /><pre class="signature"><?php echo $lsp_asc; ?></pre><br />
<br />

<h3>Shared Build Number 0.9.2 (RC1)</h3>
<a href="/download/<?php echo $sbn_file ?>"><?php echo $sbn_file ?></a><br />
MD5 Checksum: (<a href="/download/<?php echo $sbn_file ?>.md5">download</a>)<br />
<pre class="signature"><?php echo $sbn_md5; ?></pre><br />
SHA-1 Checksum: (<a href="/download/<?php echo $sbn_file ?>.sha1">download</a>)<br />
<pre class="signature"><?php echo $sbn_sha; ?></pre><br />
PGP Signature: (<a href="/download/<?php echo $sbn_file ?>.asc">download</a>)<br /><pre class="signature"><?php echo $sbn_asc; ?></pre><br />
<br />

<?php

require 'footer.php';

?>
