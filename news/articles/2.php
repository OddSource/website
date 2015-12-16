<?php

$title = 'License Manager Release Candidate Available';

require 'header.php';

?>
							<h2>License Manager Release Candidate Available</h2>
							<div class="subheading">2012-05-23 06:30 GMT-0600 - Nick Williams</div>
							A release candidate is available for the first version of our License Manager project. Version 0.9.4-RC1 (build 0.9.4.96) is available from the <a href="/LicenseManager/download">downloads</a> page. Be sure to verify the file signature or MD5 or SHA1 checksum after downloading before use.<br />
							<br />
							The License Manager is a Java-based license management library for use by any Java project to maintain intellectual property security. You can use License Manager to help you create, issue and manage licenses for your commercial product. The release candidate will be out and for a few weeks as it is used and tested by the general community. In early June, the final build will be issued (1.0.0-FINAL).<br />
							<br />
							0.9.4-RC1 contains several improvements and bug fixes over 0.9.2-beta, noteably:<br />
							<ul>
								<li>Resolved a NullPointerException in ConsoleRSAKeyPairGenerator.</li>
								<li>Added a public method to the LicenseManager class to make verifying the signature on individual licenses easier.</li>
								<li>Updated external resource URLs for Javadoc generation.</li>
								<li>Finished the text/console interface with addition of ConsoleLicenseGenerator. In previous versions of License Manager, the text interface only generated public/private keys and wrote them to files or generated providers as requested. In this version, the text interface can also generate licenses.</li>
								<li>Added standard FilePublicKeyDataProvider and FilePrivateKeyDataProvider classes, simple file-storage-based implementations of the key provider classes that take a file or file name in the constructor and provide the key by extracting it from the file.</li>
								<li>Added methods to the LicenseManager class that enable verification of license signatures and extraction of license objects without going through the usual retrieval and caching mechanisms (useful for checking that license data is real/valid before allowing "installation" of a license in an application).</li>
								<li>Added the FeatureObject interface, which specifies that an object provides a feature name in a standardized way. This is useful for using enums to represent features in the hasLicenseForFeature(), hasLicenseForAnyFeature() and hasLicenseForAllFeatures() checks, instead of Strings. The enum need only implement this interface, and then enum constants can be passed to these methods.</li>
								<li>Updated the LicenseSecurityManager to ensure compatibility with Java 7. License Manager should work in Java 7 without issues, although it is compiled in Java 6 for backwards compatibility.</li>
								<li>Improved unit test code coverage significantly. 100% of all classes (39/39), 99.1% of methods (335/338), and 90.7% (1507/1662) of the lines of code in License Manager are now covered by 540 unit tests. Most uncovered lines are catch blocks that catch Java SE-thrown exceptions that are hard or impossible to simulate without misconfiguring the Java virtual machines.</li>
								<li>Several minor bugs and/or malfunctions were found through unit testing in the process of completing unit test code coverage. These bugs have been resolved.</li>
							</ul>
							
							The first version has full capabilities and comes with a text-based user interface for generating public/private keys and licenses. The second version will largely remain the same but will have a configurable graphical user interface for managing keys and licenses. More information will be posted about License Manager version 2 after 1.0.0-FINAL is released.

<?php

require 'footer.php';

?>
