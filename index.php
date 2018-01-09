<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>YANG Catalog</title>
	<script defer="defer" src="js/beacon.js"></script>
	<script type="text/javascript">
		/* <![CDATA[ */
		function addLoadEvent(func) {
			var oldonload = window.onload;
			if (typeof window.onload != 'function') {
				window.onload = func;
			} else {
				window.onload = function() {
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
	<link rel="stylesheet" id="all-css-6-1" href="css/a_002.css" type="text/css" media="all">
	<link rel="stylesheet" id="print-css-7-1" href="css/global-print.css" type="text/css" media="print">
	<link rel="stylesheet" id="all-css-8-1" href="css/a.css" type="text/css" media="all">
	<script type="text/javascript" src="js/a_002.js"></script>
	<meta name="theme-color" content="#ffffff">
	<meta name="application-name" content="YANG Catalog">
	<meta name="msapplication-window" content="width=device-width;height=device-height">
	<meta name="description" content="This is the home page's excerpt">
	<style type="text/css" id="syntaxhighlighteranchor"></style>
	<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" id="gravatar-card-css" href="css/hovercard.css">
	<link rel="stylesheet" type="text/css" id="gravatar-card-services-css" href="css/services.css">
</head>

<body class="home page-template page-template-page-templates page-template-front-page page-template-page-templatesfront-page-php page page-id-2 mp6 customizer-styles-applied has-header-search navigation-default no-sidebar-full has-site-logo highlander-enabled highlander-light small-screen medium-screen large-screen">
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

		<header id="masthead" class="site-header" role="banner">
			<a href="https://yangcatalog.org/" class="header-image" rel="home">
			<img src="img/blur.jpg" alt="" scale="0" width="1230" height="100">
		</a>
			<!-- .header-image -->


			<div class="header-wrapper clear">
				<div class="site-branding" style="max-width: 904px;">
					<a href="https://yangcatalog.org" class="site-logo-link" rel="home"><img src="img/all-yang-modules1.jpg" class="site-logo attachment-edin-logo" alt="" data-size="edin-logo" width="219" height="192"></a>
					<p class="site-title"><a href="https://yangcatalog.org/" rel="home">YANG Catalog</a></p>
				</div>
				<!-- .site-branding -->
			</div>
			<!-- .header-wrapper -->
		</header>
		<!-- #masthead -->

		<div id="content" class="site-content">



			<div class="hero without-featured-image">

				<article id="post-2" class="post-2 page type-page status-publish hentry">
					<div class="entry-content">
						<p class="lead">A YANG model catalog and registry that allows users to find models relevant to their use cases from the large and growing number of YANG modules being published.</p>
						<p>This server is running:</p>
						<ul>
							<li>A NETCONF and REST (not RESTCONF-compliant yet) server loaded with the YANG module from <a href="https://tools.ietf.org/html/draft-clacla-netmod-model-catalog">draft-clacla-netmod-model-catalog</a>. It currently only allows public read access to
								the content. Feel free to reach out through the github forum if you are interested in write access. The username is <code>oper</code> and the password is <code>oper</code>.</li>
							<li>A <a href="http://www.yangvalidator.org/">YANG Validator</a>, a web frontend that allows for validation of YANG modules and IETF drafts.</li>
							<li>A <a href="https://www.yangcatalog.org/yang-search">YANG Search</a>, a web frontend that allows for searches over the content of the module catalog.</li>
							<li>A <a href="https://www.yangcatalog.org/yang-search/impact_analysis.php">YANG impact analysis</a> tool.</li>
							<li>View a module's <a href="https://www.yangcatalog.org/yang-search/module_details.php">metadata details</a>.</li>
							<!--<li>A <a href="http://yangcatalog.org:8088/">YANG Explorer</a> that includes a YANG browser and RPC-builder application to experiment with YANG modules</li>-->
							<li>An interactive <a href="https://yangcatalog.org/yangsuite">YANG exploration</a> tool that includes a YANG browser, RPC builder, and a script generator to experiment with YANG modules (login as yangcat / yangcatalog123)</li>
							<li>A <a href="https://yangcatalog.org/yangre">YANG Regex Validator</a>, a YANG regular expression validator to experiment with W3C YANG "pattern" statements</li>
						</ul>
						<h2>APIs</h2>
						<p>For access to the REST interface using curl, try the following to receive the content of the organizations subtree from the
							<a href="https://raw.githubusercontent.com/xorrkaz/netmod-yang-catalog/master/yang-catalog.yang">yang-catalog.yang</a> module. Note, the currently supported revision yang-catalog.yang is <b>2017-09-26</b>:</p>
						<pre>$ curl https://yangcatalog.org/api/search/catalog</pre>
						<p>This will return JSON-formatted data.  <b>NOTE:</b> the catalog is quite large and growing all the time.  Returning the whole Catalog will
							pulling down quite a bit of data.  Alternaitvely, you can use the following to pull the module metadata:</p>
						<pre>$ curl https://yangcatalog.org/api/search/modules</pre>
						<p>And use the following to get vendor implementation metadata:</p>
						<pre>$ curl https://yangcatalog.org/api/search/vendors</pre>
						<p>These API endpoints may still produce large result sets.  To get more granular results, use the module or keyword <a href="/contribute.php#model_get">
							search interface</a>.</p>
					</div>
					<!-- .entry-content -->
				</article>
				<!-- #post-## -->

			</div>
			<!-- .hero -->





			<div id="quaternary" class="featured-page-area">
				<div class="featured-page-wrapper clear">

					<div class="featured-page">




						<article id="post-3" class="post-3 page type-page status-publish has-post-thumbnail hentry">

							<a class="post-thumbnail" href="/about.php">
		<img src="img/grid1.jpg" class="attachment-edin-thumbnail-landscape size-edin-thumbnail-landscape wp-post-image" alt="" width="330" height="240">	</a>


							<header class="entry-header">
								<h1 class="entry-title"><a href="/about.php" rel="bookmark">About</a></h1></header>
							<div class="entry-summary">
								<p>From a high level point of this YANG catalog goal is become a reference for all YANG modules available in the industry, for both YANG developers (to search on what exists already) and for operators (to discover the more mature YANG models to automate
									services). This YANG catalog should not only contain pointers to the…</p>
								<p><a class="more-link" href="/about.php" rel="bookmark">
			Read more <span class="screen-reader-text">About</span>		</a></p>
							</div>
							<!-- .entry-summary -->

						</article>
						<!-- #post-## -->
					</div>
					<!-- .featured-page -->
					<div class="featured-page">
						<article id="post-6" class="post-6 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">

							<a class="post-thumbnail" href="/blog.php">
		<img width="330" height="240" src="img/yang-explorer.jpg" class="attachment-edin-thumbnail-landscape size-edin-thumbnail-landscape wp-post-image" alt="" sizes="(max-width: 330px) 100vw, 330px" data-attachment-id="45" />	</a>


							<header class="entry-header">
								<h1 class="entry-title"><a href="/blog.php" rel="bookmark">YANG Catalog Latest Development (IETF 98 and 99&nbsp;Hackathon)</a></h1></header>
							<div class="entry-summary">
								<p>The IETF 99 is now over. This was a successful IETF meeting in multiple ways, one of which is the IETF hackathon, two days of hacking on Saturday/Sunday....</p>
								<p><a class="more-link" href="/blog.php" rel="bookmark">
			Read more <span class="screen-reader-text">YANG Catalog Latest Development (IETF 98&nbsp;Hackathon)</span>		</a></p>
							</div>
							<!-- .entry-summary -->

						</article>
						<!-- #post-## -->

					</div>
					<!-- .featured-page -->

					<div class="featured-page">




						<article id="post-7" class="post-7 page type-page status-publish has-post-thumbnail hentry">

							<a class="post-thumbnail" href="/contribute.php">
	<img src="img/github.png" class="attachment-edin-thumbnail-landscape size-edin-thumbnail-landscape wp-post-image" alt="" width="330" height="240">	</a>


							<header class="entry-header">
								<h1 class="entry-title"><a href="/contribute.php" rel="bookmark">Contribute</a></h1></header>
							<div class="entry-summary">
								<p>Here you can find instructions on getting yangcatalog.org code as well as contributing module and implementation metadata to the Catalog.</p>
								<p><a class="more-link" href="/contribute.php" rel="bookmark">
		Read more <span class="screen-reader-text">Contributing to the YANG Catalog</span>		</a></p>
							</div>
							<!-- .entry-summary -->

						</article>
						<!-- #post-## -->
					</div>
					<!-- .featured-page -->


				</div>
				<!-- .featured-page-wrapper -->
			</div>
			<!-- #quaternary -->

		</div>
		<!-- #content -->


		<?php include_once "inc.footer.php"?>


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-wrapper clear">
				<div class="site-info">

				</div>
				<!-- .site-info -->
			</div>
			<!-- .footer-wrapper -->
		</footer>
		<!-- #colophon -->
	</div>
	<!-- #page -->

</body>

</html>
