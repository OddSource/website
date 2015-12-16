<?php

$title = 'New Issue Tracking System Deployed';

require 'header.php';

?>
							<h2>New Issue Tracking System Deployed</h2>
							<div class="subheading">2012-08-31 21:41 GMT-0600 - Nick Williams</div>
							A new issue tracking system has been deployed and is available now for bug and feature reporting and tracking. Our issue tracking system, <a href="https://issues.java.nicholaswilliams.net/" target="_blank">https://issues.java.nicholaswilliams.net/</a>, was previously The Bug Genie. We have migrated to <a href="http://www.jetbrains.com" target="_blank">JetBrains</a>'s YouTrack system because of improved usability and enhanced features.<br />
							<br />
							Among the important notes about this upgrade are:<br />
							<ul>
								<li><a href="http://www.jetbrains.com/" target="_blank">JetBrains</a> has approved NWTS Java Code as an OpenSource organization. This gives us access to the unlimited/enterprise versions of their products for the OpenSource price of $0.00. Once each year, in June, we will have to justify our status as on OpenSource partner and renew our licenses with JetBrains. As long as we do that, we can continue to use their world-class products.</li>
								<li>Seamless integration with our <a href="https://build.java.nicholaswilliams.net/" target="_blank">integrated build environment</a>, enabling build tracking within YouTrack and issue marking within TeamCity.</li>
								<li>Working integration between YouTrack and Subversion (via TeamCity), allowing association of commits with issues and feature requests.</li>
								<li>An overall better user experience and easier tasks of reporting issues and requesting features.</li>
								<li>Simpler user and permission administration.</li>
								<li>Drastically improved performance for issue tracking.</li>
							</ul>
							
							We would like to extend our thanks to the <a href="http://www.jetbrains.com/" target="_blank">JetBrains</a> team for making this major improvement possible!
							

<?php

require 'footer.php';

?>
