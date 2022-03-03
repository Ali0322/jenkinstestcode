{include file="header.tpl"}
{*include file="slider.tpl"*}


<section class="section gray">
    <div class="w-container">
      <div class="top-title">
        <div class="title-txt">
        <h2>Frequently Asked Questions</h2>
        </div>
        <div class="divider"></div>
        <div class="w-col-12">
        <div class="w-col-12">
                    
                <div class="w-embed">
					<div class="accordion ui-accordion ui-widget ui-helper-reset">
						{section name=q loop=$services}
						<!-- Accordion 1 -->
							<h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all"><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span></span>
							 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne{$services[q].id}">
							   {$services[q].question}
							</a>
							</h3>
							<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: block;">
							  <p>{$services[q].answer}</p>
							</div>
						{/section}
					 </div>
				</div>  
                            <p class="btn btn-primary btn-lg" style="background-color:#CCC;" ><a href="contactus.php">Still Have Question? </a></p>
                            
                          
                        </div><!--/#accordion1-->
                    </div>
               
               </div>
        </div>
      </div>
      <div>
      </div>
     </div> 
    </section>
               
               




{include file="footer.tpl"}