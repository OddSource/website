<?php

$title = 'License Manager 1.0.0 (GA) Released!';

require 'header.php';

?>
							<h2>License Manager 1.0.0 (GA) Released!</h2>
							<div class="subheading">2012-09-05 17:18 GMT-0600 - Nick Williams</div>
							The first generally available version of License Manager, 1.0.0 (GA), has been released and can be downloaded from the <a href="//java.nicholaswilliams.net/LicenseManager/download">downloads</a> page! It has many enhancements over the previously-announced release candidate 0.9.4-RC1, notably:<br />
							<ul>
								<li>Resolved <a href="https://issues.java.nicholaswilliams.net/issue/LICEN-4" target="_blank">LICEN-4</a>, an issue whereby a java.lang.SecurityException was thrown when deserializing a SignedLicense object.</li>
								<li>Resolved <a href="https://issues.java.nicholaswilliams.net/issue/LICEN-5" target="_blank">LICEN-5</a>, a usability issue possibly causing incorrectly-typed password because the ConsoleLicenseGenerator did not prompt for the user to confirm the previously-typed password.</li>
								<li>Resolved <a href="https://issues.java.nicholaswilliams.net/issue/LICEN-6" target="_blank">LICEN-6</a>, an issue whereby a java.lang.SecurityException was thrown if running two licensed applications in the same JVM but separate classloaders (i.e., multiple deployments in a single application server).</li>
								<li>Improved overall reliability and stability.</li>
								<li>Made some needlessly-private parts of the API public.</li>
								<li>Significantly improved test code coverage.</li>
							</ul>
							
							Note that an intermediate release candidate, 0.9.5-RC2, was available in TeamCity as of June 26, 2012 and can now be downloaded from the <a href="//java.nicholaswilliams.net/LicenseManager/download">downloads</a> page, but it was never officially announced.
							

<?php

require 'footer.php';

?>
