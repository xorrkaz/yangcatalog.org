<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About | YANG Catalog</title>
	<script defer="defer" src="About%20%7C%20YANG%20Catalog_files/beacon.js"></script><script type="text/javascript">
		/* <![CDATA[ */
		function addLoadEvent(func) {
			var oldonload = window.onload;
			if (typeof window.onload != 'function') {
				window.onload = func;
			} else {
				window.onload = function () {
					oldonload();
					func();
				}
			}
		}
		/* ]]> */
	</script>
<link rel="stylesheet" id="all-css-0-1" href="css/a_003.css" type="text/css" media="all">
<link rel="stylesheet" id="edin-pt-sans-css" href="css/css_002.css" type="text/css" media="all">
<link rel="stylesheet" id="edin-pt-serif-css" href="css/css.css" type="text/css" media="all">
<link rel="stylesheet" id="edin-pt-mono-css" href="css/css_003.css" type="text/css" media="all">
<link rel="stylesheet" id="all-css-6-1" href="css/a.css" type="text/css" media="all">
<style id="edin-style-inline-css" type="text/css">
.hero.with-featured-image { background-image: url(https://yangcatalog.org/img/grid1.jpg?w=1230&#038;h=820&#038;crop=1); }
</style>
<link rel="stylesheet" id="print-css-7-1" href="css/global-print.css" type="text/css" media="print">
<link rel="stylesheet" id="all-css-8-1" href="css/a_002.css" type="text/css" media="all">
<meta name="theme-color" content="#ffffff">
<meta name="application-name" content="YANG Catalog"><meta name="msapplication-window" content="width=device-width;height=device-height"><meta name="title" content="About | YANG Catalog">
<meta name="description" content="From a high level point of this YANG catalog goal is become a reference for all YANG modules available in the industry, for both YANG developers (to search on what exists already) and for operators (to discover the more mature YANG models to automate services). This YANG catalog should not only contain pointers to the…">
<style type="text/css" id="syntaxhighlighteranchor"></style>
<style type="text/css"></style><link rel="stylesheet" type="text/css" id="gravatar-card-css" href="css/hovercard.css"><link rel="stylesheet" type="text/css" id="gravatar-card-services-css" href="css/services.css"></head>

<body class="page-template-default page page-id-3 mp6 customizer-styles-applied has-header-search navigation-default sidebar-right has-site-logo highlander-enabled highlander-light small-screen medium-screen large-screen">
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<header id="masthead" class="site-header" role="banner">
				<a href="https://yangcatalog.org/" class="header-image" rel="home">
			<img src="img/blur.jpg" alt="" scale="0" width="1230" height="100">
		</a><!-- .header-image -->
		
		<div class="header-wrapper clear">
			<div class="site-branding" style="max-width: 904px;">
				<a href="https://yangcatalog.org/" class="site-logo-link" rel="home"><img src="img/all-yang-modules1.jpg" class="site-logo attachment-edin-logo" alt="" data-size="edin-logo" width="219" height="192"></a>						<p class="site-title"><a href="https://yangcatalog.org/" rel="home">YANG Catalog</a></p>
								</div><!-- .site-branding -->

					</div><!-- .header-wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

	
		
<div class="hero with-featured-image">
	
		<div class="hero-wrapper"><h1 class="page-title">About</h1></div>
	</div><!-- .hero -->


	
	
	<div class="content-wrapper clear">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				
					
<article id="post-3" class="post-3 page type-page status-publish has-post-thumbnail hentry">
	<div class="entry-content">
                <p>YANG, a data modeling language developed by the IETF, enables the reuse of data models across equipment from different vendors and networks managed by different operators, and is widely used by network operators to automate the configuration and control of network elements. YANG Catalog was developed through a collaboration between the IETF and the Broadband Forum, and contains many data models, including from other Standards Development Organizations (SDOs) such as the IEEE, as well as some vendor-specific data models. Interest and participation from other SDOs, equipment vendors, open source projects and network operators is encouraged.</p>
<p>From a high level point of this <a href="https://yangcatalog.org/">YANG catalog</a>
 goal is become a reference for all YANG modules available in the 
industry, for both YANG developers (to search on what exists already) 
and for operators (to discover the more mature YANG models to automate 
services). This YANG catalog should not only contain pointers to the 
YANG modules themselves, but also contains metadata related to those 
YANG modules: What is the module type (service model or not?) What is 
the maturity level? (for the IETF: is this a RFC, a working group 
document or an individual draft?), Is this module implemented? Who is 
the contact? Is there open-source code available? And we expect much 
more in the future. The industry starts to understand that the metadata 
related to those YANG modules become equally important as the YANG 
modules themselves. We based on work on <a href="https://www.ietf.org/archive/id/draft-openconfig-netmod-model-catalog-01.txt">openconfig catalog, </a>as a starting point but we realized that we have slightly different goals.</p>
<p>The YANG catalog added value, compared to a normal github repository resides in the toolchain and the additional metadata:</p>
<ul>
<li>the ability to validate YANG modules (including IETF drafts) with multiple validators.</li>
<li>the related metadata regarding implementation</li>
<li>the ability to visualize the dependencies between YANG modules, including the bottleneck in case of standardization</li>
<li>the search capabilities on any YANG type and metadata, avoiding this
 way module or module part redefinitions, which are costly to integrate.</li>
<li>the REST APIs to query and post any content</li>
<li>the demonstration of connection to data model-driven management with opensource tools:<br>
YANG explorer (a GUI-based tool to explore modules, generate some code, and connect the devices)<br>
YANG Development Kit (a more advanced tool for code generation)</li>
</ul>
<p>Using this one-stop set of tools, the typical flow for a YANG module 
designer is to validate the YANG module and to populate the YANG catalog
 (via an IETF drafts, via github, or directly via the YANG catalog).</p>
<p>You can contact us at info@yangcatalog.org.</p>
<p>&nbsp;</p>
<p><img data-attachment-id="34" src="img/yang-module-designer.jpg" alt="YANG-module-designer" sizes="(max-width: 648px) 100vw, 648px"></p>
<p>And the typical flow for a YANG module user is to search for an 
existing YANG module, to look up the metadata (such as maturity level, 
implementation, etc.), and to look up the import and include 
dependencies if any. Once the YANG module of choice is found, the YANG 
module user would browse the YANG module content, then load the YANG 
module in the YANG explorer and test it by connecting to a NETCONF or 
RESTCONF server, and finally generate python scripts to start the 
automation.</p>
<p><img data-attachment-id="33" src="img/yang-module-user.jpg" alt="YANG-module-user" sizes="(max-width: 648px) 100vw, 648px"></p>
<p>&nbsp;</p>
<p>Screenshots and Examples:</p>
<a name="yang-validator"></a>
<p><img data-attachment-id="56" src="img/yang-validor.jpg" alt="YANG-validor" sizes="(max-width: 648px) 100vw, 648px"></p>
<a name="yangdbsearch"></a>
<p><img data-attachment-id="57" src="img/yangdbsearch.jpg" alt="YANGDBsearch" sizes="(max-width: 648px) 100vw, 648px"></p>
<a name="yang-db-search-result"></a>
<p><img data-attachment-id="58" src="img/yangdbsearchresult.jpg" alt="YANGDBsearchresult" sizes="(max-width: 648px) 100vw, 648px"></p>
<a name="yang-db-search"></a>
<p><img data-attachment-id="54" src="img/yang-db-search.jpg" alt="YANG-DB-search" sizes="(max-width: 648px) 100vw, 648px"></p>
<a name="yang-dependency-bbf"></a>
<p><a href="img/yang-dependency-bbf.jpg" title="BBF Yang Dependency Graph"><img data-attachment-id="53" src="img/yang-dependency-bbf.jpg" alt="YANG-dependency-BBF" sizes="(max-width: 648px) 100vw, 648px"></a></p>
<a name="yangexplorer"></a>
<p><img data-attachment-id="59" src="img/yangexplorer.png" alt="YangExplorer" sizes="(max-width: 648px) 100vw, 648px"></p>
<a name="yang-explorer"></a>
<p><img data-attachment-id="45" src="img/yang-explorer.jpg" alt="YANG-Explorer" sizes="(max-width: 648px) 100vw, 648px"></p>
	</div><!-- .entry-content -->

	</article><!-- #post-## -->

					
				
			</main><!-- #main -->
		</div><!-- #primary -->
	
</div><!-- .content-wrapper -->

	</div><!-- #content -->

<?php include_once "inc.footer.php"?>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-wrapper clear">
			<div class="site-info">
				
							</div><!-- .site-info -->
					</div><!-- .footer-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

</body></html>
