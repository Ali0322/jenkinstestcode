<!DOCTYPE html>
<html lang="en-US">
<head>
  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <title>{$contactinfo.title}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="HTML5 Template">
   <!-- CSS STYLE -->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/base.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.css">
  <link rel="stylesheet" type="text/css" href="css/tooltipster.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- FAVICON -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <!-- MOBILE ICON -->
  </head>
  <body>
  <!-- START HEADER -->
  <header class="header-v1">
  <!-- Top Header -->
    <div class="top-header">
      <div class="w-container">
        <div class="top-left">
          <ul class="w-list-unstyled">
            <li class="li-top m-space">
              <div class="top-ico">
               <i class="fa fa-phone"></i>
              </div>
              <div class="txt-top"><a href="tel:{$contactinfo.phone}">{$contactinfo.phone}</a></div>
            </li>
          </ul>
        </div>
        <div class="top-right">
          <ul class="w-list-unstyled">
            <li class="li-top">
              <div class="top-link t-nhover">
                <div class="top-ico">
                  <i class="fa fa-clock-o"></i>
                </div>
                <div class="txt-top">Mon - Sat: 7:00 - 17:00</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div><!-- End Top Header --> 
    <!-- Start Bottom Header -->
    <div class="bottom-header">
      <div class="w-container">
        <a class="w-inline-block hamburger" href="#" data-ix="show-navigation-menu"></a>
        <a class="w-inline-block brand-logo" href="index.php"><img  src="images/logo.png" title="" alt="" />
        </a>
		<!-- Navigation -->
        <nav class="navigation">
          <ul class="w-list-unstyled">
            <li class="li-menu" data-ix="show-dropdown">
              <a class="w-inline-block link-menu {if $pg eq 'home'}active{/if}" href="index.php">
                <div>Home</div>
              </a>
            </li>
            <li class="li-menu" data-ix="show-dropdown">
              <a class="w-inline-block link-menu  {if $pg eq 'aboutus'}active{/if}" href="content.php?pg=aboutus">
                <div>ABOUT US</div>
              </a>
              <!--<ul class="w-list-unstyled dropdown-menu">
                <li class="li-drop">
                  <a class="w-inline-block dd-link" href="content.php?pg=aboutus" data-ix="move-txt-dropdown">
                    <div class="dd-txt">About Us</div>
                  </a>
                </li>
              </ul>-->
            </li>
            <li class="li-menu" data-ix="show-dropdown">
              <a class="w-inline-block link-menu {if $pg eq 'services'}active{/if}" href="services.php">
                <div>OUR SERVICES</div>
              </a>
			  <li class="li-menu" data-ix="show-dropdown">
              <a class="w-inline-block link-menu {if $pg eq 'gallery'}active{/if}" href="ourgallery.php">
                <div>OUR GALLERY</div>
              </a>
            </li>
              <!--<ul class="w-list-unstyled dropdown-menu">
                <li class="li-drop">
                  <a class="w-inline-block dd-link" href="portfolio-2-columns.html" data-ix="move-txt-dropdown">
                    <div class="dd-txt">Portfolio 2 Columns</div>
                  </a>
                </li>               
              </ul>-->
            </li>
            <li class="li-menu" data-ix="show-dropdown">
              <a class="w-inline-block link-menu {if $pg eq 'faqs'}active{/if}" href="faqs.php">
                <div>FAQs</div>
              </a>
            </li>
            <li class="li-menu" data-ix="show-dropdown">
              <a class="w-inline-block link-menu  {if $pg eq 'contactus'}active{/if}" href="contactus.php">
                <div>Contact Us</div>
              </a>
            </li>
            <li class="li-social">
              <div class="w-clearfix social-wrapper">
                <a class="w-inline-block social-ico facebook tooltip-2" href="#" title="Facebook">
                  <div class="w-embed"><i class="fa fa-facebook"></i>
                  </div>
                </a>
                <a class="w-inline-block social-ico twitter tooltip-2" href="#" title="Twitter">
                  <div class="w-embed"><i class="fa fa-twitter"></i>
                  </div>
                </a>
                <a class="w-inline-block social-ico linkedin tooltip-2" href="#" title="LinkedIn">
                  <div class="w-embed"><i class="fa fa-linkedin"></i>
                  </div>
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End Navigation -->
      </div>
    </div>
    <!-- End Bottom Header -->
  </header>
  <!-- END HEADER -->
  <!-- START SLIDER -->