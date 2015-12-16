<?php

$title = 'Upcoming Projects';

require 'header.php';

?>
							<h2>Upcoming Projects</h2>
							<div class="subheading">2012-05-23 06:28 GMT-0600 - Nick Williams</div>
							We have lots of ideas for upcoming projects. The Raw Sockets project gets our full attention starting next week, now that License Manager has a release candidate. Additionally, we are currently brainstorming several other network-protocol-related projects and a multi-face PowerDNS management GUI.<br />
							<br />
							The Raw Sockets project will provide access to the raw socket C API through a pure Java interface. This will enable Java applications to directly manipulate the IP headers of packets send and directly access the IP headers of packets received. It will include JNI precompiled libraries for most popular operating system flavors (Windows, Mac OS X, RedHat/CentOS, SUSE/openSUSE, Debian/Ubuntu), and of course the source code will be freely available for manual compilation whenever needed.<br />
							<br />
							We are also planning standard libraries that use and depend on Raw Sockets, such as Traceroute and Ping utilities.<br />
							<br />
							Finally, we're planning a prefab PowerDNS management GUI that provides numerous user interfaces, such as a web interface, a RESTful web service interface, and a desktop application. It will include tiers that can reside on separate machines if applicable, and methods for controlling access to certain DNS records and domains.

<?php

require 'footer.php';

?>
