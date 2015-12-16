<?php

if(isset($title))
	$title = 'NWTS Java Code - '.$title;
else
	$title = 'NWTS Java Code';

?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
	<meta name="description" content="NWTS Java Code houses a collection of advanced Java libraries making complex and previously-impossible tasks in Java simple. Projects include utilities for security, encryption, licensing, raw socket access and advanced network protocols." />
	<meta name="keywords" content="nwts, java, code, projects, security, encryption, java licensing, java license management, java license manager, license manager, java licenser, java licensor, raw sockets, network, ping, traceroute, icmp, ttl" />
	<meta name="author" content="Nick Williams" />
	<meta name="verify-v1" content="" />
	<meta name="robots" content="index,follow" />
	<link rel="stylesheet" type="text/css" href="//java.nicholaswilliams.net/css/styles.css" />
	<!--[if lt IE 9]>
	<script type="text/javascript" src="//java.nicholaswilliams.net/js/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="//java.nicholaswilliams.net/js/prettify/prettify.js"></script>
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body onload="prettyPrint();">
	<div id="body-div">
		<div id="header-container">
			<div id="page-heading">
				<h1 style="margin-bottom:0px;">NWTS Java Code</h1>
				<span class="subheading">Project site for net.nicholaswilliams.java projects</span>
			</div>
			<div id="donate-button">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin:0px; display:inline;">
					<input type="hidden" name="cmd" value="_s-xclick" />
					<input type="hidden" name="hosted_button_id" value="KLZNPNHGFU9CS" />
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" />
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" />
				</form>
			</div>
			<div id="header-ad">
<?php if(!isset($_SERVER['HTTPS'])) { ?>
				<script type="text/javascript"><!--
				google_ad_client = "ca-pub-7406577826562028";
				/* Header Banner */
				google_ad_slot = "0131223960";
				google_ad_width = 468;
				google_ad_height = 60;
				//-->
				</script>
				<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<?php } ?>
			</div>
		</div>
		<div id="header-bottom">
			<span>Last modified <?php echo date('F j, Y H:i T', filemtime(__DIR__.$_SERVER['SCRIPT_NAME']))."\n"; ?></span>
		</div>
		<div id="middle-container">
			<table id="middle-table" cellpadding="0" cellspacing="0" border="0">
				<tr valign="top">
					<td>
						<div id="sidebar"><?php
							
							if(isset($PROJECT_NAME) && isset($PROJECT_LINKS) && is_array($PROJECT_LINKS) && count($PROJECT_LINKS) > 0)
							{
								echo "\n";
								echo "\t\t\t\t\t\t\t".'<span class="section">'.$PROJECT_NAME.'</span>'."\n";
								echo "\t\t\t\t\t\t\t".'<hr />'."\n";
								
								foreach($PROJECT_LINKS as $link => $label)
								{
									echo "\t\t\t\t\t\t\t".'<a href="https://java.nicholaswilliams.net'.$link.'">'.$label.'</a><br />'."\n";
								}
							}
							
							echo "\n";
							
							?>
							<span class="section">General Information</span>
							<hr />
							<a href="https://java.nicholaswilliams.net">Home</a><br />
							<a href="https://java.nicholaswilliams.net/news">News</a><br />
							<a href="https://java.nicholaswilliams.net/license">Licenses</a><br />
							<a href="https://java.nicholaswilliams.net/forums" target="NWTSJTForums">Forums</a><br />
							<a href="https://github.com/oddsource/" target="GitHub">Issue Tracker</a><br />
							<a href="https://build.java.nicholaswilliams.net" target="NWTSJTTeamCity">Continuous Integration</a><br />
							<a href="http://www.opensource.org" target="_blank">Open Source Initiative</a><br />
							
							<span class="section">Projects</span>
							<hr />
							<a href="https://java.nicholaswilliams.net/projects">Summary</a><br />
							<a href="https://java.nicholaswilliams.net/ValidationConstraints">Bean Validation Constraints</a><br />
							<a href="https://java.nicholaswilliams.net/JpaConverters">JPA 2.1 Converters</a><br />
							<a href="https://java.nicholaswilliams.net/JpaSearchFullText">JPA Full-Text Search</a><br />
							<a href="https://java.nicholaswilliams.net/LicenseManager">License Manager</a><br />
							<a href="https://java.nicholaswilliams.net/RawSockets">Raw Sockets</a><br />
							<a href="https://java.nicholaswilliams.net/TeamCityPlugins">TeamCity Plugins</a><br />
			
							<span class="section">Source Repositories</span>
							<hr />
							<a href="https://github.com/oddsource/" target="GitHub">GitHub</a><br />
							<a href="https://java.nicholaswilliams.net/source">Information</a><br />
							
							<span class="section">Technologies</span>
							<hr />
							<div id="sidebar-tech">
								<a href="http://maven.apache.org" class="image" target="_blank"><img alt="Built by Apache Maven" border="0" src="//java.nicholaswilliams.net/images/maven-logo.png" title="Built by Apache Maven" /></a><br />
								<a href="http://ant.apache.org" class="image" target="_blank"><img alt="Built by Apache Ant" border="0" src="//java.nicholaswilliams.net/images/ant-logo.png" title="Built by Apache Ant" /></a><br />
							</div>
							
							<hr />
							<div id="sidebar-ad">
								<div class="fb-like" data-href="https://java.nicholaswilliams.net<?php echo $_SERVER['REQUEST_URI']; ?>" data-width="120" layout="button_count" data-action="recommend" data-show-faces="false" data-send="false"></div>
								<div><a href="https://twitter.com/share" class="twitter-share-button" data-url="https://java.nicholaswilliams.net<?php echo $_SERVER['REQUEST_URI']; ?>" data-size="large" data-dnt="true">Tweet</a></div>
<?php if(!isset($_SERVER['HTTPS'])) { ?>
								<script type="text/javascript"><!--
								google_ad_client = "ca-pub-7406577826562028";
								/* Sidebar Tower */
								google_ad_slot = "2845534771";
								google_ad_width = 120;
								google_ad_height = 240;
								//-->
								</script>
								<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
<?php } ?>
							</div>
						</div>
					</td>
					<td width="100%">
						<div id="main-container">
<?php

?>
