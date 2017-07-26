<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contribute | YANG Catalog</title>
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

		<div class="hero-wrapper"><h1 class="page-title">Contribute to YANG Catalog</h1></div>
	</div><!-- .hero -->




	<div class="content-wrapper clear">

		<div id="primary" class="content-area" style="width: 100%; margin-left: 10px; margin-right: 10px;">
			<main id="main" class="site-main" role="main">

        <div class="entry-title">Table of Contents</div>
          <p>What are you trying to do?</p>
            <ul style="list-style-type:circle">
              <li><a href="#model_creator">I am a vendor, and I want to provide my module metadata.</a></li>
              <li><a href="#vendor">I am a vendor, and I want to provide my implementation metadata.</a></li>
              <li><a href="#model_creator">I am a Standards Development Organization, and I want to provide my module metadata.</a></li>
							<li><a href="#hack">Hack YANG Catalog</a></li>
            </ul>
          </li>
        <hr/>

<article id="post-3" class="post-3 page type-page status-publish has-post-thumbnail hentry">
  <a name="model_creator"></a>
  <div class="entry-title">Model Creator? Add Model Metadata</div>
  <div class="entry-content">
    <p>If you are a Standard Development Organization (SDO), an open source project, or an organization (e.g., a vendor that creates proprietary models),
      and you want to add your models and related metadata to the Catalog, do the following:</p>

    <ol>
      <li>Check your modules into <a href="https://github.com">GitHub</a>.  Ideally submit your modules directly to the <a href="https://github.com/YangModels/yang">
          https://github.com/YangModels/yang</a> repository via a pull request.  Alternatively, you can use any public repository, and then also add a git sub-module to the
           <a href="https://github.com/YangModels/yang">
          https://github.com/YangModels/yang</a> repository via a pull request.</li>
      <li><a href="https://yangcatalog.org/create.php">Request</a> a new YANG Catalog API
        account if you do not have one already.</li>
      <li>Once the account is requested, wait until confirmation before proceeding.</li>
      <li>Use an HTTP PUT request to <a href="https://yangcatalog.org:8443/modules">https://yangcatalog.org:8443/modules</a>
        with a JSON payload modeled after the <a href="https://raw.githubusercontent.com/xorrkaz/netmod-yang-catalog/master/module-metadata.yang">
          model-metadata.yang</a> model (current revision: <b>2017-07-15</b>).  Note, his module requires the
          <a href="https://raw.githubusercontent.com/xorrkaz/netmod-yang-catalog/master/yang-catalog.yang">yang-catalog</a> module.
          This model looks like the following:<br/>
<pre>
  module: module-metadata
      +--rw modules
         +--rw module* [name revision]
            +--rw generated-from?                   enumeration
            +--rw maturity-level?                   enumeration
            +--rw document-name?                    string
            +--rw author-email?                     yc:email-address
            +--rw reference?                        inet:uri
            +--rw name                              yang:yang-identifier
            +--rw revision                          union
            +--rw organization                      string
            +--rw source-file
            |  +--rw owner         string
            |  +--rw repository    string
            |  +--rw path          path
            |  +--rw branch?       string
            +--rw organization-specific-metadata
               +--rw ietf
                  +--rw ietf-wg?   string
</pre>
         For example:<br/>
<pre>
PUT https://yangcatalog.org:8443/modules
Content-type: application/json

{
      "modules": {
         "module":[
       {
         "module": "example-jukebox",
         "revision": "2014-01-20",
         "organization": "example",
         "maturity-level": "bar",
         "author-email": "foo@bar.com",
         "source-file":{
             "repository": "foo",
             "owner": "bar",
             "path": "standard/ietf/DRAFT/example-jukebox.yang"
         }
       }
     ]
   }
 }
</pre>
           </li>
           <li>Test the result by querying <a href="http://yangcatalog.org:8008/api/operational/catalog?deep">http://yangcatalog.org:8008/api/operational/catalog?deep</a>
             using the credentials <b>oper / oper</b>.</li>
           <li>Contact <a href="mailto:info@yangcatalog.org">info@yangcatalog.org</a> if you run into problems.</li>
         </ol>
         <p>While some metadata can be extracted from models by the API backend (these are called <i>extractable</i> fields),
           metadata such as maturity-level and conformance-type must be provided
           by the model creator (these are the <i>non-extractable</i> fields).  The reason the module-metadata model is broken out from the main yang-catalog
           module is to focus more on the non-extractable fields.  The more metadata from the module-metadata model that can be included the more robust and detailed the
           Catalog will be.</p>
       </div>
     </article>
     <article id="post-3" class="post-3 page type-page status-publish has-post-thumbnail hentry">
       <a name="model_get"></a>
       <div class="entry-title">Modules? Get Implementation Metadata</div>
       <div class="entry-content">
          <p>If you need to look for a specific module from all modules or you are looking for a modules that contain specific metadata, you can
                 use the following steps:</p>
          <ol>
                     <li><a href="https://yangcatalog.org/create.php">Request</a> a new YANG Catalog API
                       account if you do not have one already.</li>
                     <li>Once the account is requested, wait until confirmation before proceeding.</li>
                     <li>Use an HTTP GET request to <a href="https://yangcatalog.org:8443/search/modules/{name},{revision}">
                     https://yangcatalog.org:8443/search/modules/{name},{revision}</a> to receive all the metadata for a specific module
                     </br>
                     Use an HTTP GET request to <a href="https://yangcatalog.org:8443/search/{key}/{value}">
                       https://yangcatalog.org:8443/search/{key}/{value}</a> to receive all the modules that contain a specific metadata.
                       </br>For example: https://yangcatalog.org:8443/search/compilation-status/pass
                       </br>There are just several data that could be received this way. For data that are inside of container we use '$' symbol for
                       seperating container and leaf. Here are the example that can be used:</br>
                       ietf$ietf-wg, maturity-level, document-name, author-email, compilation-status, conformance-type, module-type, organization,
                        yang-version, name, revision.

                     </li>
          </ol>
       </div>
     </article>

     <article id="post-3" class="post-3 page type-page status-publish has-post-thumbnail hentry">
            <a name="model_delete"></a>
            <div class="entry-title">Modules? Delete Implementation Metadata</div>
            <div class="entry-content">
               <p>If you need to delete a specific module from all the modules that you have access to, you can
                      use the following steps:</p>
               <ol>
                          <li><a href="https://yangcatalog.org/create.php">Request</a> a new YANG Catalog API
                            account if you do not have one already.</li>
                          <li>Once the account is requested, wait until confirmation before proceeding.</li>
                          <li>Use an HTTP DELETE request to
                          <a href="https://yangcatalog.org:8443/modules/module/{name},{revision}">
                                                 https://yangcatalog.org:8443/modules/module/{name},{revision}</a>
                          </li>
               </ol>
            </div>
          </article>

     <article id="post-4" class="post-4 page type-page status-publish has-post-thumbnail hentry">
       <a name="vendor"></a>
       <div class="entry-title">Vendor? Add Implementation Metadata</div>
       <div class="entry-content">
         <p>If you are a vendor that implements YANG models in your product, then you can upload platform metadata
           to the Catalog in order to specify what platforms (and software releases) implement which YANG models.
           This is done using the following steps:</p>

         <ol>
           <li><a href="https://yangcatalog.org/create.php">Request</a> a new YANG Catalog API
             account if you do not have one already.</li>
           <li>Once the account is requested, wait until confirmation before proceeding.</li>
           <li>Use an HTTP PUT request to <a href="https://yangcatalog.org:8443/platforms">https://yangcatalog.org:8443/platforms</a>
             with a JSON payload modeled after the <a href="https://raw.githubusercontent.com/xorrkaz/netmod-yang-catalog/master/platform-implementation-metadata.yang">
               platform-implementation-metadata.yang</a> model (current revision: <b>2017-07-07</b>).  Note, his module requires the
               <a href="https://raw.githubusercontent.com/xorrkaz/netmod-yang-catalog/master/yang-catalog.yang">yang-catalog</a> module.
               This model looks like the following:<br/>
     <pre>
       module: platform-implementation-metadata
           +--rw platforms* [vendor name software-version software-flavor]
              +--rw vendor               string
              +--rw name                 string
              +--rw models*              string
              +--rw software-flavor      string
              +--rw software-version     string
              +--rw os-type?             string
              +--rw capabilities-file
                 +--rw owner?        string
                 +--rw repository?   url
                 +--rw path?         path
     </pre>
              For example:<br/>
     <pre>
     PUT https://yangcatalog.org:8443/platforms
     Content-type: application/json

     {
       "platforms": [
            {
              "vendor": "example",
              "name": "baz",
              "capabilities_file":{
                 "repository": "foo",
                 "owner": "bar",
                 "path": "vendor/example/baz/baz-netconf-capability.xml"
             },
              "models": [
                          "BAZ"
              ],
              "software-flavor": "ALL",
              "software-version": "1.2.3",
              "os-type": "bazOS"
            }
          ]
     }
     </pre>
                </li>
                <li>Test the result by querying <a href="http://yangcatalog.org:8008/api/operational/catalog?deep">http://yangcatalog.org:8008/api/operational/catalog?deep</a>
                  using the credentials <b>oper / oper</b>.</li>
                <li>Contact <a href="mailto:info@yangcatalog.org">info@yangcatalog.org</a> if you run into problems.</li>
              </ol>
            </div>
          </article>

<article id="post-5" class="post-5 page type-page status-publish has-post-thumbnail hentry">
  <a name="hack"></a>
  <div class="entry-title">Hacking Yangcatalog.org</div>
	<div class="entry-content">
    <p>All of the code behind <a href="https://yangcatalog.org">yangcatalog.org</a> is
      Open Source.  However, it is spread out across multiple <a href="https://github.org">
        GitHub</a> repositories.  If you are interested in hacking the code that directly
      drives the YANG Catalog, pick your repository from the list below:</p>
<ul>
<li><a href="https://github.com/xorrkaz/yang-search">YANG Search</a></li>
<li><a href="https://github.com/YangModels/yang/">YANG Models and YANG Catalog API</a>
  <ul style="list-style-type:circle">
    <li>Models in the <tt>vendor</tt> and <tt>standard</tt> directories</li>
    <li>API code in the <tt>tools/api</tt> directory</li>
    <li>Scripts to parse models and populate confd in the <tt>tools/parseAndPopulate</tt> directory</li>
  </ul>
</li>
<li><a href="https://github.com/xorrkaz/netmod-yang-catalog">YANG Catalog and related API models</a></li>
<li><a href="https://github.com/einarnn/ncc">Capabilities and metadata generation scripts</a></li>
<li><a href="https://developer.cisco.com/site/confD/">ConfD (not Open Source)</a></li>
</ul>
<p>In order to contribute back to YANG Catalog, checkout one of the repositories, make your changes, and then create a
  <a href="https://help.github.com/articles/about-pull-requests/">pull request</a> to have your code merged.</p>

<p>To get updates about changes with YANG Catalog, <a href="https://www.marcuscom.com/mailman/listinfo/yangcatalog-announce">subscribe
</a> to <a href="mailto:announce@yangcatalog.org">announce@yangcatalog.org</a>.</p>
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
