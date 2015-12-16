<?php

require 'header.php';

?>
<h2>Raw Sockets Overview</h2>
Sometimes, we just need to communicate using sockets and manipulate or access packet headers of outgoing or incoming packets. One example of this is the common command-line traceroute program, which cannot operate without raw socket access.<br />
<br />
Raw Sockets is a Java-based library providing JNI access to the raw socket C API. This allows Java applications, through a pure Java API, to manipulate the IP headers for outgoing packets and access the IP headers for incoming packets. Developers and application deployers need only drop one of the precompiled C++ libraries into the library path for their Java virtual machine, or specify it as a command-line argument at runtime.<br />
<br />
Raw Sockets is still in the early development stages. Developers can access the source code in the <a href="https://github.com/OddSource/java-raw-sockets" target="GitHub">RawSockets repository</a>.

<?php

require 'footer.php';

?>
