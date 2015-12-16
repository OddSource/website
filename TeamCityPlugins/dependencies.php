<?php

require 'header.php';

?>
<h2>Dependencies</h2>
All of our TeamCity plugins include their runtime dependencies in the ZIP file you download. This ZIP file is in a specific format that TeamCity understands, and any dependencies our plugins have at runtime will be included in that ZIP file. Unless you modify and compile the project yourself, you will never need to worry about these dependencies. In almost all cases, the dependencies are actually provided by TeamCity.<br />
<br />
There are libraries required to execute unit tests and build the project using the included Ant scripts; these dependencies are detailed below.<br />
<br />
<h3>Test</h3>
<table class="dependencies">
	<tr>
		<th>Library</th>
		<th>Version</th>
		<th>Type</th>
		<th>License</th>
	</tr>
	<tr>
		<td><a href="http://sourceforge.net/projects/cglib/" target="_blank">cglib</a></td>
		<td>2.2.0</td>
		<td>Jar</td>
		<td><a href="http://www.apache.org/licenses/LICENSE-2.0.html" target="_blank">Apache License, Version 2.0</a></td>
	</tr>
	<tr>
		<td><a href="http://easymock.org/" target="_blank">easymock</a></td>
		<td>3.1.0</td>
		<td>Jar</td>
		<td><a href="http://www.apache.org/licenses/LICENSE-2.0.html" target="_blank">Apache License, Version 2.0</a></td>
	</tr>
	<tr>
		<td><a href="http://www.junit.org/" target="_blank">junit</a></td>
		<td>4.10.0</td>
		<td>Jar</td>
		<td><a href="http://www.opensource.org/licenses/cpl1.0" target="_blank">Common Public License, Version 2.0</a></td>
	</tr>
	<tr>
		<td><a href="http://asm.ow2.org/" target="_blank">objectweb</a></td>
		<td>4.0.0</td>
		<td>Jar</td>
		<td><a href="http://asm.ow2.org/license.html" target="_blank">BSD License</a></td>
	</tr>
	<tr>
		<td><a href="http://code.google.com/p/objenesis/" target="_blank">objenesis</a></td>
		<td>1.2.0</td>
		<td>Jar</td>
		<td><a href="http://www.apache.org/licenses/LICENSE-2.0.html" target="_blank">Apache License, Version 2.0</a></td>
	</tr>
</table><br />

<h3>Build</h3>
<table class="dependencies">
	<tr>
		<th>Library</th>
		<th>Version</th>
		<th>Type</th>
		<th>License</th>
	</tr>
	<tr>
		<td><a href="http://sourceforge.net/projects/ant-contrib/" target="_blank">ant-contrib</a></td>
		<td>1.0b3</td>
		<td>Jar</td>
		<td><a href="http://www.apache.org/licenses/LICENSE-2.0.html" target="_blank">Apache License, Version 2.0</a></td>
	</tr>
</table>
<?php

require 'footer.php';

?>