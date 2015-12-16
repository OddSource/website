<?php

require 'header.php';

?>
<h2>Getting Started / Plugin Introductions</h2>

The installation instructions for all of our plugins is the same, and pretty straightforward:<br />

<ol>
	<li>Download the desired plugin ZIP package from the <a href="/TeamCityPlugin/download">downloads</a> page.</li>
	<li>Place the plugin ZIP package in the $TEAMCITY_HOME_DIRECTORY$/webapps/ROOT/plugins/ directory.</li>
	<li>Restart the TeamCity server.</li>
	<li>Go to Administration | Server Administration | Plugins List and verify that the plugin appears under External Plugins, and is the correct version.</li>
</ol>

Additionally, see the information below about each of our TeamCity plugins: <a href="#LinuxSystemProperties">LinuxSystemProperties</a> | <a href="#SharedBuildNumber">Shared Build Number</a><br />
<br />

<h3><a name="LinuxSystemProperties"></a>Linux System Properties</h3>
Linux System Properties was born out of TeamCity feature request <a href="http://youtrack.jetbrains.com/issue/TW-23523" target="_blank">TW-23523</a>. Typically, one can navigate to an authorized Agent, click on "Agent Parameters," and see numerous helpful properties under the System Properties tab that help identify that Agent. "os.arch," "os.name," and "os.version" are the most universal.<br />
<br />
On a Windows machine, those three might read "amd64," "Windows 7" and "6.1," respectively. Likewise on a Mac OS X Agent you might see "x86_64," "Mac OS X" and "10.8.1." However, things differ on a Linux Agent:<br />
<br />
<img src="/TeamCityPlugins/agent.properties.redhat-before.png" alt="Linux Agent properties before plugin" title="Linux Agent properties before plugin" style="border: 1px dashed #AAAAAA;" /><br />
<br />
While this information is technically accurate, "Linux" and "2.6.32-279.5.2.el6.x86_64" are not super helpful in identifying the environment the Agent is running in. On a SuSE machine these values were "Linux" and "3.1.10-1.16-desktop"; on a Debian machine, "Linux" and "3.0.0-17-generic."<br />
<br />
Because certain builds may need to run on specific Linux flavors (see: <a href="/RawSockets">Raw Sockets</a>), filtering the available Agents for a build configuration would require writing rules tied to the Agent name itself, rather than its generic system information. Enter Linux System Properties. An extraordinarily simple (and small), plugin, all it does is add a few additional properties to the Agent environment:<br />
<br />
<img src="/TeamCityPlugins/agent.properties.redhat-after.png" alt="Linux Agent properties with plugin" title="Linux Agent properties with plugin" style="border: 1px dashed #AAAAAA;" /><br />
<br />
With these simple property additions, one can now quickly identify (and using Agent rules, filter) Agents based on the underlying Linux system information. Currently supported Linux flavors are RedHat, SuSE and Debian, with recognized distributions being RedHat Enterprise, CentOS, SuSE Enterprise Linux, OpenSUSE, Debian and Ubuntu (and its variants). If a Linux flavor or distribution you are using is not supported yet, just <a href="/forums">request</a> it or consider contributing a patch!<br />
<br />

<h3><a name="SharedBuildNumber"></a>Shared Build Number</h3>
For years, TeamCity users have searched for the elusive (yet simple-seeming) TeamCity functionality known as the shared build number. Its premise is simple. As a TeamCity user: I should be able to indicate that two or more build configurations share a build number; I should be able to indicate the format of that build number; I should be able to add date and/or time stamps to that build number; I should be able to configure shared build numbers graphically through the TeamCity administration interface.<br />
<br />
At first users created a separate build configuration, often called something like "Shared Build Number," that was used exclusively for tracking a single build number. Build configurations that needed to share this build number referred to the other build's build number using build parameters. However, this was inelegant, easy to misconfigure, and needlessly used up one of the 20 build configurations that free TeamCity users are limited to.<br />
<br />
Then along came the <a href="http://confluence.jetbrains.net/display/TW/Autoincrementer" target="_blank">Autoincrementer</a> plugin, which provided a way to share build numbers between configurations. However, this had no user interface (users had to edit an XML file to change the configuration) and kept track of only the shared build counter; formatting still has to be done at each build configuration, which is redundant and easy to misconfigure.<br />
<br />
Neither of these solutions had support for dates within build numbers, either. Using the <a href="http://confluence.jetbrains.net/display/TW/Date+Build+Number" target="_blank">Date Build Number</a> plugin a user could insert a date into the build number format, but the combined configuration was clunky, and the Date Build Number plugin provides no way to customize the date format.<br />
<br />
The TeamCity Shared Build Number seeks to fulfill all of these needs, and we believe it does. We are now using it every day to manage the build numbers in our <a href="https://build.java.nicholaswilliams.net/" target="_blank">continuous integration environment</a>:<br />
<br />
<img src="//java.nicholaswilliams.net/TeamCityPlugins/sbn-screenshot-1.png" alt="Shared Build Number screenshot :: List of build numbers" title="Shared Build Number screenshot :: List of build numbers" style="border: 1px dashed #AAAAAA;" /><br />
<br />
Its simple interface ties in with the rest of the TeamCity administration console, and makes managing build numbers a breeze:<br />
<br />
<img src="//java.nicholaswilliams.net/TeamCityPlugins/sbn-screenshot-2.png" alt="Shared Build Number screenshot :: Editing a build number" title="Shared Build Number screenshot :: Editing a build number" style="border: 1px dashed #AAAAAA;" /><br />
<br />
And its tight integration with TeamCity's parameter hinting means configuring builds is fast and simple:<br />
<br />
<img src="//java.nicholaswilliams.net/TeamCityPlugins/sbn-screenshot-3.png" alt="Shared Build Number screenshot :: Using a build number" title="Shared Build Number screenshot :: Using a build number" style="border: 1px dashed #AAAAAA;" /><br />
<br />
We believe this simple plugin is powerful enough to meet almost any users' needs. However, you can always <a href="/forums">suggest</a> an improvement, and we would be happy to consider it.

<?php

require 'footer.php';

?>
