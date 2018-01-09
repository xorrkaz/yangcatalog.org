<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contribute | YANG Catalog</title>
  <script defer="defer" src="About%20%7C%20YANG%20Catalog_files/beacon.js"></script>
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
  <link rel="stylesheet" id="all-css-6-1" href="css/a.css" type="text/css" media="all">
  <style id="edin-style-inline-css" type="text/css">
    .hero.with-featured-image {
      background-image: url(https://yangcatalog.org/img/grid1.jpg?w=1230&#038;h=820&#038;crop=1);
    }
  </style>
  <link rel="stylesheet" id="print-css-7-1" href="css/global-print.css" type="text/css" media="print">
  <link rel="stylesheet" id="all-css-8-1" href="css/a_002.css" type="text/css" media="all">
  <meta name="theme-color" content="#ffffff">
  <meta name="application-name" content="YANG Catalog">
  <meta name="msapplication-window" content="width=device-width;height=device-height">
  <meta name="title" content="About | YANG Catalog">
  <meta name="description" content="From a high level point of this YANG catalog goal is become a reference for all YANG modules available in the industry, for both YANG developers (to search on what exists already) and for operators (to discover the more mature YANG models to automate services). This YANG catalog should not only contain pointers to the…">
  <style type="text/css" id="syntaxhighlighteranchor"></style>
  <style type="text/css"></style>
  <link rel="stylesheet" type="text/css" id="gravatar-card-css" href="css/hovercard.css">
  <link rel="stylesheet" type="text/css" id="gravatar-card-services-css" href="css/services.css">
</head>

<body class="page-template-default page page-id-3 mp6 customizer-styles-applied has-header-search navigation-default sidebar-right has-site-logo highlander-enabled highlander-light small-screen medium-screen large-screen">
  <div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    <header id="masthead" class="site-header" role="banner">
      <a href="https://yangcatalog.org/" class="header-image" rel="home">
                        <img src="img/blur.jpg" alt="" scale="0" width="1230" height="100">
                </a>
      <!-- .header-image -->

      <div class="header-wrapper clear">
        <div class="site-branding" style="max-width: 904px;">
          <a href="https://yangcatalog.org/" class="site-logo-link" rel="home"><img src="img/all-yang-modules1.jpg" class="site-logo attachment-edin-logo" alt="" data-size="edin-logo" width="219" height="192"></a>
          <p class="site-title"><a href="https://yangcatalog.org/" rel="home">YANG Catalog</a></p>
        </div>
        <!-- .site-branding -->

      </div>
      <!-- .header-wrapper -->
    </header>
    <!-- #masthead -->

    <div id="content" class="site-content">



      <div class="hero with-featured-image">

        <div class="hero-wrapper">
          <h1 class="page-title">Contribute to YANG Catalog</h1></div>
      </div>
      <!-- .hero -->




      <div class="content-wrapper clear">

        <div id="primary" class="content-area" style="width: 100%; margin-left: 10px; margin-right: 10px;">
          <main id="main" class="site-main" role="main">

            <div class="entry-title">Table of Contents</div>
            <p>What are you trying to do?</p>
            <ul style="list-style-type:circle">
              <li><a href="#model_creator">I am a vendor or Standars Development Organization, and I want to provide my module metadata.</a></li>
              <li><a href="#vendor">I am a vendor, and I want to provide my implementation metadata.</a></li>
              <li><a href="#model_get">I want to search for module metadata.</a></li>
              <li><a href="#model_delete">I am a vendor or Standards Development Organization, and I want to delete my module metadata.</a></li>
              <li><a href="#hack">Hack YANG Catalog.</a></li>
            </ul>
            <hr/>

            <article id="post-3" class="post-3 page type-page status-publish has-post-thumbnail hentry">
              <a name="model_creator"></a>
              <div class="entry-title">Add Model Metadata</div>
              <div class="entry-content">
                <p>If you are a Standard Development Organization (SDO), an open source project, or an organization such as a vendor that creates proprietary models,
                   and you want to add your models' metadata to the Catalog, do the following.  <b>NOTE:</b> the Catalog is not a clearing house for model
                 downloads.  While it provides metadata about models, it only provides links to external sites from which the models themselves can be download.</p>

                <ol>
                  <li>Check your modules into <a href="https://github.com">GitHub</a>. Ideally submit your modules directly to the <a href="https://github.com/YangModels/yang">
          https://github.com/YangModels/yang</a> repository via a <a href="https://help.github.com/articles/about-pull-requests/">pull request</a>. Alternatively, you can use any public repository, and then also add a git sub-module to the
                    <a href="https://github.com/YangModels/yang">
          https://github.com/YangModels/yang</a> repository via a <a href="https://help.github.com/articles/about-pull-requests/">pull request</a>.</li>
                  <li><a href="https://yangcatalog.org/create.php">Request</a> a new YANG Catalog API account if you do not have one already.</li>
                  <li>Once the account is requested, wait until confirmation before proceeding.</li>
                  <li>Use an HTTP PUT request to <a href="https://yangcatalog.org/api/modules">https://yangcatalog.org/api/modules</a> with a JSON payload modeled after the <a href="https://raw.githubusercontent.com/xorrkaz/netmod-yang-catalog/master/module-metadata.yang">
          model-metadata.yang</a> model (current revision: <b>2017-07-27</b>). Note, this module requires the
                    <a href="https://raw.githubusercontent.com/xorrkaz/netmod-yang-catalog/master/yang-catalog.yang">yang-catalog</a> module. The module-metadata.yang has the following tree structure:<br/>
                    <pre>
module: module-metadata
    +--rw modules
       +--rw module* [name revision organization]
          +--rw name                     yang:yang-identifier
          +--rw revision                 union
          +--rw generated-from?          enumeration
          +--rw maturity-level?          enumeration
          +--rw document-name?           string
          +--rw author-email?            yc:email-address
          +--rw reference?               inet:uri
          +--rw module-classification    enumeration
          +--rw organization             string
          +--rw ietf
          |  +--rw ietf-wg?   string
          +--rw source-file
             +--rw owner         string
             +--rw repository    string
             +--rw path          path
             +--rw branch?       string
</pre> For example:<br/>
                    <pre>
PUT https://yangcatalog.org/api/modules
Content-type: application/json

  {
      "modules": {
         "module": [
         {
           "name": "example-jukebox",
           "revision": "2014-01-20",
           "organization": "example",
           "maturity-level": "ratified",
           "author-email": "foo@bar.com",
           "module-classification": "network-element",
           "source-file": {
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
                  <li>After submitting the request, if you are authorized, you will receive a job ID in the JSON-formatted reply. For example:<br/>
                    <pre>
  {
    "info": "Verification successful",
    "job-id": "88bd8c4c-8809-4de8-85c8-39d522d4bcdf"
  }
</pre>
                    <li>Perform an HTTP GET request to <b>https://yangcatalog.org/api/job/{job_id}</b> to get the status of the job. The job result will remain "In progress" until the job completes. When the job has completed you will receive either a "Finished"
                      (on success) or "Failed" (on failure) result. Reason will remain null if the result is other then "Failed, otherwise it will give a information on why it failed. For example, after obtaining the job ID above, perform an HTTP GET to https://yangcatalog.org/api/job/88bd8c4c-8809-4de8-85c8-39d522d4bcdf to get the current status:<br/>
                      <pre>
  {
    "info": {
      "job-id": "88bd8c4c-8809-4de8-85c8-39d522d4bcdf",
      "reason": null,
      "result": "In progress"
    }
  }
</pre>
                      <li>Once the job has completed successfully, test the result by querying the <a href="#model_get">search API</a>.</li>
                      <li>Contact <a href="mailto:info@yangcatalog.org">info@yangcatalog.org</a> if you run into problems.</li>
                </ol>
                <p>While some metadata can be extracted from models by the API backend (these are called <i>extractable</i> fields), metadata such as "maturity-level" and "conformance-type" must be provided by the model creator (these are the <i>non-extractable</i> fields). The reason the module-metadata model is broken out from the main yang-catalog module is to focus more on the non-extractable fields. The more metadata from the module-metadata model that can be included the more robust and detailed
                  the Catalog will be.</p>
              </div>
            </article>

            <article id="post-4" class="post-4 page type-page status-publish has-post-thumbnail hentry">
              <a name="vendor"></a>
              <div class="entry-title">Add Implementation Metadata</div>
              <div class="entry-content">
                <p>If you are a vendor that implements YANG models in your product, then you can upload platform metadata to the Catalog in order to specify what platforms (and software releases) implement which YANG models. This is done using the following
                  steps:
                </p>

                <ol>
                  <li><a href="https://yangcatalog.org/create.php">Request</a> a new YANG Catalog API account if you do not have one already.</li>
                  <li>Once the account is requested, wait until confirmation before proceeding.</li>
                  <li>Use an HTTP PUT request to <a href="https://yangcatalog.org/api/platforms">https://yangcatalog.org/api/platforms</a> with a JSON payload modeled after the <a href="https://raw.githubusercontent.com/xorrkaz/netmod-yang-catalog/master/platform-implementation-metadata.yang">
               platform-implementation-metadata.yang</a> model (current revision: <b>2017-09-27</b>). Note, his module requires the
                    <a href="https://raw.githubusercontent.com/xorrkaz/netmod-yang-catalog/master/yang-catalog.yang">yang-catalog</a> module. The platform-implementation-metadata module has the following tree structure:<br/>
                    <pre>
 module: platform-implementation-metadata
     +--rw platforms
        +--rw platform* [vendor name software-version software-flavor]
           +--rw vendor                  string
           +--rw name                    string
           +--rw netconf-capabilities*   string
           +--rw product-ids*            string
           +--rw software-version        string
           +--rw software-flavor         string
           +--rw os-version?             string
           +--rw feature-set?            string
           +--rw os-type?                string
           +--rw module-list-file
              +--rw type?         enumeration
              +--rw owner         string
              +--rw repository    string
              +--rw path          yc:path
              +--rw branch?       string
     </pre> For example:<br/>
                    <pre>
     PUT https://yangcatalog.org/api/platforms
     Content-type: application/json

     {
       "platforms" {
           "platform": [
               {
                  "vendor": "example",
                  "name": "baz",
                  "module-list-file": {
                     "type": "capabilities",
                     "repository": "foo",
                     "owner": "bar",
                     "path": "vendor/example/baz/baz-netconf-capability.xml"
                  },
                  "platform-ids": [
                     "BAZ4000", "BAZ4100"
                  ],
                  "software-flavor": "ALL",
                  "software-version": "1.2.3",
                  "os-type": "bazOS"
                }
           ]
       }
    }
     </pre>
                  </li>
                  <li>After submitting the request, if you are authorized, you will receive a job ID in the JSON-formatted reply. For example:<br/>
                    <pre>
{
  "info": "Verification successful",
  "job-id": "88bd8c4c-8809-4de8-85c8-39d522d4bcdf"
}
</pre>
                    <li>Perform an HTTP GET request to <b>https://yangcatalog.org/api/job/{job_id}</b> to get the status of the job. The job result will remain "In progress" until the job completes. When the job has completed you will receive either a "Finished"
                      (on success) or "Failed" (on failure) result. For example, after obtaining the job ID above, perform an HTTP GET to https://yangcatalog.org/api/job/88bd8c4c-8809-4de8-85c8-39d522d4bcdf to get the current status:<br/>
                      <pre>
{
  "info": {
    "job-id": "88bd8c4c-8809-4de8-85c8-39d522d4bcdf",
    "reason": null,
    "result": "In progress"
  }
}
</pre>
                      <li>Once the job has completed successfully, test the result by querying the <a href="#model_get">search API</a>.</li>
                      <li>Contact <a href="mailto:info@yangcatalog.org">info@yangcatalog.org</a> if you run into problems.</li>
                </ol>
              </div>
            </article>

            <article id="post-5" class="post-5 page type-page status-publish has-post-thumbnail hentry">
              <a name="model_get"></a>
              <div class="entry-title">Get Module and Implementation Metadata</div>
              <div class="entry-content">
                <p>If you want to search for metadata on a specific module, or you are looking for modules that contain specific metadata, you can do the following:</p>
                <ol>
                  <li>Use an HTTP GET request to
                    <b>https://yangcatalog.org/api/search/modules/{name},{revision},{organization}</b> to receive all the metadata for a specific module and revision.</li>
                  <li>Use an HTTP GET request to
                    <b>https://yangcatalog.org/api/search/{key}/{value}</b> to receive all the modules that contain a specific metadata.
                    <br/>For example, to find all modules with a successful compilation status: <a href="https://yangcatalog.org/api/search/compilation-status/pass">
                     https://yangcatalog.org/api/search/compilation-status/passed</a>
                    <br/>To find all modules from the netconf working group in the IETF: <a href="https://yangcatalog.org/api/search/ietf/ietf-wg/netconf">
                     https://yangcatalog.org/api/search/ietf/ietf-wg/netconf</a>
                    <br/>This method will work for any node within the <a href="https://raw.githubusercontent.com/xorrkaz/netmod-yang-catalog/master/yang-catalog.yang">
                                          yang-catalog</a>:<br/>
                    <pre>
module: yang-catalog
<<<<<<< HEAD
+--rw catalog
 +--rw modules
 |  +--rw module* [name revision organization]
 |     +--rw name                        yang:yang-identifier
 |     +--rw revision                    union
 |     +--rw organization                string
 |     +--rw ietf
 |     |  +--rw ietf-wg?   string
 |     +--rw namespace                   inet:uri
 |     +--rw schema?                     inet:uri
 |     +--rw generated-from?             enumeration
 |     +--rw maturity-level?             enumeration
 |     +--rw document-name?              string
 |     +--rw author-email?               yc:email-address
 |     +--rw reference?                  inet:uri
 |     +--rw module-classification       enumeration
 |     +--rw compilation-status?         enumeration
 |     +--rw compilation-result?         inet:uri
 |     +--rw prefix?                     string
 |     +--rw yang-version?               enumeration
 |     +--rw description?                string
 |     +--rw contact?                    string
 |     +--rw module-type?                enumeration
 |     +--rw belongs-to?                 yang:yang-identifier
 |     +--rw tree-type?                  enumeration
 |     +--rw submodule* [name revision]
 |     |  +--rw name        yang:yang-identifier
 |     |  +--rw revision    union
 |     |  +--rw schema?     inet:uri
 |     +--rw dependencies* [name]
 |     |  +--rw name        yang:yang-identifier
 |     |  +--rw revision?   union
 |     |  +--rw schema?     inet:uri
 |     +--rw dependents* [name]
 |     |  +--rw name        yang:yang-identifier
 |     |  +--rw revision?   union
 |     |  +--rw schema?     inet:uri
 |     +--rw semantic-version?           yc:semver
 |     +--rw derived-semantic-version?   yc:semver
 |     +--rw implementations
 |        +--rw implementation*
 |                [vendor platform software-version software-flavor]
 |           +--rw vendor              string
 |           +--rw platform            string
 |           +--rw software-version    string
 |           +--rw software-flavor     string
 |           +--rw os-version?         string
 |           +--rw feature-set?        string
 |           +--rw os-type?            string
 |           +--rw feature*            yang:yang-identifier
 |           +--rw deviation* [name revision]
 |           |  +--rw name        yang:yang-identifier
 |           |  +--rw revision    union
 |           +--rw conformance-type?   enumeration
 +--rw vendors
    +--rw vendor* [name]
       +--rw name         string
       +--rw platforms
          +--rw platform* [name]
             +--rw name                 string
             +--rw software-versions
                +--rw software-version* [name]
                   +--rw name                string
                   +--rw software-flavors
                      +--rw software-flavor* [name]
                         +--rw name         string
                         +--rw protocols
                         |  +--rw protocol* [name]
                         |     +--rw name
                         |     |       identityref
                         |     +--rw protocol-version*   string
                         |     +--rw capabilities*       string
                         +--rw modules
                            +--rw module*
                                    [name revision organization]
                               +--rw name                leafref
                               +--rw revision            leafref
                               +--rw organization        leafref
                               +--rw os-version?         string
                               +--rw feature-set?        string
                               +--rw os-type?            string
                               +--rw feature*
                               |       yang:yang-identifier
                               +--rw deviation* [name revision]
                               |  +--rw name
                               |  |       yang:yang-identifier
                               |  +--rw revision    union
                               +--rw conformance-type?
                                       enumeration
=======
    +--rw catalog
       +--rw modules
       |  +--rw module* [name revision organization]
       |     +--rw name                     yang:yang-identifier
       |     +--rw revision                 union
       |     +--rw organization             string
       |     +--rw ietf
       |     |  +--rw ietf-wg?   string
       |     +--rw namespace                inet:uri
       |     +--rw schema?                  inet:uri
       |     +--rw generated-from?          enumeration
       |     +--rw maturity-level?          enumeration
       |     +--rw document-name?           string
       |     +--rw author-email?            yc:email-address
       |     +--rw reference?               inet:uri
       |     +--rw module-classification    enumeration
       |     +--rw compilation-status?      enumeration
       |     +--rw compilation-result?      inet:uri
       |     +--rw prefix?                  string
       |     +--rw yang-version?            enumeration
       |     +--rw description?             string
       |     +--rw contact?                 string
       |     +--rw module-type?             enumeration
       |     +--rw belongs-to?              yang:yang-identifier
       |     +--rw tree-type?               enumeration
       |     +--rw submodule* [name revision]
       |     |  +--rw name        yang:yang-identifier
       |     |  +--rw revision    union
       |     |  +--rw schema?     inet:uri
       |     +--rw dependencies* [name]
       |     |  +--rw name        yang:yang-identifier
       |     |  +--rw revision?   union
       |     |  +--rw schema?     inet:uri
       |     +--rw dependents* [name]
       |     |  +--rw name        yang:yang-identifier
       |     |  +--rw revision?   union
       |     |  +--rw schema?     inet:uri
       |     +--rw semantic-version?           yc:semver
       |     +--rw derived-semantic-version?   yc:semver
       |     +--rw implementations
       |        +--rw implementation* [vendor platform software-version software-flavor]
       |           +--rw vendor              string
       |           +--rw platform            string
       |           +--rw software-version    string
       |           +--rw software-flavor     string
       |           +--rw os-version?         string
       |           +--rw feature-set?        string
       |           +--rw os-type?            string
       |           +--rw feature*            yang:yang-identifier
       |           +--rw deviation* [name revision]
       |           |  +--rw name        yang:yang-identifier
       |           |  +--rw revision    union
       |           +--rw conformance-type?   enumeration
       +--rw vendors
          +--rw vendor* [name]
             +--rw name         string
             +--rw platforms
                +--rw platform* [name]
                   +--rw name                 string
                   +--rw software-versions
                      +--rw software-version* [name]
                         +--rw name                string
                         +--rw software-flavors
                            +--rw software-flavor* [name]
                               +--rw name         string
                               +--rw protocols
                               |  +--rw protocol* [name]
                               |     +--rw name                identityref
                               |     +--rw protocol-version*   string
                               |     +--rw capabilities*       string
                               +--rw modules
                                  +--rw module* [name revision organization]
                                     +--rw name                -> /catalog/modules/module/name
                                     +--rw revision            -> /catalog/modules/module/revision
                                     +--rw organization        -> /catalog/modules/module/organization
                                     +--rw os-version?         string
                                     +--rw feature-set?        string
                                     +--rw os-type?            string
                                     +--rw feature*            yang:yang-identifier
                                     +--rw deviation* [name revision]
                                     |  +--rw name        yang:yang-identifier
                                     |  +--rw revision    union
                                     +--rw conformance-type?   enumeration
>>>>>>> e5ff454e7b1569289a6a870683a4f7a60d569ecd
                 </pre>
                  </li>
                </ol>
              </div>
            </article>

            <article id="post-6" class="post-6 page type-page status-publish has-post-thumbnail hentry">
              <a name="model_delete"></a>
              <div class="entry-title">Delete Module Metadata</div>
              <div class="entry-content">
                <p>If you need to delete metadata relative to one of your specific modules, do the following:</p>
                <ol>
                  <li><a href="https://yangcatalog.org/create.php">Request</a> a new YANG Catalog API account if you do not have one already.</li>
                  <li>Once the account is requested, wait until confirmation before proceeding.</li>
                  <li>Use an HTTP DELETE request to delete specific module
                    <b>https://yangcatalog.org/api/modules/module/{name},{revision},{organization}</b>
                  </li>
                  <li>Use an HTTP DELETE request to delete modules on specific implementation metadata
                    <b>https://yangcatalog.org/api/vendors/vendor/{name}</b>.
                     You can continue deeper on the vendors branch up to software-flavor
                  </li>
                </ol>
                <p><b>NOTE:</b> Deleting implementation metadata is currently not possible.</p>
              </div>
            </article>

            <article id="post-7" class="post-7 page type-page status-publish has-post-thumbnail hentry">
              <a name="hack"></a>
              <div class="entry-title">Hacking Yangcatalog.org</div>
              <div class="entry-content">
                <p>All of the code behind <a href="https://yangcatalog.org">yangcatalog.org</a> is Open Source. However, it is spread out across multiple <a href="https://github.org">
        GitHub</a> repositories. If you are interested in hacking the code that directly drives the YANG Catalog, pick your repository from the list below:</p>
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
</a> to <b>announce@yangcatalog.org</b>.</p>
              </div>
              <!-- .entry-content -->

            </article>
            <!-- #post-## -->



          </main>
          <!-- #main -->
        </div>
        <!-- #primary -->

      </div>
      <!-- .content-wrapper -->

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
