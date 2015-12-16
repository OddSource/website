<?php

require 'header.php';

?>
<h2>TeamCity Plugins Overview</h2>
The TeamCity Plugins project is sort of a set of projects within a project, a collection of plugins that extend the functionality of the <a href="http://www.jetbrains.com/teamcity/" target="_blank">TeamCity Continuous Integration Server</a>. While two plugins are available at this time, we have not ruled out developing more plugins in the future.<br />
<br />
The initial set of plugins were born out of need; we needed certain functionality, and nobody seemed to be providing it (or were only providing a limited set of it). However, as the need for plugins arises, we encourage our users to <a href="/forums">suggest</a> additional plugins.<br />
<br />
<h3>Available Plugins</h3>
These are the TeamCity plugins currently available from NWTS Java Code:<br />
<ul>
	<li><a href="/TeamCityPlugins/introduction#LinuxSystemProperties" class="bold">Linux System Properties</a> &mdash; This plugin provides additional system properties on TeamCity Agents running on Linux Operating Systems. The available system properties do not enable a user to identify what distribution or flavor the Agent is running on. With Linux System Properties, you can now easily filter available Agents using the properties discovered by this plugin.</li>
	<li><a href="/TeamCityPlugins/introduction#SharedBuildNumber" class="bold">Shared Build Number</a> &mdash; For years TeamCity users have searched for the elusive shared build number: a way of sharing one build number between multiple TeamCity build configurations. This plugin is the <b>first</b> comprehensive, graphically-configured way of doing so.</li>
</ul>
<br />
<h3>How do I get and install plugins?</h3>
The easiest way is to <a href="/TeamCityPlugins/download">download</a> the packaged ready-to-deploy plugins and install them on your TeamCity server. Installing one of our plugins is easy; simply drop the downloaded .zip file in the $TEAMCITY_HOME_DIRECTORY$/webapps/ROOT/plugins/ directory and then restart the TeamCity server. The plugin will be automatically deployed and, if it includes Agent components, all of your authorized agents will automatically receive the plugin as well.<br />
<br />
Of course, you can always browse the <a href="https://github.com/OddSource/java-raw-sockets" target="GitHub">TeamCityPlugins repository</a> and download, compile and modify the plugins as needed.<br />
<br />
Get more help installing and configuring our TeamCity plugins <a href="/TeamCityPlugins/documentation">here</a>.
<?php

require 'footer.php';

?>
