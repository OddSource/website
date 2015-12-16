<?php

require 'header.php';

?>
<h2>Getting Started</h2>
There are three components to using the License Manager: key generation, license creation and license utilization. These three things are all you have to do to use the License Manager.<br />
<br />
First, a note about the libraries. License Manager is broken up into several Jar files, and each has a specific purpose:<br />
<ul>
	<li><span class="bold">net.nicholaswilliams.java.licensing-core</span> - This is the Jar that you embed in and distribute with your software. You <span class="bold">must not</span> ship any other License Manager libraries with your software. Just this one.</li>
	<li><span class="bold">net.nicholaswilliams.java.licensing-licensor</span> - This is the Jar file that you embed in your license creation application. You will also need the core Jar file in your license creation application.</li>
	<li><span class="bold">net.nicholaswilliams.java.licensing-sources</span> - This is the sources Jar file that you can attach in your IDE to enable debugging against the License Manager source code.</li>
	<li><span class="bold">net.nicholaswilliams.java.licensing-javadoc</span> - This is the API documentation Jar file that you can attach in your IDE to enable code hint documentation.</li>
	<li><span class="bold">net.nicholaswilliams.java.licensing-samples</span> - This Jar file contains various samples for using License Manager.</li>
</ul>
Finally, we highly recommend you read the API documentation for any License Manager class you use. The examples below are useful, but there are many options and ways to customize the License Manager, and you only get the details by reading the detailed documentation.<br />
<br />

<h3>Key Generation</h3>
Since the License Manager uses public/private key security to protect licenses, you must first generate a public/private key pair. There are several ways to do this. The first way is to use the Command Line Interface (see the documentation). The second method is to use the RSAKeyPairGenerator to generate a key pair and save it encrypted to public and private key files:
<pre class="prettyprint linenums"><code class="language-java"><?php echo file_get_contents('samples-01.01.java'); ?></code></pre>

The final method is to use the RSAKeyPairGenerator to generate a key pair and create implementations of the PrivateKeyDataProvider, PublicKeyDataProvider and PasswordProvider interfaces with the key and password data built in:
<pre class="prettyprint linenums"><code class="language-java"><?php echo file_get_contents('samples-01.02.java'); ?></code></pre>

If you want to encrypt the public and private keys with different passwords (recommended), you can do that, too:
<pre class="prettyprint linenums"><code class="language-java"><?php echo file_get_contents('samples-01.01b.java'); ?></code></pre>
<pre class="prettyprint linenums"><code class="language-java"><?php echo file_get_contents('samples-01.02b.java'); ?></code></pre>

<h3>License Creation</h3>
Creating a license is very simple in License Manager. There is a simple singleton LicenseCreator class that manages the creation of all licenses. You must set a couple properties before getting the instance the first time after the JVM is started. From then on, all other calls to getInstance() can be called alone.<br />
<br />
Note that you can either use one password to encrypt your public and private keys and license data, or you can use one password to encrypt your public key and another to encrypt your licenses and private key, or you can use one password to encrypt your private key and another to encrypt your licenses and public key, or you can use one password to encrypt your public and private keys and another password to encrypt your licenses, or you can use a different password for each one. Changing which passwords you use for which depends on which interfaces you implement. We highly recommend you use three different passwords, but more importantly we recommend you pick one scheme and stick to it permanently to prevent having to re-issue licenses.<br />
<br />
Application startup:
<pre class="prettyprint linenums"><code class="language-java"><?php echo file_get_contents('samples-02.01.java'); ?></code></pre>

License creation:
<pre class="prettyprint linenums"><code class="language-java"><?php echo file_get_contents('samples-02.02.java'); ?></code></pre>

You can encode the serialized license for plain-text transmission:
<pre class="prettyprint linenums"><code class="language-java">String trns = org.apache.commons.codec.binary.Base64.encodeBase64(licenseData);</code></pre>

And decode the license on the other end:
<pre class="prettyprint linenums"><code class="language-java">byte[] licenseData = org.apache.commons.codec.binary.Base64.decodeBase64(trns);</code></pre>

<h3>License Utilization</h3>
Verifying, validating and using licenses is nearly as simple as creating them; just a few more properties to set to create the LicenseManager singleton instance, and a few more interfaces to implement.<br />
<br />
Application startup:
<pre class="prettyprint linenums"><code class="language-java"><?php echo file_get_contents('samples-03.01.java'); ?></code></pre>

License utilization:
<pre class="prettyprint linenums"><code class="language-java"><?php echo file_get_contents('samples-03.02.java'); ?></code></pre>

<?php

require 'footer.php';

?>
