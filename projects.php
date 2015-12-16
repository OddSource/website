<?php

require 'header.php';

?>
							<h2>Projects</h2>
							<a href="/ValidationConstraints" class="heading">Bean Validation Constraints</a><br />
							The <a href="http://beanvalidation.org/" target="_blank">Java Bean Validation API</a> (JSR-303 version 1.0, JSR-349 version 1.1) contains many useful built-in constraints, such as <tt>@NotNull</tt> and <tt>@Size</tt>. However, these built-in constraints also fail to meet certain basic needs, such as <tt>@NotBlank</tt>, <tt>@NotEmpty</tt>, email constraints, expression constraints, multi-property constraints, and <tt>@NotNull</tt> versions of all of those constraints. This project contains many more constraints and also provides support for the Java 8 Date &amp; Time API (JSR-310), when available.
							<br /><br />
							<a href="/JpaConverters" class="heading">JPA 2.1 Converters</a><br />
							The latest version of the Java Persistence API, <a href="http://jcp.org/en/jsr/detail?id=338" target="_blank">JPA 2.1 specified in JSR-338</a>, provides a standard mechanism for converting non-standard entity attribute data types to basic datatypes that all JPA providers must support. Using these attribute converters is preferred over using provider-specific mechanisms, which hinders provider portability. This project contains some basic attribute converters for types such as <tt>InetAddress</tt> and the Java 8 Date &amp; Time API (JSR-310), when available.
							<br /><br />
							<a href="/JpaSearchFullText" class="heading">JPA Full-Text Search</a><br />
							The Java Persistence API provides no mechanisms designed specifically for searching data. Though the criteria API and the query and native query APIs can be useful for finding data in a relational database, the steps necessary to perform full-text searches and return results with hit scores are extensive, non-obvious, and repetitive. <a href="http://www.hibernate.org/subprojects/search.html" target="_blank">Hibernate Search</a> is a useful project for searching against <a href="http://lucene.apache.org/" target="_blank">Apache Lucine™</a> indexes, but not native full-text indexes. This project defines a simple but powerful API and helper annotations to make searching through native full-text indexes easy.
							<br /><br />
							<a href="/LicenseManager" class="heading">License Manager</a><br />
							The License Manager is a Java-based license management library for use by any Java project to maintain intellectual property security. It might just be a perfect world if all code were Open Source, but in the real world some projects are proprietary and licensed. This secure Java library helps you maintain, generate, store, secure and authenticate licenses in any Java-based application, whether desktop-, applet- or web-based.
							<br /><br />
							<a href="/RawSockets" class="heading">Raw Sockets</a><br />
							Sometimes, we just need to communicate using sockets and manipulate or access packet headers of outgoing or incoming packets. One example of this is the common command-line traceroute program, which cannot operate without raw socket access. This Open Source JNI C++/Java extension for Windows, Linux and Mac OS X meets this need.
							<br /><br />
							<a href="/TeamCityPlugins" class="heading">TeamCity Plugins</a><br />
							This umbrella project contains plugins for the <a href="http://www.jetbrains.com/teamcity/" target="_blank">TeamCity Continuous Integration Server</a>. The Shared Build Number plugin permits you to create standalone build numbers that can be shared between multiple build configurations and even projects. Using the Linux System Properties plugin, you can identify the distribution/flavor and version that your agents are running on so that you can filter them for platform-sensitive builds.
<?php

require 'footer.php';

?>
