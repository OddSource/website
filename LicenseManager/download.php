<?php

require 'header.php';

$file = 'net.nicholaswilliams.java.licensing-1.1.0.zip';
$directory = realpath(__DIR__ . '/../downloads/files');

$md5 = file_get_contents($directory . '/' . $file . '.md5');
$sha = file_get_contents($directory . '/' . $file . '.sha1');
$asc = file_get_contents($directory . '/' . $file . '.asc');

?>
<h2>Downloads</h2>
The easiest way to get License Manager is using the Ivy or Maven dependencies available in the Maven Central Repository.<br />
<br />
<b>Maven</b>
<pre class="prettyprint linenums"><code class="language-xml"><?php echo htmlspecialchars('    <dependencies>
        <dependency><!-- Use this dependency in your licensed application -->
            <groupId>net.nicholaswilliams.java.licensing</groupId>
            <artifactId>licensing-core</artifactId>
            <version>1.1.0</version>
        </dependency>
        <dependency><!-- Use this dependency in the application that you generate licenses with -->
            <groupId>net.nicholaswilliams.java.licensing</groupId>
            <artifactId>licensing-licensor-base</artifactId>
            <version>1.1.0</version>
        </dependency>
    </dependencies>');?></code></pre>
<b>Ivy</b>
<pre class="prettyprint linenums"><?php echo htmlspecialchars('    <dependencies>
        <!-- Use this dependency in your licensed application -->
        <dependency org="net.nicholaswilliams.java.licensing" name="licensing-core" rev="1.1.0" />
        <!-- Use this dependency in the application that you generate licenses with -->
        <dependency org="net.nicholaswilliams.java.licensing" name="licensing-licensor-base" rev="1.1.0" />
    </dependencies>'); ?></pre>
You will still need the download below (or the licensing-licensor-ui-cli artifact downloaded from Maven central) to generate keys and code from the command line. You should always verify the signature or checksum of a downloaded file to the ones provided on this page. Use `md5sum` or `sha1sum` to calculate the MD5 or SHA checksums for comparison, or (better) use PGP and the <a href="/downloads/KEYS">KEYS</a> file to verify the signature.<br />
<br />
<span style="font-color:#DD0000; font-weight:bold;">Important Note: </span> A <span class="bold">breaking API change</span> was made between versions 1.0.0 and 1.1.0. Please read the <a href="changelog">Release Notes</a> for more information before upgrading.<br />
<br />
<h3>License Manager 1.1.0 (GA)</h3>
<a href="/download/<?php echo $file ?>"><?php echo $file ?></a><br />
MD5 Checksum: (<a href="/download/<?php echo $file ?>.md5">download</a>)<br />
<pre class="signature"><?php echo $md5; ?></pre><br />
SHA-1 Checksum: (<a href="/download/<?php echo $file ?>.sha1">download</a>)<br />
<pre class="signature"><?php echo $sha; ?></pre><br />
PGP Signature: (<a href="/download/<?php echo $file ?>.asc">download</a>)<br /><pre class="signature"><?php echo $asc; ?></pre><br />
<br />
<h3>Older Downloads</h3>
<?php

$versions = array('1.0.0');

foreach($versions as $version)
{
	$file = 'net.nicholaswilliams.java.licensing-' . $version . '.zip';
	
	echo '<a href="/download/' . $file . '">' . $file . '</a>'."\n".'(';
	
	if(file_exists($directory . '/' . $file . '.md5'))
		echo '<a href="/download/' . $file . '.md5">MD5</a>, ';
	
	if(file_exists($directory . '/' . $file . '.sha1'))
		echo '<a href="/download/' . $file . '.sha1">SHA-1</a>, ';
	
	echo '<a href="/download/' . $file . '.asc">PGP</a>, <a href="/LicenseManager/api-docs/' . $version . '/">api docs</a>)<br />'."\n";
}

require 'footer.php';

?>
