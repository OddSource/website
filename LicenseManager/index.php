<?php

require 'header.php';

?>
<h2>License Manager Overview</h2>
The License Manager is a Java-based license management library for use by any Java project to maintain intellectual property security. It might just be a perfect world if all code were Open Source, but in the real world some projects are proprietary and licensed. This secure Java library helps you maintain, generate, store, secure and authenticate licenses in any Java-based application, whether desktop-, applet- or web-based.<br />
<br />
License Manager takes advantage of the platform-independent 2048-bit RSA public/private key security and AES/SHA-1 + Triple DES/MD5 encryption built into the Java framework to help generate and secure licenses. Licenses can contain any number of data, be stored and transmitted in any format you see fit, and delivered by any mechanism your needs demand.<br />
<br />
<h3>What does a license look like?</h3>
The License object in License Manager contains several fields that can be used for a variety of purposes, as well as a "features" field that makes the license pretty ubiquitous. Here are the hightlights:<br />
<br />
<span class="bold">productKey</span> - This String field can hold a product key, serial number, serial code or any other String-representable data necessary for identifying this license.<br />
<span class="bold">holder</span> - This String field can hold the holder's name, common name (cname), X500Principal identification, UUID, Mac address, hardware ID, or any other String-representable data necessary for identifying this license.<br />
<span class="bold">issuer</span> - This String can hold the issuing organization's name, common name (cname), X500Principal identification, UUID, or any other String-representable data necessary for identifying this license.<br />
<span class="bold">subject</span> - This String can hold the product name, ID, code or any other String-representable data necessary for identifying this license.<br />
<span class="bold">issueDate</span> - This field holds the date the license is issued/created (in Java Unix Epoch format&sup1;).<br />
<span class="bold">goodAfterDate</span> - This field holds the date the license becomes active, after which it is valid for use (in Java Unix Epoch format&sup1;). It may or may not correspond to the issue date. If the license is perpetual, it simply need not be set.<br />
<span class="bold">goodBeforeDate</span> - This field holds the date the license expires, after which it is vo longer valid for use (in Java Unix Epoch format&sup1;). If the license is perpetual, it simply need not be set.<br />
<span class="bold">numberOfLicenses</span> - This field holds the maximum users, seats, machines, etc. allowed access to the license, if that's something your product needs. If not, simply don't set it.<br />
<span class="bold">features</span> - This is a set of License.Feature objects (see API documentation) containing feature names and expiration dates (in Java Unix Epoch format&sup1;), if your product is such that you have different features that can be licensed or unlicensed. Expiration dates are optional; if a feature never expires or expires with the License, the expiration date can be omitted. If you want to provide an existing customer with a free-trial of a new feature, for example, this per-feature expiration date empowers that.<br />
<br />
<h3>How are licenses kept secure?</h3>
Enormous attention has been paid to keeping the License Manager secure and difficult, if not impossible, to tamper with. Even closed-source security code is open to vulnerability; Open Source security code must be more stringent and more carefully reviewed, since even malicious users have access to the source code. Thankfully, the nature of Open Source development means that the community will let you know quickly if a flaw is found in security-related code.<br />
<br />
The following features/steps help keep the License Manager secure (and, in some cases, fast):<br />
<ol>
	<li>Licenses are serialized in Java binary serialization form, which is more difficult to read plainly and tamper with than plain-text transmission.</li>
	<li>Licenses are then signed with the privake key of the issuer, which prevents tampering with the license without detection. Keeping the private key protected and a secret is the responsibility of the issuer.</li>
	<li>Next, the serialized and signed licenses are encrypted to prevent any confidential information they contain from falling into the wrong hands. Since the password implementation is up to the issuer, two issuers using License Manager can't necessarily decrypt each others' issued licenses, and it's even possible to have two different holders' licenses be encrypted with different passwords.</li>
	<li>The license is delivered by whatever means you see fit, as it is transmittable in either binary or ASCII format. This delivery mechanism can be as vulnerable or secure as your needs demand.</li>
	<li>The license is decrypted by the client application using the provided password, then deserialized and verified against the signature using the issuer's public key. If the license has been tampered with, it will be detected here.</li>
	<li>The license is cached in-memory to improve performance and prevent repetitive decryption and signature verification. This cache time is controllable by the issuer.</li>
	<li>The license object's <span class="bold">features</span> field is an "immutable set" collecton, meaning that any attempt to change the contents of the features, or their expiration dates, will be detected and result in errors.</li>
	<li>A proprietary Java Security Manager (<a href="http://docs.oracle.com/javase/tutorial/essential/environment/security.html" target="_blank">read about this</a>) built into the License Manager starts itself on application startup. No configuration or policy files are necessary to enable this security manager; it just works. This security manager prevents reflection attacks on any net.nicholaswilliams.java.licensing classes. It will yield to existing security managers that are equally or more strict, to prevent conflicts. If for any reason License Manager cannot find or install a security manager capable of protecting its classes from reflection attacks, it will fail to start and issue an error indicating the problem. It will not verify any licenses without an installed security manager.</li>
	<li>License Manager makes no assumptions about how you want your license <span class="bold">content</span> validated. You can choose not to validate license content or, if you want, you can implement a validation interface to check as few or many pieces of license content as you want. So, you can validate with as little as just checking the expiration date, or as much as checking the product key, Mac address, product ID, number of seats, and etc.</li>
</ol>
Of course, as with any application shipped in bytecode format, there are still vulnerabilities. We <span class="bold italic">strongly</span> recommend that you use bytecode obfuscation on your compiled classes to help further prevent compromising license security.<br />
<br />
<span class="small">&sup1; Java Unix Epoch format is the number of milliseconds since the Unix Epoch (midnight on January 1, 1970 UTC). The current time is retrieved from <a href="http://docs.oracle.com/javase/6/docs/api/java/lang/System.html#currentTimeMillis()" target="_blank" class="small">System.currentTimeMillis()</a>, and the time of any date X is retrieved from <a href="http://docs.oracle.com/javase/6/docs/api/java/util/Calendar.html#getTimeInMillis()" target="_blank" class="small">Calendar.getTimeInMillis()</a> for any <a href="http://docs.oracle.com/javase/6/docs/api/java/util/Calendar.html" target="_blank" class="small">Calendar</a> of date X.</span>
<?php

require 'footer.php';

?>
