<?php

require 'header.php';

?>
<h2>Documentation</h2>
Be sure you have read <a href="/TeamCityPlugins/introduction">Getting Started / Plugins</a> before consulting this documentation. There is separate documentation for each TeamCity plugin: <a href="#LinuxSystemProperties">LinuxSystemProperties</a> | <a href="#SharedBuildNumber">Shared Build Number</a><br />
<br />

<h3><a name="LinuxSystemProperties"></a>Linux System Properties</h3>
Due to its simplicity and lack of any settings, configuration or user interface component, there is no documentation other than that on the Getting Started page. Simply install the plugin and use the newly-available system properties to your liking.<br />
<br />

<h3><a name="SharedBuildNumber"></a>Shared Build Number</h3>
The Shared Build Number plugin stores its configuration in $TEAMCITY_DATA_DIRECTORY$/shared-build-number-config.xml. Because of this, all standard TeamCity backup processes should already back up this file. You should, however, confirm that this file is making it into your regular backup processes. Otherwise, you could lose your entire shared build number configuration in the event of a problem with your systems.<br />
<br />
While it is certainly possible to edit $TEAMCITY_DATA_DIRECTORY$/shared-build-number-config.xml directly and configure the plugin manually, it is not recommended; users should manage shared build numbers using the user interface available at Administration | Project-related Settings | Shared Build Numbers. If for some reason you should need to edit this file manually, you should consult the self-documented XML schema document $TEAMCITY_DATA_DIRECTORY$/shared-build-number-config-1.0.xsd. We will not cover the process of editing the XML file in this document.<br />
<br />
Any manual changes to the XML file will be picked up by TeamCity within approximately 15 seconds.<br />
<br />
<i>Documentation will be completed at a later date.</i>
<?php

require 'footer.php';

?>
