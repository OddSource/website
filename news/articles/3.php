<?php

$title = 'New Integrated Build Environment Deployed';

require 'header.php';

?>
							<h2>New Integrated Build Environment Deployed</h2>
							<div class="subheading">2012-08-23 07:12 GMT-0600 - Nick Williams</div>
							A new integrated build environment has been deployed and can be used and referenced by all at <a href="https://build.java.nicholaswilliams.net/" target="_blank">https://build.java.nicholaswilliams.net/</a>. Our previous environment was TeamCity 6.0 with a Professional (free) license, limiting us to 20 build configurations and 3 build agents. Our new environment is TeamCity 7.1 with a OpenSource Enterprise license.<br />
							<br />
							Some important advantages this gains us:<br />
							<ul>
								<li><a href="http://www.jetbrains.com/" target="_blank">JetBrains</a> has approved NWTS Java Code as an OpenSource organization. This gives us access to the unlimited/enterprise versions of their products for the OpenSource price of $0.00. Once each year, in June, we will have to justify our status as on OpenSource partner and renew our licenses with JetBrains. As long as we do that, we can continue to use their world-class products.</li>
								<li>We can now have unlimited build agents. This will become especially important as development ramps up on RawSockets. RawSockets, being JNI, requires compilation on multiple environments (read: multiple agents). Additionally, this means less time will be spent waiting for an available build agent during continued development on multiple projects simultaneously means.</li>
								<li>We can now have unlimited build configurations. This will not only give us the flexibility to work on multiple versions of multiple projects, it will also give us greater flexibility for configuring RawSockets compilations in the best way possible.</li>
							</ul>
							
							We would like to extend our thanks to the <a href="http://www.jetbrains.com/" target="_blank">JetBrains</a> team for making this major improvement possible!
							

<?php

require 'footer.php';

?>
