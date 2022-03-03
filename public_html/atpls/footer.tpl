   <!-- FOOTER --> 
  <footer class="footer">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4 col-spc">
          <div>
		  <a href="index.php">
		  <img width="242" src="images/logo.png">
          </a>
		  </div>
          <div class="div-spc more-spc">
            <p class="p-ft">{$contentdata.5.content}</p>
          </div>
        </div>
        <div class="w-col w-col-4 col-spc">
          <div class="top-title les-spc">
            <div class="title-txt">
              <h5 class="white">Quick Links</h5>
            </div>
            <div class="divider darker"></div>
          </div>
          <div>
            <ul class="w-list-unstyled">
              <li>
                <a class="w-inline-block recent-block" href="index.php">
                  <div class="more-ico">
                    <div class="w-embed"><i class="fa fa-angle-right"></i>
                    </div>
                  </div>
                  <div class="rc-ps-txt">HOME</div>
                </a>
                <a class="w-inline-block recent-block" href="content.php?pg=aboutus">
                  <div class="more-ico">
                    <div class="w-embed"><i class="fa fa-angle-right"></i>
                    </div>
                  </div>
                  <div class="rc-ps-txt">ABOUT US</div>
                </a>
                <a class="w-inline-block recent-block" href="services.php">
                  <div class="more-ico">
                    <div class="w-embed"><i class="fa fa-angle-right"></i>
                    </div>
                  </div>
                  <div class="rc-ps-txt">OUR SERVICES</div>
                </a>
                <a class="w-inline-block recent-block" href="faqs.php">
                  <div class="more-ico">
                    <div class="w-embed"><i class="fa fa-angle-right"></i>
                    </div>
                  </div>
                  <div class="rc-ps-txt">FAQs</div>
                </a>
                <a class="w-inline-block recent-block" href="contactus.php">
                  <div class="more-ico">
                    <div class="w-embed"><i class="fa fa-angle-right"></i>
                    </div>
                  </div>
                  <div class="rc-ps-txt">CONTACT US</div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="w-col w-col-4 col-spc">
          <div class="top-title">
            <div class="title-txt">
              <h5 class="white">Recent Works</h5>
            </div>
            <div class="divider darker"></div>
          </div>
          <div id="text-2" class="widget widget_text">
          <div class="textwidget"><strong class="map_color"><i class="fa fa-map-marker"></i> {$contactinfo.address},
<br>{$contactinfo.city}, {$contactinfo.state},{$contactinfo.zip}</strong>
              <br>
              <div class="contact-font-icon">
                  <div class="contact-info phone-info"><i class="fa fa-phone"></i>{$contactinfo.phone}</div>
                  <div class="contact-info email-info"><i class="fa fa-fax"></i>+1 234 567 890</div>
                  <div class="contact-info time-info"><i class="fa fa-envelope-o"></i><a href="E mails:{$contactinfo.email}">{$contactinfo.email}</a></div>
              </div>
          </div>
      </div>
        </div>
      </div>
    </div>
    <div class="bottom-footer">
      <div class="w-container">
        <div class="w-row">
          <div class="w-col w-col-4 w-col-stack">
            <p class="copyright">{$footer.description}. All Rights Reserved.</p>
          </div>
          <div class="w-col w-col-8 w-col-stack">
            <div>
              <div class="w-clearfix social-wrapper s-footer">
                <a class="w-inline-block social-ico social-footer google-plus tooltip-2" href="#" title="Google Plus">
                  <div class="w-embed"><i class="fa fa-google-plus"></i>
                  </div>
                </a>
                <a class="w-inline-block social-ico social-footer linkedin tooltip-2" href="#" title="LinkedIn">
                  <div class="w-embed"><i class="fa fa-linkedin"></i>
                  </div>
                </a>
                <a class="w-inline-block social-ico social-footer twitter tooltip-2" href="#" title="Twitter">
                  <div class="w-embed"><i class="fa fa-twitter"></i>
                  </div>
                </a>
                <a class="w-inline-block social-ico social-footer facebook tooltip-2 tumblr" href="#" title="Facebook">
                  <div class="w-embed"><i class="fa fa-facebook"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  {literal}
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]
      }
    });
  </script>
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  <script type="text/javascript" src="js/jquery-moutheme.js"></script>
  <script type="text/javascript" src="js/default.js"></script>
	 <script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/form.js"></script>
  <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
  <script type="text/javascript" src="js/jquery.stellar.js"></script>
  
  
  
  <link rel="shortcut icon" href=""> 
        <link rel="stylesheet" type="text/css" href="ourgalleryfiles/css/style.css"/>
		<script src="ourgalleryfiles/js/modernizr.custom.70736.js"></script>
		<noscript><link rel="stylesheet" type="text/css" href="ourgalleryfiles/css/noJS.css"/></noscript>
		<script src="ourgalleryfiles/js/jquery.masonry.min.js"></script>
		<script src="ourgalleryfiles/js/jquery.history.js"></script>
		<script src="ourgalleryfiles/js/js-url.min.js"></script>
		<script src="ourgalleryfiles/js/jquerypp.custom.js"></script>
		<script src="ourgalleryfiles/js/gamma.js"></script>
		<script type="text/javascript">
			
			$(function() {

				var GammaSettings = {
						// order is important!
						viewport : [ {
							width : 1200,
							columns : 5
						}, {
							width : 900,
							columns : 4
						}, {
							width : 500,
							columns : 3
						}, { 
							width : 320,
							columns : 2
						}, { 
							width : 0,
							columns : 2
						} ]
				};

				Gamma.init( GammaSettings, fncallback );


				// Example how to add more items (just a dummy):

				var page = 0,
					items = ['<li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="images/xlarge/3.jpg" data-min-width="700"></div><div data-src="images/large/3.jpg" data-min-width="300"></div><div data-src="images/medium/3.jpg" data-min-width="200"></div><div data-src="images/small/3.jpg" data-min-width="140"></div><div data-src="images/xsmall/3.jpg"></div><noscript><img src="images/xsmall/3.jpg" alt="img03"/></noscript></div></li>']

				function fncallback() {

					$( '#loadmore' ).show().on( 'click', function() {

						++page;
						var newitems = items[page-1]
						if( page <= 1 ) {
							
							Gamma.add( $( newitems ) );

						}
						if( page === 1 ) {

							$( this ).remove();

						}

					} );

				}

			});

		</script>
  {/literal}
</body>
</html>