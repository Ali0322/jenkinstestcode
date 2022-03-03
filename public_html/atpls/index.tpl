
{include file="header.tpl"}
{include file="slider.tpl"}
{include file="services_homepage.tpl"}
  <!-- START SECTION 2 -->
  <section class="section gray">
    <div class="w-container">
      <div class="top-title">
        <div class="title-txt">
        <h1>{$contentdata.0.title}</h1>
        </div>
        <div class="divider"></div>
        <div class="w-col-12">
        <div class="w-col-6">
        <p>{$contentdata.0.content}</p>
        <div class="vc_btn3-container vc_btn3-inline"><button class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-flat vc_btn3-icon-right vc_btn3-color-theme_style_3">View Detail <i class="vc_btn3-icon stm-arrow-next"></i></button></div>
        </div>
        <div class="w-col-6"><img src="images/welcome_img.png" class="img-responsive"></div>
        </div>
      </div>
      <div>
      </div>
     </div> 
    </section>
    <!-- END SECTION 2 -->
    <!-- START SECTION 2 -->
  <section class="section-1 image">
    <div class="w-container">
      <div class="top-title">
      <div class="w-col-12">
      <div class="w-col-6 space-top">
      <h2>{$contentdata.1.title}</h2>
      <p class="color_text">{$contentdata.1.content}</p>
      <div class="vc_btn3-container vc_btn3-inline"><button class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-flat vc_btn3-icon-right vc_btn3-color-theme_style_3">Contact Now <i class="vc_btn3-icon stm-arrow-next"></i></button></div>
      </div>
      <div class="w-col-6 space-top"><img src="images/girl.png" class="img-responsive"></div>
      </div>
      </div>
      <div>
      </div>
     </div> 
    </section>
   <!-- END SECTION 2 -->
   <section class="w-section la-section">
    <div class="w-container">
      <div>
        <div class="w-row">
          <div class="w-col w-col-4 w-col-stack col-spc">
            <div class="top-title">
              <div class="title-txt">
                <h5>Last News <span class="sub-title-lighter">/&nbsp;Stuff From Our News</span></h5>
              </div>
              <div class="divider"></div>
            </div>
            <div>
              <div class="w-tabs" data-duration-in="300" data-duration-out="100">
                <div class="w-tab-content">
                  <div class="w-tab-pane w--tab-active" data-w-tab="Tab 1">
                    <div class="last-wrapper">
                      <div class="last-top">
                        <div class="w-slider carousel-second" data-animation="slide" data-duration="500" data-infinite="1">
                          <div class="w-slider-mask">
						   {section name=q loop=$gallery}
						  <div class="w-slide" style="transform: translateX(0px); opacity: 1;">
                              
							  
							 <div class="portfolio-top" data-ix="portfolio-hover">
                                <div class="portfolio-overlay" style="transition: opacity 400ms; opacity: 0;">
                                  <div class="port-ic-wp">
                                    <a class="w-inline-block portfolio-ico-zoom" href="{$gallery[q].image}" data-lightbox="portfolio-1" 
                                     data-ix="move-portfolio-ico-zoom" style="transition: all 0.3s ease-in-out 0s, opacity 400ms, transform 400ms; opacity: 0; transform: translateX(-66px) translateY(0px);">
                                      <div class="w-embed"><i class="fa fa-search"></i>
                                      </div>
                                    </a>
                                  </div>
                                </div><img src="{$gallery[q].image}" width:100%; height:100%; class="img" alt="blog1">
                              </div>
							
							  
                            </div>
							{/section}
							</div>
                          <div class="w-slider-arrow-left second-carousel-arrow">
                          <div class="w-icon-slider-left arrow-carousel"></div>
                          </div>
                          <div class="w-slider-arrow-right second-carousel-arrow">
                          <div class="w-icon-slider-right arrow-carousel"></div>
                          </div>
                        </div>
                      </div>
					  <!--
                      <div class="last-bottom">
                      <h6><a class="last-title" href="#">Heading 1</a></h6>
                      </div>
					  <div class="meta-tag">
                        <ul class="w-list-unstyled">
                          <li class="li-top m-space">
                            <div class="meta-cs">
                              <div class="top-ico top-darker">
                                <div class="w-embed"><i class="fa fa-comment"></i>
                                </div>
                              </div>
                              <div class="txt-top txt-last">12 Comments</div>
                            </div>
                          </li>
                          <li class="li-top m-space">
                            <div class="meta-cs">
                              <div class="top-ico top-darker">
                                <div class="w-embed"><i class="fa fa-clock-o"></i>
                                </div>
                              </div>
							 <div class="txt-top txt-last">Feb 09, 2016</div>
							</div>
                          </li>
                        </ul>
                      </div>
					  -->
                    </div>
                  </div>
                  <div class="w-tab-pane" data-w-tab="Tab 2">
                    <div class="last-wrapper">
                      <div class="last-top">
                        <div class="portfolio-top" data-ix="portfolio-hover">
                          <div class="portfolio-overlay">
                            <div class="port-ic-wp">
                             <a class="w-inline-block portfolio-ico-zoom" href="images/blog1.jpg" data-lightbox="portfolio-1" data-ix="move-portfolio-ico-zoom" style="transition: all 0.3s ease-in-out 0s; opacity: 0; transform: translateX(-66px) translateY(0px);"></a>
                            </div>
                          </div><img src="images/blog1.jpg" alt="blog1">
                        </div>
                      </div>
                      <div class="last-bottom">
                        <h6><a class="last-title" href="#">Heading 1</a></h6>
                      </div>
                      <div class="meta-tag">
                        <ul class="w-list-unstyled">
                          <li class="li-top m-space">
                            <div class="meta-cs">
                              <div class="top-ico top-darker">
                                <div class="w-embed"><i class="fa fa-comment"></i>
                                </div>
                              </div>
                              <div class="txt-top txt-last">12 Comments</div>
                            </div>
                          </li>
                          <li class="li-top m-space">
                            <div class="meta-cs">
                              <div class="top-ico top-darker">
                                <div class="w-embed"><i class="fa fa-clock-o"></i>
                                </div>
                              </div>
                              <div class="txt-top txt-last">March 09, 2015</div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="w-tab-pane" data-w-tab="Tab 3">
                    <div class="last-wrapper">
                      <div class="last-top">
                        <div class="portfolio-top" data-ix="portfolio-hover">
                          <div class="portfolio-overlay">
                            <div class="port-ic-wp">
                             <a class="w-inline-block portfolio-ico-zoom" href="images/blog1.jpg" data-lightbox="portfolio-1" data-ix="move-portfolio-ico-zoom"  style="transition: all 0.3s ease-in-out 0s; opacity: 0; transform: translateX(-66px) translateY(0px);">
                              <div class="w-embed"><i class="fa fa-search"></i>
                              </div>
                              </a>
                            </div>
                          </div><img src="images/blog1.jpg" alt="blog1">
                        </div>
                      </div>
                      <div class="last-bottom">
                        <h6><a class="last-title" href="#">In ac felis Ispun</a></h6>
                      </div>
                      <div class="meta-tag">
                        <ul class="w-list-unstyled">
                          <li class="li-top m-space">
                            <div class="meta-cs">
                              <div class="top-ico top-darker">
                                <div class="w-embed"><i class="fa fa-comment"></i>
                                </div>
                              </div>
                              <div class="txt-top txt-last">12 Comments</div>
                            </div>
                          </li>
                          <li class="li-top m-space">
                            <div class="meta-cs">
                              <div class="top-ico top-darker">
                                <div class="w-embed"><i class="fa fa-clock-o"></i>
                                </div>
                              </div>
                              <div class="txt-top txt-last">Jan 09, 2016</div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
				
                <div class="w-tab-menu w-clearfix last-tab">
                
				<div class="blog-seperator"></div>
                <!--
				{section name=q loop=$gallery}
				<a class="w-tab-link w--current w-inline-block blog-tab" data-w-tab="Tab 1"><img src="{$gallery[q].image}" alt="blog1">
                </a>
				{/section}
                -->
				</div>
              </div>
            </div>
          </div>
          <div class="w-col w-col-4 w-col-stack col-spc">
            <div class="top-title">
              <div class="title-txt">
                <h5>Why Choose Us&nbsp;<span class="sub-title-lighter">/&nbsp;We'll Tell You</span></h5>
              </div>
              <div class="divider"></div>
            </div>
            <div class="w-embed">
              <div class="accordion ui-accordion ui-widget ui-helper-reset">
                <!-- Accordion 1 -->
                <h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all ui-accordion-header-active ui-state-active ui-corner-top"><span class="ui-accordion-header-icon ui-icon ui-accordion-icon ui-accordion-icon-active"></span>{$contentdata.2.title}</h3>
                <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: block;">
                  <p>{$contentdata.2.content}</p>
                </div>
                <!-- Accordion 2 -->
                <h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all"><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span>{$contentdata.3.title}</h3>
                <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;">
                  <p>{$contentdata.3.content}</p>
                </div>
                <!-- Accordion 3 -->
                <h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all"><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span>{$contentdata.4.title}</h3>
                <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;">
                  <p>{$contentdata.4.content}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-col w-col-4 w-col-stack">
            <div class="top-title">
              <div class="title-txt">
                <h5>Testimonials&nbsp;<span class="sub-title-lighter">/ What Our Clients Think</span></h5>
              </div>
              <div class="divider"></div>
            </div>
            <div>
              <div class="w-slider carousel-second" data-animation="outin" data-duration="500" data-infinite="1" data-delay="6000" data-autoplay="1">
                <div class="w-slider-mask mask"><div class="w-slide" style="transform: translateX(-377px); opacity: 1; z-index: 2734; visibility: hidden;">
                    <div class="spc-btm">
                      <div class="testimonials-wrapper">
                        <div>“This is an introductory dummy text, can be swap with required text. Hybrid IT services Inc is BBB accredited and ethical Arizona certified fast growing company based in USA.”</div>
                        <div class="arrow-testi"></div>
                      </div>
                      <div class="name-testi">
                        <div>John Doe</div>
                      </div>
                    </div>
                    <div>
                      <div class="testimonials-wrapper">
                        <div>“This is an introductory dummy text, can be swap with required text. Hybrid IT services Inc is BBB accredited and ethical Arizona certified fast growing company based in USA.”</div>
                        <div class="arrow-testi"></div>
                      </div>
                      <div class="name-testi">
                        <div>Adam Smith</div>
                      </div>
                    </div>
                  </div><div class="w-slide" style="transform: translateX(-377px); opacity: 1; z-index: 2735; transition: opacity 250ms;">
                    <div class="spc-btm">
                      <div class="testimonials-wrapper">
                        <div>“This is an introductory dummy text, can be swap with required text. Hybrid IT services Inc is BBB accredited and ethical Arizona certified fast growing company based in USA.”</div>
                        <div class="arrow-testi"></div>
                      </div>
                      <div class="name-testi">
                        <div>Dany Mack.</div>
                      </div>
                    </div>
                    <div>
                      <div class="testimonials-wrapper">
                        <div>“This is an introductory dummy text, can be swap with required text. Hybrid IT services Inc is BBB accredited and ethical Arizona certified fast growing company based in USA.”</div>
                        <div class="arrow-testi"></div>
                      </div>
                      <div class="name-testi">
                        <div>Bryan Adam</div>
                      </div>
                    </div>
                  </div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- START SECTION 3 -->

  <!-- END SECTION 3 -->



{*include file="flipserviceshomepage.tpl"*}
{include file="footer.tpl"}