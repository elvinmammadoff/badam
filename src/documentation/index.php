<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Title -->
  <title>Documentation - MetaGamer</title>

  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/prism.css">
  <link rel="stylesheet" href="css/main.css">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700|Raleway:300i,400,600,700" rel="stylesheet">

  <!-- Place favicon.ico in the root directory -->
  <link rel="icon" type="image/x-icon" href="favicon.ico">

</head>

<body>

  <div id="site-body">

    <div id="container" class="row">

      <div id="sidebar" class="large-3 columns">

        <div class="sticky">
          <ol>
            <li>
              <a href="#intro" class="intro active">Intro</a>
            </li>
            <li>
              <a href="#read-first" class="read-first">Read First</a>
            </li>
            <li>
              <a href="#getting-started" class="getting-started">Getting Started</a>
            </li>
            <li>
              <a href="#html-structure" class="html-structure">HTML Structure</a>
            </li>
            <li>
              <ul>
                <li>
                  <a href="#skeleton-details" class="skeleton-details">Skeleton Details</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#favicon-settings" class="favicon-settings">Favicon Settings</a>
            </li>
            <li>
              <a href="#logo-settings" class="logo-settings">Logo Settings</a>
            </li>
            <li>
              <a href="#fonts-settings" class="fonts-settings">Fonts Settings</a>
            </li>
            <li><a href="#php-file" class="php-file">PHP Code Explanation</a></li>
            <li><a href="#css-files" class="css-files">CSS Files</a></li>
            <li><a href="#javascript-files" class="javascript-files">Javascript Files</a></li>
            <li><a href="#support-desk" class="support-desk">Support Desk</a></li>
            <li><a href="#credits" class="credits">Credits</a></li>
            <li><a href="#updates" class="updates">Regular Updates</a></li>
            <li><a href="#thanks" class="thanks">Thanks 😊</a></li>
          </ol>

        </div>

      </div>

      <div id="main-content" class="large-9 columns">

        <section id="intro">
      
          <div class="row">
      
            <div class="large-10 large-centered columns">
      
              <div class="name">
                <h3>MetaGamer - Game and Gaming HTML5 Template <span>v1.0</span></h3>
                <p>Premium Bootstrap HTML5 Template Documentation</p>
              </div>
      
              <ul class="meta">
                <li><strong>Author:</strong> <a href="https://themeforest.net/user/alissio" target="_blank">Alissio</a></li>
                <li><strong>Live Preview:</strong> <a href="https://metagamer.netlify.app/">View Demo</a></li>
              </ul>
      
              <p>Thank you for purchasing <code>MetaGamer</code> HTML5 Template. <br> You can find the detailed information about the template in this document. <br> If you have any questions that are beyond the scope of this help
                file, <br> please feel free to email via the <a href="https://themeforest.net/user/alissio" target="_blank">Profile page</a>.</p>
      
            </div>
      
      
          </div>
      
        </section>

        <section id="read-first" class="section">

          <h1>Howdy!</h1>
          <p class="lead">You are a shining owner of a regular license based on MetaGamer - Game & Gaming HTML5 Template.
          </p>
          <p>First of all, Thank you so much for purchasing the <code>MetaGamer</code> HTML5 Template and for being our loyal customer. You are
            entitled to get free updates to this product + exceptional support (as per market policy) from the author directly.</p>
          <p>This documentation is to help you understand the product code structure. Please go through the
            documentation carefully to understand how this product is made and how to edit this properly. Basic HTML and
            CSS knowledge is required to customize.</p>
            <p>In download folder you will find <strong>Three folders</strong>:</p>
            <ul class="mb-2">
              <li><code>home1</code> - home version #1</li>
              <li><code>home2</code> - home version #2</li>
              <li><code>home3</code> - home version #3</li>
            </ul>
            <img src="./img/files.png" alt="">
            <p class="mt-2">Remember, when you want to use the shortCode/element in any pages you need to adjust the section spacing by giving <code>margin</code> or <code>padding</code>. Don't get panic if you messed up anything when you edit the template. We are always available to support our customer.</p>

        </section>

        <section id="getting-started" class="section">

          <h1 class="section-title"><span>01</span> Getting Started</h1>

          <br>

          <p>Unzip the package you have downloaded from themeforest and open the <code>Template</code> folder to find all the template files. You wil get <code>home1</code>, <code>home2</code>, <code>home3</code> folders in there. Which home version want to use you need to upload this folder to your hosting web server using FTP or cPanel in order to use it on your website. Without Live or Local server you may see something broken on your website. Because some plugin are not working without server.<br>
            In extracted folder you can see following folders:
          <p>

          <h3>Package contents:</h3>

          <ul class="file-list">
            <li><strong>index.html</strong> Main HTML file of the project. You'll upload on your server.</li>

            <li><strong>assets</strong> Contains all the original product files comprises of CSS, SCSS, JS etc. This is the folder which you'll upload on your server after necessary modifications.</li>

            <li><strong>documentation</strong> Inside this folder, you will find the same documentation updated with the latest changes.</li>

          </ul>

          <p class="mt-2">You need to upload all or specific HTML files as per your need. <br>
            And now you are ready to go to generate your website with this awesome template. <br> Details regarding contents and structure of <code>product</code> folder is given below.</p>

        </section>

        <section id="html-structure" class="section">

          <h1 class="section-title"><span>02</span> HTML Structure</h1>

          <br>

          <p>This product is a Game & Gaming HTML5 Template which built with Bootstrap 5.0.2 Framework and you can customize it very easily. All of the information within the main
            content area is nested within nav, div and section with an class of "loading-overlay", "section" and "scroll-up". <br> Here is the general
            structure. Note that for brevity, I am not including content that isn’t relevant to the
            technique.</p>

<pre data-language="HTML Skeleton">
  <code class="language-markup">
  
    <!--========== Loading Overlay ==========-->
    <div class="loading-overlay">...</div>

    <!--========== Hero Layout ==========-->
    <div class="layout">

      <!--========== Carousel ==========-->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">...</div>

      <!--========== Home Section ==========-->
      <section class="layer section" id="home">...</section>
      
      <!--========== Features Section ==========-->
      <section class="section" id="features">...</section>
      
      <!--========== New Challenges Section ==========-->
      <section class="section" id="newch">...</section>
      
      <!--========== About Section ==========-->
      <section class="section" id="about">...</section>

      <!--========== Games Section ==========-->
      <section class="section" id="games">...</section>
      
      <!--========== Community Section ==========-->
      <section class="section" id="community">...</section>
      
      <!--========== Community Modal ==========-->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">...</div>

      <!--========== Reviews Section ==========-->
      <section class="section" id="reviews">...</section>

      <!--========== Contact Section ==========-->
      <section class="section contact" id="contact">...</section>

      <!--========== Scroll Up ==========-->
      <div class="scroll-up">...</div>

      <!--========== Mobile Menu ==========-->
      <nav class="cd-nav-container burger-menu" id="cd-nav">...</nav>
    
    </div>
  
  </code>
</pre>

          </section>

        <section id="skeleton-details" class="sub-section section">

          <h2 class="section-title"><span>2.1</span> Skeleton Details</h2>

          <br>

          <p><code>div class="loading-overlay"</code> contains the code for page loader details</p>
          <p><code>div class="layout"</code> contains the code for content details</p>
          <p><code>div class="scroll-up"</code> contains the code for back to top details</p>
          <p><code>nav class="cd-nav-container burger-menu" id="cd-nav"</code> contains the code for mobile menu details
          </p>

        </section>

        <section id="favicon-settings" class="section">

          <h1 class="section-title"><span>03</span> Favicon Settings</h1>

          <br>
          <p>Favicon will be found in <code>head</code> section.</p>
  <pre data-language="">
    <code class="language-markup">
<link rel="apple-touch-icon" sizes="180x180" href="src/assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="256x256" href="src/assets/img/favicon/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="192x192" href="src/assets/img/favicon/android-chrome-512x512.png">    
<link rel="icon" type="image/png" href="src/assets/img/favicon/favicon.ico" />
<link rel="icon" type="image/png" sizes="32x32" href="src/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="src/assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="src/assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="src/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#0b1f3c">
<meta name="theme-color" content="#ffffff">
    </code>
  </pre>

        </section>
        
        <section id="logo-settings" class="section">

          <h1 class="section-title"><span>04</span> Logo Settings</h1>

          <br>
          <p>The Logo will be found in the <code><a class="navbar-brand" href="#home"></a></code> tag.</p>
  <pre data-language="">
    <code class="language-markup">
      <a class="navbar-brand" href="#home">
          <img src="src/assets/img/logo.svg" alt="MetaGamer">
          <span>MetaGamer</span>
      </a>
    </code>
  </pre>
          <p class="mt-2">You can replace any <code>.jpg</code> <code>.png</code> <code>.svg</code> logo. And set the <code>width</code> according to your logo size.</p>

        </section>

        <section id="fonts-settings" class="section">

          <h1 class="section-title"><span>05</span> Fonts Settings</h1>

          <br>
          <p>In MetaGamer we use 'Nunito Sans', sans-serif font.
            You can change this font from index.html file:</p>
<pre data-language="">
  <code class="language-markup">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800&display=swap" type="text/css">
  </code>
</pre>

        </section>

        <section id="php-file" class="section">

          <h1 class="section-title"><span>06</span> PHP Code Explanation</h1>

          <br>

          <p><code>index.php</code> file for deploy and init on docker container, netlify or heroku
          <p>

        </section>

        <section id="css-files" class="section">

          <h1 class="section-title"><span>07</span> CSS Files</h1>

          <br>

          <p>We're using four CSS files in this product.

          <ul class="file-list">
            <li><strong>bootstrap.min.css</strong> Bootstrap Framework 5.0.2. This file includes core <a href="https://getbootstrap.com" target="_blank">bootstrap</a> styles. <br>
              This outsourcing CSS design file is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system.
              <br>
              <a href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" target="_blank" class="mt-1 d-inline-block">Source</a>
            </li>

            <li><strong>slick.css, slick-theme.css</strong> This file contains styles about slick carousel plugin. <br> Slick is a responsive carousel jQuery plugin that
              supports multiple breakpoints, CSS3 transitions, touch events / swiping & much more.
              <br>
              <a href="https://kenwheeler.github.io/slick/" target="_blank" class="mt-1 d-inline-block">Source</a>
            </li>

            <li><strong>touch-sideswipe.css</strong> widget-library for mobile navbar (vanilla js and little bit pure css)
              <br>
              <a href="https://github.com/freetitelu/touch-sideswipe" target="_blank" class="mt-1 d-inline-block">Source</a>
            </li>

            <li><strong>style.css</strong> This is custom style file. All styles about template</li>

          </ul>

          <p class="mt-2">This files contains all of the specific stylings for the page. The file is separated into sections using:</p>

          <pre data-language="Folder Map" class="css">
@charset "UTF-8";

/*
  Theme Name: MetaGamer
  Theme URI: themeforest.net/user/alissio
  Author: Alissio
  Author URI: metagamer.netlify.app
  Description: Alissio – Game & Gaming HTML Template
  License: GNU General Public License v2 or later
  License URI: www.gnu.org/licenses/gpl-2.0.html
  Tags: one-column, two-columns, three-columns, custom-colors, custom-header, custom-menu, custom-logo, featured-images, post-formats, sticky-post, theme-options, threaded-comments, translation-ready
  Text Domain: metagamer
  Version: 1.0.0
*/


/* ========================

[Index]
1. Global
1.1 Icomoon Custom Icon Font
1.2 General
1.3 Scrollbar
1.4 Scroll Up
1.5 Loading Overlay
2. Carousel
3. Header
    3.1 Header General
    3.3 Navbar
    3.4 Mobile Right Menu
4. Custom Slick Slider
5. Card
    5.1 Card General
    5.2 Challenge
    5.3 Games
    5.4 Update
    5.5 Features
    5.6 About
        5.6.1 About General
        5.6.2 Follow Social
        5.6.3 Subscribe
        5.6.4 Contact
    5.7 Reviews
6. Footer
7. Responsive


======================== */


/*======
*
* 1. Global
*
======*/
/*====== 1.1 Icomoon Custom Icon Font ======*/

@font-face {
  font-family: 'metaicon';
  src: url('../fonts/iconfont/metaicon.eot?bjwbjx');
  src: url('../fonts/iconfont/metaicon.eot?bjwbjx#iefix') format('embedded-opentype'),
      url('../fonts/iconfont/metaicon.ttf?bjwbjx') format('truetype'),
      url('../fonts/iconfont/metaicon.woff?bjwbjx') format('woff'),
      url('../fonts/iconfont/metaicon.svg?bjwbjx#metaicon') format('svg');
  font-weight: normal;
  font-style: normal;
  font-display: block;
}

i {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'metaicon' !important;
  speak: never;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-xbox:before {
  content: "\e900";
}

...
...
...

/*======
*
* 7. Responsive
*
======*/
@media (max-width: 425px) {
    .update-stats {
        justify-content: center;
    }

    .fcopy-nav {
        flex-direction: column;
    }

    .subs-area {
        border: none;
        padding: 0;
    }

    .subs-form {
        padding: 2rem 1rem;
    }
}
</pre><br>

          <p>All styling related files of this product can be found in this folder path <code>assets/css</code></p>

          <pre data-language="Folder Map">
  <code class="language-markup">
    css/
    |__
      |-- style.css
      |__ plugins/
        | 
        |-- slick.css
        |-- slick-theme.css
        |-- touch-sideswipe.css
  </code>
</pre>

          <br>
          <p>
            As it can be seen, the folder contains one main <code>css</code> file and one <code>folder</code> which
            contains plugins style file.<br>
          </p>
        </section>

        <section id="javascript-files" class="section">

          <h1 class="section-title"><span>08</span> Javascript Files</h1>

          <br>

          <p>This product imports six Javascript file.</p>

          <ul class="file-list">
            <li><strong>bootstrap.min.js</strong>
              Bootstrap Framework 5.0.2. This outsourcing file is an open source toolkit for developing with HTML, CSS,
              and JS. Quickly prototype your ideas or build your entire app with responsive grid system.
              <br>
              <a href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" target="_blank" class="mt-1 d-inline-block">Source</a>
            </li>

            <li><strong>jquery-2.1.1.min.js</strong> jquery is a package that makes things like HTML document
              traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that
              works across a multitude of browsers.
              <br>
              <a href="https://code.jquery.com/jquery-2.1.1.min.js" target="_blank" class="mt-1 d-inline-block">Source</a>
            </li>

            <li><strong>jquery.mousewheel.min.js</strong> A jQuery plugin that adds cross-browser mouse wheel support
              with delta normalization.<br>
              In order to use the plugin, simply bind the mousewheel event to an element.<br>
              It also provides two helper methods called mousewheel and unmousewheel that act just like other event
              helper methods in jQuery.
              <br>
              <a href="https://github.com/jquery/jquery-mousewheel" target="_blank" class="mt-1 d-inline-block">Source</a>
            </li>

            <li><strong>jquery.easing.min.js</strong> a jQuery plugin from GSGD to give advanced easing options.
              <br>
              <a href="https://github.com/gdsmith/jquery.easing/" target="_blank" class="mt-1 d-inline-block">Source</a>
            </li>

            <li><strong>slick.min.js</strong> is a responsive carousel jQuery plugin that supports multiple breakpoints,
              CSS3 transitions, touch events/swiping & much more.
              <br>
              <a href="https://kenwheeler.github.io/slick/" target="_blank" class="mt-1 d-inline-block">Source</a>
            </li>

            <li><strong>main.js</strong> contains all the custom programmed javascript coded specifically for this template.
            </li>

          </ul>

          <p>This files contains all of the specific action effects for the page. The file is separated into sections using:</p>

          <pre data-language="Folder Map" class="js">

/*********************************************************************************

    Version: 1.0

    Note: This is main js. All custom scripts here.

**********************************************************************************/


/*======
*
* MetaGamer Scripts
*
======*/


/*===============================================================================

    [ INDEX ]
    |
    |___ Mobile Menu
    |___ Affix Navbar
    |___ Loading Overlay
    |___ Page Scrolling
    |___ Custom Slick
    |___ Scroll Up
    |

================================================================================*/

(function ($) {
    'use strict';


    /*======
    *
    * Mobile Menu
    *
    ======*/
    //open left menu clicking the left menu icon
    $('.left_menu_icon').on('click', function (event) {
        event.preventDefault();
        toggleLeftNav(true);
        $("body").css({ 'overflow': 'hidden' });
    });

...
...
...

/*======
*
* Scroll Up
*
======*/
var bodyH = document.body.offsetHeight;
var winH = window.innerHeight;
$(document).on('scroll', function () {
    var scrollH = window.scrollY;
    var scrollCalc = Math.max(((scrollH + winH) * 100) / bodyH);
    var scrollPercent = Math.trunc(scrollCalc) + "px";
    document.getElementById("scrollH").style.height = scrollPercent;
    if (Math.trunc(scrollCalc) > 20) {
        document.getElementById("scrollH").style.visibility = 'visible';
    } else {
        document.getElementById("scrollH").style.visibility = 'hidden';
    }
    if ($(window).scrollTop() > 100) {
        $('.scroll-up').addClass('show');
    } else {
        $('.scroll-up').removeClass('show');
    }
});

$('.scroll-up').on('click', scrollToTop);

function scrollToTop() {
    var verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0,
        element = $('body'),
        offset = element.offset(),
        offsetTop = offset.top;
    $('html, body').animate({ scrollTop: offsetTop }, 500, 'linear');
}


})(jQuery);
</pre><br>

          <p>All client-side related javascript files can be found in this folder path
            <code>assets/js</code>
          </p>

          <pre data-language="Folder Map">
  <code class="language-markup">
    js/
    |__    
      |-- main.js
      |__ /plugins
        |
        |-- jquery-2.1.1.min.js  
        |-- jquery.mousewheel.min.js
        |-- jquery.easing.min.js      
        |-- slick.min.js  
  </code>
</pre>

          <br>
          <p>
            As it can be seen, the folder contains one main <code>js</code> file and one <code>folder</code> which
            contains plugins js file.<br>
          </p>
        </section>

        <section id="support-desk" class="section">

          <h1 class="section-title"><span>09</span> Support Desk</h1>

          <br>

          <p>Please be reminded that you have purchased a very affordable product and you have not paid for a full-time web design agency. Occasionally, we will help with small tweaks, but these requests will be put on a lower priority due to their nature.</p>


          <div class="sub-section">

            <h2 class="mt-1">Support for item includes:</h2>

            <ul>
              <li>Responding to questions or problems regarding the item and its features</li>
              <li>Fixing bugs and reported issues</li>
              <li>Providing updates to ensure compatibility with new software versions</li>
            </ul>

          </div>

          <div class="sub-section">

            <h2 class="mt-1">Item support does not include:</h2>

            <ul>
              <li>Customization and installation services</li>
              <li>Support for third party software and plug-ins</li>
            </ul>

          </div>

          <div class="sub-section">

            <h2 class="mt-1">Before seeking support, please...</h2>

            <ul>
              <li>Make sure your question is a valid item issue and not a customization request.</li>
              <li>Make sure you have read through the documentation or any related video guides before asking support on
                how to accomplish a task.</li>
              <li>Make sure to double check the item FAQs.</li>
              <li>If you have customized your item and now have an issue, back-track to make sure you didn't make a
                mistake. If you have made changes and can't find the issue, please provide us with your changelog.</li>
              <li>Almost 80% of the time we find that the solution to people's issues can be solved with a simple
                "Google Search". You might want to try that before seeking support. You might be able to fix the issue
                yourself much quicker than we can respond to your request.</li>
              <li>Make sure to state the name of the item you are having issues with when requesting support via
                ThemeForest.</li>
            </ul>

          </div>

          <p class="mt-2">
            <a href="https://portal.hasthemes.com/contact/" rel="nofollow">Create A Ticket here if you need any support for the item purchased.</a>
          </p>
          <p>
            <a href="https://portal.hasthemes.com/contact/" rel="nofollow">Have a question? Need clarification? Feel free to Contact Us if you have a pre-sale question</a>
          </p>
          <p>
            <a href="https://portal.hasthemes.com/contact/" rel="nofollow">Send a custom job proposal</a>
          </p>


        </section>

        <section id="credits" class="section">

          <h1 class="section-title"><span>10</span> Credits</h1>

          <br>

          <p>The product uses following resources by third parties.</p>


          <ul class="credits">
            <li><a href="https://getbootstrap.com/" target="_blank" class="fs-1_4 bold">Bootstrap</a></li>
            <li><strong>Stock image</strong> <a href="https://www.freepik.com/" target="_blank">Freepik</a>, 
              <a href="https://unsplash.com/" target="_blank">Unsplash</a>, 
              <a href="https://pixabay.com/" target="_blank">Pixabay</a>, 
              <a href="https://wallpapers.com/" target="_blank">Wallpapers</a>, 
              <a href="https://userstock.io/" target="_blank">Userstock</a>,
              <a href="https://www.shutterstock.com/" target="_blank">Shutterstock</a>
            </li>
            <li>
              <a href="https://icomoon.io/" target="_blank" class="fs-1_4 bold">Icomoon</a>
              <p>IcoMoon is an icon solution, providing three main services: vector icon packs, the IcoMoon App, and hosting icons as SVGs or fonts.</p>
              <strong>Example:</strong> <br>
              <div class="mt-1">
                <code><i class="icon-users"></i></code>
              </div>
            </li>
            <li><a href="https://kenwheeler.github.io/slick/" target="_blank" class="fs-1_4 bold">Slick</a></li>
          </ul>

        </section>

        <section id="updates" class="section">

          <h1 class="section-title"><span>11</span> Regular Updates</h1>

          <br>

          <p>We’re always improving our skills and knowledge so we’re making changes regularly. From bug fixes to new
            awesome features, updates generally come at least twice a month.
          <p>

          <pre class="css">

  V. 1.0.0 – 05.12.2023
  - Initial release
</pre>
        </section>

        <section id="thanks" class="section">

          <h1 class="section-title"><span>12</span> Thanks</h1>

          <br>

          <p>Once again thank you for purchasing one of our Templates.<p>
            <br>
            <h4 class="d-block">Best Regards</h4>
            <a href="https://themeforest.net/user/alissio" target="_blank" class="fs-2">Alissio</a>

            <footer class="mt-4">
              <p>© Documentation - MetaGamer</p>
            </footer>
            
        </section>

      </div>

    </div>

  </section>

  <script src="js/vendor/jquery-1.11.2.min.js"></script>
  <script src="js/prism.js"></script>
  <script src="js/main.js"></script>
</body>

</html>