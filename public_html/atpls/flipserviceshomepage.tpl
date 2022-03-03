<!-- START SECTION 3 -->
  <section class="w-section section">
    <div class="w-container">
      <div>
        <div class="w-row">
        <div class="col-md-12 col-md-12">
		
		<div class="w-col w-col-12 w-col-stack col-spc">
            <div class="w-embed">
              <div class="accordion ui-accordion ui-widget ui-helper-reset">
                <!-- Accordion 1 -->
               {section name=q loop=$servicesdata}
			   <h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all"><span class="ui-accordion-header-icon ui-icon ui-accordion-icon"></span></span>
			   <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne{$servicesdata[q].id}" aria-expanded="false">
                    {$servicesdata[q].title}
                </a>
			   </h3>
                <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: block;">
                  <p>{$servicesdata[q].content}</p>
                </div>
				 {/section}
              </div>
            </div>
        </div>

        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION 3 -->